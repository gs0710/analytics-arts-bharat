<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="DAMA Digital Analytics — Your 360° partner for data-driven digital marketing and advanced analytics.">
    <title>Analytics Arts — Data & Digital Analytics Partner</title>

    <link rel="icon" href="<?= base_url() ?>assets/images/research/AA_Mumbai_cropped.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dama-design.css">

    <style>
        /* ================================================================
           CRITICAL INLINE STYLES — guaranteed to apply even when sub-page
           includes inject extra <body> / <html> tags into the DOM.
           The dama-design.css external file handles the rest, but these
           foundational rules are repeated here for resilience.
        ================================================================ */

        /* Force black page background — overrides any sub-page white bg */
        html,
        body {
            background: #080808 !important;
            margin: 0;
            padding: 0;
        }

        /* =============================================================
           NAV SHELL
        ============================================================= */
        .nav-shell {
            position: fixed;
            top: 1rem;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 2.5rem);
            max-width: 1400px;
            z-index: 1000;
            background: #080808;
            border: 1px solid #1e1e1e;
            border-radius: 42px;
            padding: 2px;
        }

        .nav-inner {
            background: #fafaf8;
            border-radius: 36px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1.5rem;
            gap: 2rem;
            height: 72px;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            flex-shrink: 0;
            text-decoration: none;
        }

        .nav-logo img {
            height: 42px;
            width: auto;
            object-fit: contain;
        }

        .nav-logo:hover {
            opacity: 0.8;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links .nav-item {
            font-family: 'Inter', sans-serif;
            font-size: 0.875rem;
            font-weight: 500;
            color: #0f0f0f;
            cursor: pointer;
            padding: 0.45rem 0.85rem;
            border-radius: 14px;
            white-space: nowrap;
            transition: background 150ms ease;
            letter-spacing: -0.01em;
            user-select: none;
        }

        .nav-links .nav-item:hover {
            background: rgba(0, 0, 0, 0.06);
        }

        .nav-links .nav-item.active {
            background: rgba(0, 0, 0, 0.09);
            font-weight: 600;
        }

        .nav-links .nav-cta {
            font-family: 'Inter', sans-serif;
            font-size: 0.875rem;
            font-weight: 600;
            color: #f5f5f5 !important;
            background: #0f0f0f;
            padding: 0.5rem 1.25rem;
            border-radius: 100px;
            margin-left: 0.5rem;
            text-decoration: none;
            white-space: nowrap;
            cursor: pointer;
            display: inline-block;
            transition: background 150ms ease, transform 150ms ease, box-shadow 150ms ease;
        }

        .nav-links .nav-cta:hover {
            background: #333;
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
        }

        /* Hamburger */
        .nav-hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            width: 36px;
            height: 36px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
            border-radius: 8px;
            transition: background 150ms ease;
            flex-shrink: 0;
        }

        .nav-hamburger:hover {
            background: rgba(0, 0, 0, 0.06);
        }

        .nav-hamburger span {
            display: block;
            height: 2px;
            width: 100%;
            background: #0f0f0f;
            border-radius: 2px;
            transition: transform 250ms ease, opacity 250ms ease;
            transform-origin: center;
        }

        .nav-hamburger span:nth-child(2) {
            width: 70%;
        }

        .nav-hamburger.is-open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .nav-hamburger.is-open span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }

        .nav-hamburger.is-open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        /* =============================================================
           MOBILE NAV DRAWER
        ============================================================= */
        .nav-drawer {
            position: fixed;
            inset: 0;
            z-index: 999;
            pointer-events: none;
        }

        .nav-drawer-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            opacity: 0;
            transition: opacity 250ms ease;
        }

        .nav-drawer-panel {
            position: absolute;
            top: calc(72px + 2rem);
            left: 50%;
            transform: translateX(-50%) translateY(-12px);
            width: calc(100% - 2.5rem);
            max-width: 480px;
            background: #fafaf8;
            border-radius: 32px;
            padding: 1.25rem;
            opacity: 0;
            transition: opacity 250ms ease, transform 250ms ease;
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
            box-shadow: 0 20px 64px rgba(0, 0, 0, 0.3);
        }

        .nav-drawer.is-open {
            pointer-events: all;
        }

        .nav-drawer.is-open .nav-drawer-overlay {
            opacity: 1;
        }

        .nav-drawer.is-open .nav-drawer-panel {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        .drawer-item {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            color: #0f0f0f;
            padding: 0.85rem 1rem;
            border-radius: 14px;
            cursor: pointer;
            transition: background 150ms ease;
        }

        .drawer-item:hover {
            background: rgba(0, 0, 0, 0.06);
        }

        .drawer-cta {
            display: block;
            text-align: center;
            background: #0f0f0f;
            color: #f5f5f5 !important;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 0.85rem 1rem;
            border-radius: 100px;
            margin-top: 0.5rem;
            text-decoration: none;
            transition: background 150ms ease;
        }

        .drawer-cta:hover {
            background: #333;
        }

        .nav-drawer-divider {
            height: 1px;
            background: #d8d5cf;
            margin: 0.5rem 0;
        }

        /* =============================================================
           MAIN / HERO LAYOUT
        ============================================================= */
        .lp-main {
            padding: 1.25rem;
            padding-top: calc(72px + 2.5rem);
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            position: sticky;
            top: 0;
            z-index: 0;
            height: 100vh;
        }

        .hero-shell {
            background: #f2f0ec;
            border-radius: 56px;
            border: 1px solid #d8d5cf;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: calc(100dvh - 72px - 5rem);
            overflow: hidden;
            position: relative;
        }

        /* Left — text */
        .hero-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: clamp(2rem, 5vw, 4.5rem);
            gap: 1.25rem; /* Reduced gap to move button up */
            position: relative;
            z-index: 2;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(0, 0, 0, 0.07);
            border: 1px solid #d8d5cf;
            border-radius: 100px;
            padding: 0.35rem 1rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            color: #0f0f0f;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            width: fit-content;
            animation: lp-fadeUp 0.6s ease 0.1s both;
        }

        .tag-dot {
            width: 6px;
            height: 6px;
            background: #0f0f0f;
            border-radius: 50%;
            flex-shrink: 0;
            animation: lp-pulse 2s ease-in-out infinite;
        }

        .hero-heading {
            font-family: 'Inter', sans-serif;
            font-size: clamp(2.6rem, 5vw, 5rem);
            font-weight: 800;
            line-height: 1.04;
            letter-spacing: -0.04em;
            color: #0f0f0f;
            margin: 0;
            animation: lp-fadeUp 0.7s ease 0.25s both;
        }

        .hero-sub {
            font-family: 'TT Norms Pro', sans-serif;
            font-size: clamp(0.95rem, 1.4vw, 1.1rem);
            font-weight: 400;
            color: #5a5a5a;
            line-height: 1.75;
            max-width: 44ch;
            margin: 0;
            animation: lp-fadeUp 0.7s ease 0.4s both;
        }

        .hero-actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            align-items: center;
            margin-top: -0.5rem; /* Moves button slightly upwards */
            animation: lp-fadeUp 0.7s ease 0.55s both;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            color: #f5f5f5;
            background: #0f0f0f;
            border-radius: 100px;
            padding: 0.75rem 1.75rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background 150ms ease, transform 150ms ease, box-shadow 150ms ease;
        }

        .btn-primary:hover {
            background: #2a2a2a;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
            color: #0f0f0f;
            background: transparent;
            border-radius: 100px;
            padding: 0.75rem 1.25rem;
            border: none;
            cursor: pointer;
            transition: background 150ms ease;
        }

        .btn-ghost:hover {
            background: rgba(0, 0, 0, 0.07);
        }

        .btn-ghost .arrow {
            transition: transform 150ms ease;
        }

        .btn-ghost:hover .arrow {
            transform: translateX(3px);
        }

        /* Right — video */
        .hero-visual {
            position: relative;
            background: #0d0d0d;
            overflow: hidden;
            border-radius: 0 55px 55px 0;
            min-height: 400px;
            animation: lp-fadeIn 1s ease 0.5s both;
        }

        .hero-visual video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.92;
        }

        .hero-visual::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 22%;
            height: 100%;
            background: linear-gradient(to right, #f2f0ec, transparent);
            z-index: 1;
            pointer-events: none;
        }

        .hero-visual::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 22%;
            background: linear-gradient(to top, rgba(8, 8, 8, 0.35), transparent);
            z-index: 1;
            pointer-events: none;
        }

        .hero-visual-fallback {
            display: none;
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 60% 40%, #1a2a3a 0%, #050505 70%);
            align-items: center;
            justify-content: center;
        }

        /* Floating badges */
        .hero-badge {
            position: absolute;
            z-index: 3;
            background: rgba(10, 10, 10, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 22px;
            padding: 0.85rem 1.25rem;
            color: #fff;
            font-family: 'Inter', sans-serif;
        }

        .hero-badge .badge-num {
            font-size: 1.6rem;
            font-weight: 800;
            line-height: 1;
            letter-spacing: -0.04em;
            display: block;
        }

        .hero-badge .badge-label {
            font-size: 0.72rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.55);
            letter-spacing: 0.03em;
            text-transform: uppercase;
            display: block;
            margin-top: 0.3rem;
        }

        .hero-badge-1 {
            bottom: 2.5rem;
            left: 2rem;
            animation: lp-float 4s ease-in-out infinite;
        }

        .hero-badge-2 {
            top: 2.5rem;
            right: 2rem;
            animation: lp-float 4s ease-in-out 2s infinite;
        }

        /* Scroll hint */
        .hero-scroll-hint {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: #5a5a5a;
            font-family: 'Inter', sans-serif;
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 1rem 0 0.5rem;
            animation: lp-fadeIn 1s ease 1.2s both;
        }

        .scroll-line {
            width: 1px;
            height: 36px;
            background: linear-gradient(to bottom, #5a5a5a, transparent);
            animation: lp-scrollPulse 1.8s ease-in-out infinite;
        }

        /* =============================================================
           KEYFRAMES
        ============================================================= */
        @keyframes lp-fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes lp-fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes lp-float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }
        }

        @keyframes lp-scrollPulse {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes lp-pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.4;
                transform: scale(0.6);
            }
        }

        /* =============================================================
           RESPONSIVE
        ============================================================= */
        @media (max-width: 1024px) {
            .hero-heading {
                font-size: clamp(2.2rem, 4.5vw, 3.8rem);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none !important;
            }

            .nav-hamburger {
                display: flex !important;
            }

            .nav-inner {
                padding: 0.5rem 1rem;
            }

            .lp-main {
                padding: 1rem;
                padding-top: calc(72px + 2rem);
            }

            .hero-shell {
                grid-template-columns: 1fr;
                border-radius: 42px;
                min-height: auto;
            }

            .hero-content {
                padding: 2.5rem 1.75rem 1.75rem;
                gap: 1.25rem;
                order: 1;
            }

            .hero-visual {
                order: 2;
                border-radius: 0 0 41px 41px;
                min-height: 280px;
                max-height: 380px;
            }

            .hero-visual::before {
                display: none;
            }

            .hero-badge,
            .hero-scroll-hint {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .nav-shell {
                width: calc(100% - 1.5rem);
                border-radius: 32px;
            }

            .nav-inner {
                border-radius: 26px;
            }

            .hero-shell {
                border-radius: 32px;
            }

            .hero-content {
                padding: 2rem 1.25rem 1.25rem;
            }

            .hero-visual {
                min-height: 220px;
                max-height: 280px;
                border-radius: 0 0 31px 31px;
            }

            .hero-actions {
                flex-direction: column;
                align-items: flex-start;
            }

            .btn-primary,
            .btn-ghost {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 375px) {
            .hero-visual {
                min-height: 180px;
                max-height: 240px;
            }
        }
    </style>
</head>

<body>

    <!-- ===================================================================
         NAVBAR
    ==================================================================== -->
    <?php include_once "components/header.php" ?>

    <!-- ===================================================================
         HERO
    ==================================================================== -->
    <div class="lp-main">
        <section class="hero-shell" aria-label="Hero">

            <!-- LEFT: text content -->
            <div class="hero-content">
                <div class="hero-tag">
                    <span class="tag-dot"></span>
                    Data &amp; Analytics Agency
                </div>

                <h1 class="hero-heading">
                    Let the data<br>
                    &amp; its insights<br>
                    change your<br>
                    <span style="color: #ff7a18;">business.</span>
                </h1>

                <p class="hero-sub">
                    We listen to the data's story. We translate its whispers
                    into clear reports, guiding you with actionable insights
                    that drive measurable growth.
                </p>

                <div class="hero-actions">
                    <a href="<?= base_url() ?>aa_research" class="btn-primary">
                        Get Started
                    </a>
                </div>
            </div>

            <!-- RIGHT: video -->
            <div class="hero-visual">
                <video src="<?= base_url() ?>assets/aa/Landing Page Video.mp4" autoplay muted loop playsinline
                    preload="auto"></video>
                <div class="hero-visual-fallback"></div>


            </div>

        </section>

        <!-- Scroll hint removed -->
    </div>


    <!-- ===================================================================
         EXISTING SECTIONS (wrapped for stacking sticky effect)
    ==================================================================== -->
    <div class="stacking-content" style="position: relative; z-index: 10; background: var(--ds-bg);">
        <?php include_once "aa_bharat_business.php" ?>
        <?php include_once "our_story.php" ?>
        <?php include_once "our_teams.php" ?>
        <div id="Contact_Us">
            <?php include_once "contact.php" ?>
        </div>
    </div>

    <!-- ===================================================================
         GLOBAL FOOTER
    ==================================================================== -->
    <?php include_once "components/footer.php" ?>


    <!-- ===================================================================
         PAGE SCRIPTS
    ==================================================================== -->
    <script>
        (function () {
            'use strict';

            /* -----------------------------------------------------------------------
               Scroll: update active nav link as user scrolls into sections
            ----------------------------------------------------------------------- */
            var navShell = document.querySelector('.nav-shell');
            var Sections = [
                document.getElementById('AABharat_for_bussiness'),
                document.getElementById('Our_Story'),
                document.getElementById('Our_Team'),
                document.getElementById('Contact_Us'),
            ].filter(Boolean);

            function getSectionId() {
                return window.location.hash ? window.location.hash.slice(1) : '';
            }

            function setNavActive() {
                var pageId = getSectionId();
                document.querySelectorAll('.nav-links .nav-item, .drawer-item').forEach(function (item) {
                    item.classList.toggle('active', item.getAttribute('data-id') === pageId);
                });
            }

            window.addEventListener('scroll', function () {
                if (!navShell) return;
                var navBottom = navShell.getBoundingClientRect().bottom;
                var pageId = getSectionId();
                Sections.forEach(function (section) {
                    var top = section.getBoundingClientRect().top;
                    if (pageId !== section.id && top <= navBottom + 10 && top > 0) {
                        history.replaceState(null, '', '#' + section.id);
                        setNavActive();
                    }
                });
            });

            setNavActive();

            /* -----------------------------------------------------------------------
               Video fallback
            ----------------------------------------------------------------------- */
            var video = document.querySelector('.hero-visual video');
            var fallback = document.querySelector('.hero-visual-fallback');

            if (video && fallback) {
                var stallTimer = setTimeout(function () {
                    if (video.readyState < 3) {
                        video.style.display = 'none';
                        fallback.style.display = 'flex';
                    }
                }, 4000);
                video.addEventListener('canplay', function () {
                    clearTimeout(stallTimer);
                });
                video.addEventListener('error', function () {
                    video.style.display = 'none';
                    fallback.style.display = 'flex';
                });
            }

        })();
    </script>

    <!-- ===================================================================
         MOTION & ANIMATION SCRIPTS (GSAP)
    ==================================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="<?= base_url() ?>assets/js/dama-motion.js"></script>

</body>

</html>