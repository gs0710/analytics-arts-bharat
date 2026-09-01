<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title>Common</title>

    <style>
        :root {
            --primary: #53160d;
            --pad-lr: clamp(5vw, 4rem, 1rem);
        }
        .experts, .clients {
            display: flex;
            flex-direction: column;
            padding: 2rem clamp(1rem, 11vw, 7rem);
            gap: 3rem;
        }

        .experts .title,
        .clients .title {
            font-size: 27px;
            color: var(--primary);
            align-self: center;
            text-align: center;
        }

        .experts .cards {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }
        .experts .cards .card {
            padding: 1rem;
            background: #f3f3f3;
            border-radius: 7px;
            font-size: 0.9rem;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: .75rem;
            min-width: 220px;
            width: 220px;
            flex: 1;
        }
        .experts .cards .card .photo {
            height: 3.8rem;
            width: 3.8rem;
            flex: 1;
        }
        .experts .cards .card span {
            line-height: 1.7;
            flex: 2;
        }


        .clients {
            gap: 2rem;
        }
        .clients .carousel {
            position: relative;
            display: flex;
            overflow: hidden;
            height: var(--height);
        }
        .clients .carousel .list {
            position: absolute;
            width: calc(var(--quantity) * var(--width));
            height: var(--height);
        }
        .clients .carousel img {
            position: absolute;
            left: 100%;
            height: var(--height);
            width: var(--width);
            object-fit: contain;
            animation: slide var(--duration) linear infinite;
            animation-delay: calc((var(--duration) / 13) * (var(--pos) - var(--quantity)));
        }
        @keyframes slide {
            0% {
                left: -300px;
            }
            100% {
                left: 100%;
            }
        }


        @media only screen and (max-width: 600px) {
            .experts, .clients {
                padding: 2rem 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="experts">
        <div class="title">Expertise Across Diverse Sectors</div>
        <div class="cards">
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA.png")'></div>
                <span>Automotive</span>
            </div>

            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-2.png")'></div>
                <span>Banking & Insurance</span>
            </div>

            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-3.png")'></div>
                <span>Packaging</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-4.png")'></div>
                <span>Sports</span>
            </div>

            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-5.png")'></div>
                <span>Entertainment</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-6.png")'></div>
                <span>Real Estate</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-7.png")'></div>
                <span>Utilities</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-8.png")'></div>
                <span>Luxury</span>
            </div>

            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-9.png")'></div>
                <span>Healthcare</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-10.png")'></div>
                <span>Education</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-11.png")'></div>
                <span>Food & Retail</span>
            </div>
            <div class="card">
                <div class="photo image" style='--src: url("<?= base_url() ?>assets/aa/logos/AA-12.png")'></div>
                <span>Telecom</span>
            </div>
        </div>
    </div>

    <div class="clients">
        <div class="title">Our valued clientele</div>
        <div class="carousel"  style="--quantity: 13; --width: 200px; --height: 70px; --duration: 26s">
            <div class="list">
                <img style="--pos: 1" src="<?= base_url() ?>assets/aa/clients/Amplifon_logo.svg.png" alt="">
                <img style="--pos: 2" src="<?= base_url() ?>assets/aa/clients/CONVIVIT_1_d0.jpg" alt="">
                <img style="--pos: 3" src="<?= base_url() ?>assets/aa/clients/download.png" alt="">
                <img style="--pos: 4" src="<?= base_url() ?>assets/aa/clients/fondazione-fiera-milano-logo-vector.png" alt="">
                <img style="--pos: 5" src="<?= base_url() ?>assets/aa/clients/krill design.png" alt="">
                <img style="--pos: 6" src="<?= base_url() ?>assets/aa/clients/Logo_Loacker_Heritage_Shield_RGB.png" alt="">
                <img style="--pos: 7" src="<?= base_url() ?>assets/aa/clients/Logo-Clorofilla-web.png" alt="">
                <img style="--pos: 8" src="<?= base_url() ?>assets/aa/clients/Logo-vianova.svg.png" alt="">
                <img style="--pos: 9" src="<?= base_url() ?>assets/aa/clients/Mediaset_Logo.png" alt="">
                <img style="--pos: 10" src="<?= base_url() ?>assets/aa/clients/Menarini_Group.svg.png" alt="">
                <img style="--pos: 11" src="<?= base_url() ?>assets/aa/clients/puff_logo.jpg" alt="">
                <img style="--pos: 12" src="<?= base_url() ?>assets/aa/clients/SDA_Bocconi_logo_Pant.png" alt="">
                <img style="--pos: 13" src="<?= base_url() ?>assets/aa/clients/sigmund freud university milano.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>