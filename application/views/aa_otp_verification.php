<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
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

        .research-container .top-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* justify-content: space-between; */
            gap: 3rem;
            font-family: 'Poppins', sans-serif;
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
    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/toast.css">
    <script src="<?= base_url() ?>assets/js/toast.js"></script>
</head>

<body>
    <div class="research-container">
        <div class="top-section">
            <div class="top">
                <a href="<?= base_url() ?>"><div class="logo img" style='--src: url("<?= base_url() ?>assets/images/research/AA_Mumbai_.png")'></div></a>
                <div class="title">
                    Registration for community based market research platform
                </div>
            </div>
            <input type="hidden" name="user_id" id="user_id" value="<?=$id?>">
           <form id="register-form">
                <div class="form-group input-container">
                    <input class="form-control" type="number" id="otp" name="otp" placeholder="" required>
                    <label for="name">OTP<span>*</span></label>
                </div>
                
                <div class="buttons">
                    <button id="form-submit-btn" type="submit" >Submit</button>
                </div>
            </form>

            <div class="text">
                <p>Didn't receive OTP yet?</p>
                <p>click <a href="javascript:void(0)" onclick="resend_otp()">here</a> to Resend OTP</p>
            </div>

            <div class="title">OTP is sent on your registered email-id and contact</div>

        </div>


        <div class="footer-links">
            <a target="_blank" href="<?= base_url() ?>">Website</a> |
            <a target="_blank"  href="https://www.linkedin.com/company/analytics-arts/?viewAsMember=true">LinkedIn</a> |
            <a target="_blank"  href="https://www.instagram.com/analyticsarts/">Instagram</a>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let submitBtn = document.querySelector('#form-submit-btn')

        submitBtn.onclick = (e) => {
            e.preventDefault()
            let otp = document.querySelector('input#otp').value
            if (otp.trim().length < 6 ) return showToast('error', "OTP Cannot be less that 6 digits!")

            let searchQuery = window.location.search
            let params = new URLSearchParams(searchQuery)
            let id = params.get('id')
            let user_id = $("#user_id").val();
           
            // id, otp
            let form = document.querySelector('#register-form')
            var formData = new FormData(form);
            formData.set('otp', otp);
            formData.set('user_id', user_id);

            $.ajax({
                url: '<?php echo base_url('verifyAA_otp'); ?>',
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(res) {
                    if(res.status==200)
                    {
                        document.write(`<?php include "aa_success.php" ?>`)
                        showToast('success', res.body)
                    }else{
                        showToast('error', res.body)
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Failed to send request:', error);
                }
            });
            
        }

        function resend_otp()
        {
            var user_id = $("#user_id").val();
            var formData = new FormData();
            formData.set('user_id', user_id);

            $.ajax({
                url: '<?php echo base_url('resendAA_otp'); ?>',
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(res) {
                    if(res.status==200)
                    {
                        showToast('success', "New OTP send Successfully!")
                    }else{
                        showToast('error', res.body)
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Failed to send request:', error);
                }
            });
        }
    </script>
</body>
</html>