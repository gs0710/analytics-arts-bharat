<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services &amp; Methodologies — Analytics Arts</title>
    <link rel="ICON" href="<?= base_url() ?>assets/images/research/AA_Mumbai_cropped.ico" type="image/ico" />
    
    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dama-design.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/services_page.css">

    <style>
        html, body {
            background-color: #080808 !important;
            margin: 0;
            padding: 0;
        }
        .main-services-page {
            padding-top: calc(72px + 2.5rem);
            min-height: 100vh;
            background-color: #080808;
        }
    </style>
</head>
<body class="dama-page services-body">

    <!-- Global Header -->
    <?php include_once "components/header.php" ?>
    
    <div class="main-services-page">

        <!-- Top Sticky Services Tab Bar -->
        <div class="services-tabs-wrapper">
            <div class="services-tabs-container">
                <a href="#market_research" class="service-tab-item active" data-id="market_research">
                    Market Research and Analytics
                </a>
                <a href="#customer_insight" class="service-tab-item" data-id="customer_insight">
                    Customer Insights and Engagements
                </a>
                <a href="#data_science" class="service-tab-item" data-id="data_science">
                    Data Science and Business Intelligence
                </a>
            </div>
        </div>

        <!-- Dynamic Service Sections -->
        <?php include_once "market_research.php" ?>
        <?php include_once "customer_insight.php" ?>
        <?php include_once "data_science.php" ?>

    </div>

    <!-- Global Footer -->
    <?php include_once "components/footer.php" ?>

    <script>
        (function () {
            'use strict';

            var tabItems = document.querySelectorAll('.service-tab-item');
            var serviceSections = document.querySelectorAll('.service-view-section');

            function getActiveHash() {
                var hash = window.location.hash.replace('#', '');
                return hash || 'market_research';
            }

            function switchServiceTab(targetId) {
                if (!targetId) targetId = 'market_research';

                // Update tabs
                tabItems.forEach(function (tab) {
                    if (tab.getAttribute('data-id') === targetId) {
                        tab.classList.add('active');
                    } else {
                        tab.classList.remove('active');
                    }
                });

                // Update section visibility
                serviceSections.forEach(function (section) {
                    if (section.id === targetId) {
                        section.classList.add('active');
                    } else {
                        section.classList.remove('active');
                    }
                });
            }

            // Listen to tab clicks
            tabItems.forEach(function (tab) {
                tab.addEventListener('click', function (e) {
                    var targetId = this.getAttribute('data-id');
                    switchServiceTab(targetId);
                });
            });

            // Listen to hash change (back/forward buttons)
            window.addEventListener('hashchange', function () {
                switchServiceTab(getActiveHash());
            });

            // Initial load
            switchServiceTab(getActiveHash());

        })();
    </script>
</body>
</html>