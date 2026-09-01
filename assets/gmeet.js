
    // TODO(developer): Set to client ID and API key from the Developer Console
    const CLIENT_ID = "1062149347160-17ucbr47jr33ojbhjljdfg9n9r0mmu5i.apps.googleusercontent.com";
    const API_KEY = "AIzaSyB8M7jvCOIHh2Z9HoAPZBWQgY2ONq-ipoc";

    // Discovery doc URL for APIs used by the quickstart
    const DISCOVERY_DOC = "https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest";

    // Authorization scopes required by the API; multiple scopes can be included, separated by spaces.
    const SCOPES = "https://www.googleapis.com/auth/calendar";

    let tokenClient;
    let gapiInited = false;
    let gisInited = false;

    document.getElementById("authorize_button").style.visibility = "hidden";
    document.getElementById("signout_button").style.visibility = "hidden";
    document.getElementById("add-seesion-form").style.visibility = "hidden";
    document.getElementById("add-appt-footer").style.visibility = "hidden";

    function gapiLoaded() {
        gapi.load("client", initializeGapiClient);
    }

    async function initializeGapiClient() {
        await gapi.client.init({
            apiKey: API_KEY,
            discoveryDocs: [DISCOVERY_DOC]
        });
        gapiInited = true;
        maybeEnableButtons();
    }

    function gisLoaded() {
        tokenClient = google.accounts.oauth2.initTokenClient({
            client_id: CLIENT_ID,
            scope: SCOPES,
            callback: "" // defined later
        });
        gisInited = true;
        maybeEnableButtons();
    }

    function maybeEnableButtons() {
        if (gapiInited && gisInited) {
            document.getElementById("authorize_button").style.visibility = "visible";
            checkStoredToken();
        }
    }

    function checkStoredToken() {
        const token = localStorage.getItem("access_token");
        if (token) {
            gapi.client.setToken({ access_token: token });
            document.getElementById("signout_button").style.visibility = "visible";
            document.getElementById("add-seesion-form").style.visibility = "visible";
            document.getElementById("authorize_button").innerText = "Refresh";
            document.getElementById("add-appt-footer").style.visibility = "visible";
            listUpcomingEvents();
        } else {
            document.getElementById("authorize_button").style.visibility = "visible";
        }
    }
    

    function handleAuthClick() {
        tokenClient.callback = async resp => {
            if (resp.error !== undefined) {
                throw resp;
            }
            localStorage.setItem("access_token", resp.access_token); 
            document.getElementById("signout_button").style.visibility = "visible";
            document.getElementById("add-seesion-form").style.visibility = "visible";
            document.getElementById("authorize_button").innerText = "Refresh";
            document.getElementById("add-appt-footer").style.visibility = "visible";
            listUpcomingEvents();
        };
    
        if (gapi.client.getToken() === null) {
            tokenClient.requestAccessToken({ prompt: "consent" });
        } else {
            tokenClient.requestAccessToken({ prompt: "" });
        }
    }
    

    function handleSignoutClick() {
        const token = gapi.client.getToken();
        if (token !== null) {
            google.accounts.oauth2.revoke(token.access_token, () => {
                gapi.client.setToken("");
                localStorage.removeItem("access_token");
                document.getElementById("content").innerText = "";
                document.getElementById("authorize_button").innerText = "Authorize";
                document.getElementById("signout_button").style.visibility = "hidden";
                document.getElementById("add-seesion-form").style.visibility = "hidden"; 
                document.getElementById("add-appt-footer").style.visibility = "hidden";
            });
        }
    }

    async function listUpcomingEvents() {
        let response;
        try {
            const request = {
                calendarId: "primary",
                timeMin: new Date().toISOString(),
                showDeleted: false,
                singleEvents: true,
                maxResults: 10,
                orderBy: "startTime"
            };
            response = await gapi.client.calendar.events.list(request);
        } catch (err) {
            console.log(err,'');
            
            document.getElementById("content").innerText = err.message;
            return;
        }

        const events = response.result.items;
        if (!events || events.length == 0) {
            document.getElementById("content").innerText = "No events found.";
            return;
        }
        const output = events.reduce((str, event) =>
            `${str}${event.summary} (${event.start.dateTime || event.start.date})\n`, "Events:\n");
        document.getElementById("content").innerText = output;
    }

    function addEvent(st, et, attendee_email, callback) {
        const title = $("#addtitle").val();
        const desc = $("#description").val();
        const date = $("#appDate").val();
        const start = st;
        const end = et;
    
        const startTime = new Date(date + "T" + start).toISOString();
        const endTime = new Date(date + "T" + end).toISOString();
    
        var event = {
            summary: title,
            location: "Google Meet",
            description: desc,
            start: {
                dateTime: startTime,
                timeZone: "Asia/Kolkata" // Indian Standard Time
            },
            end: {
                dateTime: endTime,
                timeZone: "Asia/Kolkata" // Indian Standard Time
            },
            conferenceData: {
                createRequest: {
                    requestId: "some-unique-id" // Replace with a unique ID
                }
            },
            attendees: [{ email: attendee_email }],
            reminders: {
                useDefault: false,
                overrides: [
                    { method: "email", minutes: 24 * 60 },
                    { method: "popup", minutes: 10 }
                ]
            }
        };
    
        // Making an AJAX request to insert the event
        $.ajax({
            url: "https://www.googleapis.com/calendar/v3/calendars/primary/events?conferenceDataVersion=1",
            type: "POST",
            data: JSON.stringify(event),
            headers: {
                "Authorization": "Bearer " + gapi.client.getToken().access_token,
                "Content-Type": "application/json"
            },
            success: function(event) {
                let googleMeetLink = null;
    
                if (event.conferenceData && event.conferenceData.entryPoints) {
                    var entryPoints = event.conferenceData.entryPoints;
                    for (var i = 0; i < entryPoints.length; i++) {
                        if (entryPoints[i].entryPointType === "video") {
                            googleMeetLink = entryPoints[i].uri;
                            break;
                        }
                    }
                } else if (event.hangoutLink) {
                    googleMeetLink = event.hangoutLink;
                }
    
                if (googleMeetLink) {
                    console.log("Google Meet link: " + googleMeetLink);
                } else {
                    console.log("No Google Meet link found.");
                }
    
                // Call the callback function with the Google Meet link if it exists
                if (typeof callback === "function") {
                    callback(googleMeetLink);
                }
            },
            error: function(err) {
                console.error("Error creating event:", err);
                if (typeof callback === "function") {
                    callback(null, err);
                }
            }
        });
    }
    

    async function createMeet(calendarId, eid) {
        const eventPatch = {
            conferenceData: {
                createRequest: {
                    requestId: "7qxalsvy0e"
                }
            }
        };

        await gapi.client.calendar.events.patch({
            calendarId: calendarId,
            eventId: eid, // id + startdate.toISOString()
            resource: eventPatch,
            sendNotifications: true,
            conferenceDataVersion: 1
        }).execute(function(event) {
            console.log("Conference created for event: %s", event.htmlLink);
        });
    }

    // Load the API and make an API call. Display the results on the screen.
    document.getElementById("authorize_button").addEventListener("click", handleAuthClick);
    document.getElementById("signout_button").addEventListener("click", handleSignoutClick);

    // Load the API client and auth2 library
    gapiLoaded();
    gisLoaded();

