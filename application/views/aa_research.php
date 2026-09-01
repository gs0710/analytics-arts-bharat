<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="ICON" href="<?= base_url() ?>assets/images/research/AA_Mumbai_cropped.ico" type="image/ico" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        :root {
            --primary: #fe8537;
            --width: clamp(30vw, 800px, 85vw);
        }
        *{
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100dvh;
        }
        .research-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
            font-family: 'Poppins', sans-serif;
            flex: 1;
        }

        .research-container .top {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 2rem 2rem 0 2rem;
        }
        .research-container .logo,
        .research-container .top a {
            height: 3rem;
            width: 100%;
        }
        .research-container .img {
            background-image: var(--src);
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .research-container .title {
            text-align: center;
            font-size: 1.2rem;
            font-weight: 500;
            width: var(--width);
        }

        .research-container form {
            width: var(--width);
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        .research-container form .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 2.5rem;
        }

        .input-container {
            position: relative;
            padding: 0;
            margin: 0;
            border-bottom: 2px solid #888;
            transition: all .3s ease;
        }
        .input-container input {
            border: none;
            outline: none;
            background: transparent;
            padding: 0.5rem 0;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            width: 100%;
        }
        .input-container label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            color: #444;
            transition: all .3s ease;
            pointer-events: none;
        }
        .input-container label span,
        .dropdown-container label span {
            color: red;
        }
        .input-container:has(input:focus-within),
        .input-container:has(input:not(:placeholder-shown)) {
            border-bottom: 2px solid var(--primary);
        }
        .input-container input:focus-within ~ label,
        .input-container input:not(:placeholder-shown) ~ label {
            font-size: 0.8rem;
            /* top: 0%; */
            top: -.15rem;
            color: #000;
            font-weight: 600;
        }

        .dropdown-container label.drop-label {
            position: absolute;
            font-size: 0.8rem;
            /* top: 0%; */
            top: -.15rem;
            color: #000;
            transform: translateY(-50%);
            font-weight: 600;
        }

        
        
        .dropdown-container {
            position: relative;
            
        }
        .dropdown-container .text {
            border-bottom: 2px solid #888;
            padding: 0.5rem 0;
            cursor: pointer;
            transition: border .3s ease;
            max-height: 400px;
        }
        .dropdown-container .options {
            position: absolute;
            top: calc(100% + 0.5rem);
            left: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0px 0px 15px #0003;
            background: #fff;
            font-size: 0.9rem;
            max-height: 200px;
            overflow-y: scroll;
        }
        .dropdown-container .options input {
            position: sticky;
            top: 0;
            padding: .75rem .5rem;
            border: none;
            outline: none;
            background: #fff;
            border-bottom: 1px solid #aaa;
            font-family: 'TT Norms Pro', sans-serif;
            font-size: 1rem;
        }
        .dropdown-container .options p {
            padding: 0.25rem 0.5rem;
            margin-top: 0.5rem;
            background: #ddd;
            font-weight: 600;
        }
        .dropdown-container .options li {
            list-style: none;
            padding: 0.25rem 0.5rem;
            padding-left: 1rem;
            background: #fff;
            cursor: pointer;
        }
        .dropdown-container .options li:hover {
            background: #0001;
        }

        .terms {
            display: flex;
            gap: 0.5rem;
            align-items: flex-start;
        }
        .terms input {
            margin-left: 0;
            margin-top: 2px;
            outline: 2px solid var(--primary);
            outline-offset: -1px;
            accent-color: var(--primary);
        }
        .terms p {
            margin: 0;
            padding: 0;
            font-size: 0.8rem;
            color: #666;
        }
        .terms p a {
            font-size: 0.8rem;
            color: #000;
        }

        #form-submit-btn {
            border: none;
            outline: none;
            padding: 0.5rem 2.5rem;
            border-radius: 100px;
            background: var(--primary);
            color: #fff;
            font-size: 1.2rem;
            width: fit-content;
            float: right;
            cursor: pointer;
        }
        #form-submit-btn:disabled {
            opacity: 0.6;
        }

        .footer-links {
            padding: 1rem;
            color: #fff;
            background: var(--primary);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            width: calc(100% - 2rem);
        }
        .footer-links a {
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        #other-qualification, #other-profession {
            display: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/toast.css">
    <script src="<?= base_url() ?>assets/js/toast.js"></script>

</head>
<body>
    <div class="research-container">
        <div class="top">
            <a href="<?= base_url() ?>"><div class="logo img" style='--src: url("<?= base_url() ?>assets/images/research/AA_Mumbai_.png")'></div></a>
            
            <div class="title">
                Registration for community based market research platform
            </div>
        </div>

        <form id="register-form">

            <div class="form-grid">
                <div class="form-group input-container">
                    <input class="form-control" type="text" id="name" name="name" placeholder="" required>
                    <label for="name">Name<span>*</span></label>
                </div>
                
                <div class="input-container">
                    <input type="email" id="email" name="email" placeholder="" required>
                    <label for="u-email">Email<span>*</span></label>
                </div>

                <div class="input-container">
                    <input type="password" id="password", name="password" placeholder="" required autocomplete="new-password">
                    <label for="password">Password<span>*</span></label>
                </div>

                <div class="input-container">
                    <input type="password" id="confirmPassword" placeholder="" required>
                    <label for="confirmPassword">Confirm Password<span>*</span></label>
                </div>

                <div class="input-container">
                    <input type="number" id="phone" name="phone" placeholder="" required>
                    <label for="phone">Phone<span>*</span></label>
                </div>

                
                <!-- custom dropdown-container -->
                <div class="dropdown-container" id="gender" value="">
                    <label class="drop-label">Gender<span>*</span></label>
                    <details class="text">
                        <summary>Select</summary>
                        <div class="options">
                            <input type="text" placeholder="Search...">
                            <li value="">Select</li>
                            <li value="M">Male</li>
                            <li value="F">Female</li>
                            <li value="O">Others</li>
                        </div>
                    </details>
                </div>

                <div class="input-container">
                    <input type="number" id="age" name="age" placeholder="" required>
                    <label for="age">Age<span>*</span></label>
                </div>

                <!-- <div class="input-container">
                    <input type="text" id="profession" name="profession" placeholder="" required>
                    <label for="profession">Profession<span>*</span></label>
                </div> -->

                <!-- custom dropdown-container -->
                <div class="dropdown-container" id="profession" value="">
                    <label class="drop-label">Profession<span>*</span></label>
                    <details class="text">
                        <summary>Select</summary>
                        <div class="options">
                            <input type="text" placeholder="Search...">
                            <li value=''>Select</li>

                            <p>Healthcare</p>
                            <li value="Doctor">Doctor</li>
                            <li value="Nurse">Nurse</li>
                            <li value="Pharmacist">Pharmacist</li>
                            <li value="Therapist">Therapist</li>
                            <li value="Medical Technician">Medical Technician</li>

                            <p>Engineering and Technology</p>
                            <li value="Software Engineer">Software Engineer</li>
                            <li value="Hardware Engineer">Hardware Engineer</li>
                            <li value="Data Specialist">Data Specialist</li>
                            <li value="Cybersecurity">Cybersecurity</li>
                            <li value="Engineering Roles">Engineering Roles</li>

                            <p>Business and Management</p>
                            <li value="Executive">Executive</li>
                            <li value="Manager">Manager</li>
                            <li value="Consultant">Consultant</li>
                            <li value="Analyst">Analyst</li>
                            <li value="Marketing and Sales">Marketing and Sales</li>

                            <p>Education and Training</p>
                            <li value="Teacher">Teacher</li>
                            <li value="Professor">Professor</li>
                            <li value="Trainer">Trainer</li>
                            <li value="Counselor">Counselor</li>

                            <p>Creative and Media</p>
                            <li value="Design">Design</li>
                            <li value="Writing">Writing</li>
                            <li value="Media">Media</li>
                            <li value="Art">Art</li>

                            <p>Trade and Skilled Labor</p>
                            <li value="Construction">Construction</li>
                            <li value="Automotive">Automotive</li>
                            <li value="Manufacturing">Manufacturing</li>
                            <li value="Maintenance">Maintenance</li>

                            <p>Science and Research</p>
                            <li value="Biological Sciences">Biological Sciences</li>
                            <li value="Physical Sciences">Physical Sciences</li>
                            <li value="Environmental Science">Environmental Science</li>
                            <li value="Research">Research</li>

                            <p>Legal and Protective Services</p>
                            <li value="Legal">Legal</li>
                            <li value="Protective Services">Protective Services</li>

                            <p>Hospitality and Service</p>
                            <li value="Food and Beverage">Food and Beverage</li>
                            <li value="Accommodation">Accommodation</li>
                            <li value="Customer Service">Customer Service</li>

                            
                            <p></p>
                            <li value="Student Profession">Student Profession</li>
                            <p></p>
                            <li value="other">Other (Please Specify)</li>
                        </div>
                    </details>
                </div>

                <div class="input-container" id="other-profession">
                    <input type="text" id="other_proff" name="other_proff" placeholder="" required>
                    <label for="other">Other Profession<span>*</span></label>
                </div>

                <!-- custom dropdown-container -->
                <div class="dropdown-container" id="qualification" value="">
                    <label class="drop-label">Highest Qualification<span>*</span></label>
                    <details class="text">
                        <summary>Select</summary>
                        <div class="options">
                            <input type="text" placeholder="Search...">
                            <li value=''>Select</li>
                            <li value="No Formal Education">No Formal Education</li>
                            <li value="Secondary School">Secondary School</li>
                            <li value="High School Diploma or Equivalent">High School Diploma or Equivalent</li>
                            <li value="Vocational/Technical Certification">Vocational/Technical Certification</li>
                            <li value="Associate Degree">Associate Degree</li>
                            <li value="Bachelor's Degree">Bachelor's Degree</li>
                            <li value="Postgraduate Diploma/Certification">Postgraduate Diploma/Certification</li>
                            <li value="Master's Degree">Master's Degree</li>
                            <li value="Professional Degree (e.g., JD, MD, MBA)">Professional Degree (e.g., JD, MD, MBA)</li>
                            <li value="Doctorate (PhD, EdD, etc.)">Doctorate (PhD, EdD, etc.)</li>
                            <li value="Postdoctoral Fellowship">Postdoctoral Fellowship</li>
                            <li value="other">Other (Please Specify)</li>
                        </div>
                    </details>
                </div>

                
                <div class="input-container" id="other-qualification">
                    <input type="text" id="other" name="other" placeholder="" required>
                    <label for="other">Other Qualification<span>*</span></label>
                </div>
                
                
                <div class="input-container">
                    <input type="text" id="residence" name="residence" placeholder="" required>
                    <label for="residence">Current City of Residence<span>*</span></label>
                </div>
                
                <div class="input-container">
                    <input type="text" id="linkedin" name="linkedin" placeholder="">
                    <label for="linkedin">Linkedin</label>
                </div>
            </div>

            <div class="terms">
                <input type="checkbox" onchange="toggleDisable(this)">
                <p for>By clicking here, you are agreeing to our 
                    <a href="<?= base_url() ?>terms_and_condition">Terms of Service and Privacy Policy</a>
                </p>
            </div>

            <div class="buttons">
                <button id="form-submit-btn" disabled type="submit" >Next</button>
            </div>
        </form>

        
        <div class="footer-links">
            <a target="_blank" href="<?= base_url() ?>">Website</a> |
            <a target="_blank"  href="https://www.linkedin.com/company/analytics-arts/?viewAsMember=true">LinkedIn</a> |
            <a target="_blank"  href="https://www.instagram.com/analyticsarts/">Instagram</a>
        </div>
    </div>


    <script src="https://unpkg.com/validator@latest/validator.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        
        let dropdownContainers = document.querySelectorAll('.dropdown-container')
        dropdownContainers.forEach((dropdown, i) => {
            dropdown.style.zIndex = 100 - i // setting up z-index of dropdown
            let options = dropdown.querySelectorAll('.options li')

            // dropdown items click functionality
            options.forEach(li => {
                li.onclick = () => {
                    let details = dropdown.querySelector('details')

                    let value = li.getAttribute('value')
                    details.querySelector('summary').innerText = li.innerText
                    dropdown.setAttribute('value', value)
                    details.removeAttribute('open')
                    if (dropdown.id == 'qualification') {
                        if (value == 'other') document.querySelector('#other-qualification').style.display='flex'
                        else document.querySelector('#other-qualification').style.display='none'
                    }
                    else if (dropdown.id == 'profession') {
                        if (value == 'other') document.querySelector('#other-profession').style.display='flex'
                        else document.querySelector('#other-profession').style.display='none'
                    }
                    
                    if (value == '') details.style.borderBottom = `2px solid #888` 
                    else details.style.borderBottom = `2px solid var(--primary)`
                }
            })

            // dropdown search functionality
            let searchInput = dropdown.querySelector('.options input')
            searchInput.oninput = (e) => {
                options.forEach(option => {
                    option.style.display = option.innerText.toLowerCase().includes(searchInput.value.toLowerCase())? 'flex': 'none'
                })
            }
        })


        let submitBtn = document.querySelector('#form-submit-btn')

        function toggleDisable(e) {
            if (e.checked) submitBtn.removeAttribute('disabled')
            else submitBtn.setAttribute('disabled', true)
        }
        toggleDisable(document.querySelector('.terms input[type="checkbox"]'))

        submitBtn.onclick = (e) => {
            e.preventDefault()
            let form = document.querySelector('#register-form')          

            // checking if any input is empty
            let res = validateForm(form)
            if (res != 'success') {
                showToast('error', res)
                return
            } 

            // replacing qualification with the value in other
            let other = form.querySelector('input#other').value
            let qauliVal = document.querySelector('#qualification').getAttribute('value')
            if (qauliVal == 'other') document.querySelector('#qualification').setAttribute('value', other)

            // replacing profession with the value in other
            let otherProff = form.querySelector('input#other_proff').value
            let proffVal = document.querySelector('#profession').getAttribute('value')
            if (proffVal == 'other') document.querySelector('#profession').setAttribute('value', otherProff)
            
            var formData = new FormData(form);
            formData.set('gender', $('#gender').attr('value'));
            formData.set('qualification', $('#qualification').attr('value'));
            formData.set('profession', $('#profession').attr('value'));

            $.ajax({
                url: '<?php echo base_url('aaUserRegisteration'); ?>',
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(res) {
                    if (res.status == 200) {
                        let a = document.createElement('a')
                        a.href = `<?= base_url() ?>aa_otp_verification?id=${res.userId}`
                        a.click()
                        document.body(a)
                        clearForm(form)
                    }
                    else {
                        showToast('error', res.body)
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Failed to send request:', error);
                }
            });
            form.querySelector('input#other').value = ''
        }


        function validateForm(form) {
            let allInputs = form.querySelectorAll('input')
            for (let i = 0; i < allInputs.length; i++) {
                let input = allInputs[i]
                if (!input.name) continue

                if (input.name == 'linkedin') continue
                else if (input.name == 'name' && input.value.length < 3) {
                    return "Name is not proper";
                }
                else if (input.type == 'text' && input.name != 'other' && input.name != 'other_proff' && input.value.length == 0) {
                    return input.name + " cannot be empty!";
                }
                else if (input.name == 'email' && !validator.isEmail(input.value)) {
                    return 'Incorrect Email!';
                }
                else if (input.name == 'phone' && !validator.isMobilePhone(input.value)) {
                    return 'Incorrect Number!';
                }
                else if (input.type == 'number' && input.value.toString().trim().length == 0) {
                    return input.name + ' Cannot be empty!';
                }
                else if (input.type == 'password' && input.value.length < 6) {
                    return 'Password is less than 6 letters';
                }
            }

            if (form.querySelector('#password').value != form.querySelector('#confirmPassword').value) {
                return "Password and Confirm Password do not match!"
            }

            for (let i = 0; i < dropdownContainers.length; i++) {
                let dropdown = dropdownContainers[i]
                if (dropdown.getAttribute('value') === '') {
                    return `Select ${dropdown.id} dropdown!`
                }
                if (dropdown.id == 'qualification' && 
                    dropdown.getAttribute('value') == 'other' && 
                    document.querySelector('#other-qualification input').value.trim() == '') {
                        return 'Other Qualification cannot be empty!';
                }
                else if (dropdown.id == 'profession' && 
                    dropdown.getAttribute('value') == 'other' && 
                    document.querySelector('#other-profession input').value.trim() == '') {
                        return 'Other Profession cannot be empty!';
                }
            }


            return 'success'
        }

        function clearForm(form) {
            let inputs = form.querySelectorAll('input')
            inputs.forEach(input => {
                input.value = ''
            })
        }

    </script>
</body>