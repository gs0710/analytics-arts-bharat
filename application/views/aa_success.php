<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
        :root {
            --primary: #fe8537;
            --width: clamp(30vw, 500px, 85vw);
        }
        *{
            margin: 0;
            padding: 0;
            /* outline: 1px solid #000; */
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
            gap: 2rem;
            font-family: 'Poppins', sans-serif;
            flex: 1;
        }
        .research-container .top {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 2rem 2rem 0 2rem;
            width: -webkit-fill-available;
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
            width: var(--width);
        }

        .research-container .mid {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            background: var(--primary);
            padding: 2rem;
            text-align: center;
            flex: 1;
            width: calc(100% - 4rem);
        }
        .research-container .mid li {
            list-style: none;
            color: #fff;
            width: var(--width);
        }

        /* .research-container form {
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
        } */

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
        }

        .text {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .text p{
            font-size: 1.1rem;
            color: #222;
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
</head>
<body>
    <div class="research-container">
        <div class="top-section">
            <div class="top">
                <a href="<?= base_url() ?>"><div class="logo img" style='--src: url("<?= base_url() ?>assets/images/research/AA_Mumbai_.png")'></div></a>
                
                <div class="title">
                    Let the data and its insights change your business
                </div>
            </div>

            <div class="text">
                <p>We listen to the data's story. We translate its whispers into clear reports, guiding you with actionable insights.</p>
            </div>
        </div>

        <div class="mid">
            <li>Welcome to Analytics Arts Bharat Community!</li>
            <li>Thank you for joining our vibrant market research and engagement community. Your insights and experiences are invaluable in helping us understand trends and make impactful decisions. We appreciate your participation and look forward to your contribution</li>
            <li class="b">We will update you soon with the link for our surveys and the community platform on your registered email-id.</li>
        </div>
    </div>
    
    <div class="footer-links">
        <a target="_blank" href="<?= base_url() ?>">Website</a> |
        <a target="_blank"  href="https://www.linkedin.com/company/analytics-arts/?viewAsMember=true">LinkedIn</a> |
        <a target="_blank"  href="https://www.instagram.com/analyticsarts/">Instagram</a>
    </div>
</body>
</html>