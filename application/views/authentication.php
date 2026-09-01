<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="ICON" href="<?= base_url() ?>assets/images/research/AA_Mumbai_cropped.ico" type="image/ico" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        :root {
            --primary: #fe8537;
            --width: clamp(30vw, 500px, 85vw);
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
            /* align-items: center; */
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
        .research-container .logo {
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

        .research-container .top-section {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            /* justify-content: space-between; */
            gap: 3rem;
            font-family: 'Poppins', sans-serif;
        }

        .research-container form {
            width: var(--width);
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-self: center;
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
            top: 0%;
            color: #000;
            font-weight: 600;
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

        .text {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .text p{
            font-size: 1.1rem;
            color: #333;
            text-align: center;
        }
        .text p a {
            font-weight: 600;
            color: #000;
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


        .table-container {
            align-self: center;
            /* width: clamp(60vw, 1000px, calc(100% - 2rem)); */
            height: 60dvh;
            width: calc(100% - 2rem);
            display: flex;
            flex-direction: column;
            overflow: auto;
            gap: 1rem;
            display: none;
        }
        .table-container table {
            border-spacing: 0;
        }
        .table-container table thead {
            background: #e3eaec;
            position: sticky;
            top: 0;
            z-index: 10000;
        }
        .table-container table th {
            padding: 0.5rem 1rem;
            font-size: 0.95rem;
            font-weight: 500;
            border: none;
            outline: none;
            white-space: nowrap;
            text-align: left;
            text-transform: capitalize;
        }

        .table-container table tbody tr {
            box-sizing: border-box;
        }

        .table-container table tbody tr  td {
            position: relative;
            max-width: 150px;
        }
        .table-container table tbody tr td::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0px;
            height: 2px;
            width: 100%;
            background: #0001;
        }
        .table-container table td {
            padding: 0.5rem 1rem;
            font-size: 0.95rem;
            font-weight: 400;
            border: none;
            outline: none;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .table-container input {
            --width: clamp(30vw, 400px, calc(100% - 1.5rem));
            position: sticky;
            top: 0;
            left: calc(100% - 1.5rem - var(--width));
            padding: .75rem;
            border: none;
            outline: none;
            background: transparent;
            outline: 2px solid #0003;
            outline-offset: -2px;
            border-radius: 5px;
            font-size: 0.9rem;
            align-self: flex-end;
            width: var(--width);
        }
    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/toast.css">
    <script src="<?= base_url() ?>assets/js/toast.js"></script>
</head>

<body>
    <div class="research-container">
        <div class="top-section">
            <div class="top">
                <div class="logo img" style='--src: url("<?= base_url() ?>assets/images/research/AA_Mumbai_.png")'></div>
                <div class="title">
                    Authentication for community based market research platform
                </div>
            </div>

           <form id="authenticate-form">
                <div class="form-group input-container">
                    <input class="form-control" type="password" id="token" name="token" placeholder="" required>
                    <label for="name">Token<span>*</span></label>
                </div>
                <div class="buttons">
                    <button id="form-submit-btn" type="submit" >Submit</button>
                </div>
            </form>

            <div class="table-container">
                <!-- <input type="text" placeholder="Search"> -->
                <table id="user-table">
                    <thead></thead>

                    <tbody></tbody>
                </table>
            </div>
        </div>

            
        


        <div class="footer-links">
            <a target="_blank" href="https://www.analyticsarts.it/">Website</a> |
            <a target="_blank"  href="https://www.linkedin.com/company/analytics-arts/?viewAsMember=true">LinkedIn</a> |
            <a target="_blank"  href="https://www.instagram.com/analyticsarts/">Instagram</a>
        </div>
    </div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let submitBtn = document.querySelector('#form-submit-btn')

        submitBtn.onclick = (e) => {
            e.preventDefault()
            let token = document.querySelector('input#token').value
            
            var formData = new FormData();
            formData.set('token', token);

            if (token.length < 6) return showToast('error', "Token cannot be less than 6 digits!")
            if (token != 'Analytics@1234') return showToast('error', "Incorrect Token!")

            // ajax call
            $.ajax({
                url: '<?php echo base_url('Welcome/get_data'); ?>',
                method: "GET",
                success: function(res) {
                    let resp = JSON.parse(res);
                    
                    if (resp.status == 200) {
                        renderTable(resp.data, '#user-table')
                        showToast('success', "Authenticated Successfully!")
                    }
                    else {
                        
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Failed to send request:', error);
                }
            });
        }

        function renderTable(data, table) {
            document.querySelector(`.table-container`).style.display = 'flex'
            document.querySelector(`.top-section #authenticate-form`).style.display = 'none'

            let thead = document.querySelector(`${table} thead`)
            let tbody = document.querySelector(`${table} tbody`)

            thead.innerHTML = ''
            tbody.innerHTML = ''

            let tr = document.createElement('tr')
            for (const key in data[0]) {
                let th = document.createElement('th')
                th.innerText = key.replaceAll('_', ' ')
                tr.appendChild(th)
            }
            thead.appendChild(tr)

            data.forEach(row => {
                let tr = document.createElement('tr')
                for (const key in row) {
                    let td = document.createElement('td')
                    if (key.includes('url')) {
                        let a = document.createElement('a')
                        a.href = row[key]
                        a.innerText = row[key]
                        td.appendChild(a)
                    }
                    else {
                        td.innerText = row[key]
                    }
                    tr.appendChild(td)
                }
                tbody.appendChild(tr)
            });
        }
    </script>

    <script>
        


        // let tableSearchBtn = document.querySelector('.table-container input')
        // tableSearchBtn.oninput = (e) => {
        //     let allTrs = document.querySelectorAll(`#user-table tbody tr`)
        //     allTrs.forEach(tr => {
        //         let tds = tr.querySelectorAll('td')
        //         tds.forEach(td => {
        //             if (td.innerText.includes(tableSearchBtn.value)) {
        //                 tr.style.display = 'initial'
        //                 return
        //             }
        //             else {
        //                 tr.style.display = 'none'
        //             }
        //         })
        //     })
        // }
    </script>
</body>
</html>