<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">Service Method — Analytics Arts</title>
    <link rel="ICON" href="<?= base_url() ?>assets/images/research/AA_Mumbai_cropped.ico" type="image/ico" />
    
    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dama-design.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/services_page.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/slide_page.css">
</head>
<body class="dama-page slide-body">

    <!-- Global Header -->
    <?php include_once "components/header.php" ?>

    <div class="slide-page-wrapper">

        <!-- Top Sticky Navigation Tabs -->
        <div class="services-tabs-wrapper">
            <div class="services-tabs-container">
                <a href="<?= base_url() ?>bharat_bussiness_section#market_research" class="service-tab-item active" id="tabMarketResearch">
                    Market Research and Analytics
                </a>
                <a href="<?= base_url() ?>bharat_bussiness_section#customer_insight" class="service-tab-item" id="tabCustomerInsight">
                    Customer Insights and Engagements
                </a>
                <a href="<?= base_url() ?>bharat_bussiness_section#data_science" class="service-tab-item" id="tabDataScience">
                    Data Science and Business Intelligence
                </a>
            </div>
        </div>

        <!-- Main Shell Container (Warm Off-White / Cream Card) -->
        <main class="slide-main-shell">
            
            <!-- Top Actions -->
            <div class="slide-top-actions">
                <a href="<?= base_url() ?>bharat_bussiness_section" class="slide-back-btn" id="slideBackBtn">
                    <i class="fa-solid fa-arrow-left"></i> Back to Methods
                </a>
            </div>

            <!-- Two-Column Content Grid -->
            <div class="slide-content-grid">
                
                <!-- Left Column: Typography, Points, CTA -->
                <div class="slide-info-col">
                    <span class="slide-tag" id="slideTag">METHOD</span>
                    <h1 class="slide-title" id="slideTitle">Loading...</h1>
                    <p class="slide-overview" id="slideOverview"></p>

                    <!-- Key Points List -->
                    <div class="slide-points-list" id="slidePointsList">
                        <!-- Rendered by JS -->
                    </div>

                    <!-- CTA Button -->
                    <div class="slide-cta-wrapper">
                        <a href="<?= base_url() ?>#Contact_Us" class="slide-cta-btn" id="slideCtaBtn">
                            <i class="fa-regular fa-envelope"></i> Send Enquiry <span class="arrow">→</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Visual Diagram Card -->
                <div class="slide-visual-col">
                    <div class="slide-diagram-card">
                        <span class="diagram-tag" id="diagramTag">METHOD DIAGRAM</span>
                        <div class="slide-diagram-img-wrap">
                            <img src="" alt="Method Diagram" class="slide-diagram-img" id="slideDiagramImg">
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom 4-Card Highlights Bar -->
            <div class="slide-bottom-bar" id="slideBottomBar">
                <div class="slide-highlight-card">
                    <div class="slide-highlight-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <div class="slide-highlight-text">
                        <h4>Categorizes Features</h4>
                        <p>Into Must-Have, Performance, and Delighters for clarity.</p>
                    </div>
                </div>

                <div class="slide-highlight-card">
                    <div class="slide-highlight-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="slide-highlight-text">
                        <h4>Aligns with Expectations</h4>
                        <p>Ensures offerings meet and exceed customer needs.</p>
                    </div>
                </div>

                <div class="slide-highlight-card">
                    <div class="slide-highlight-icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <div class="slide-highlight-text">
                        <h4>Actionable Insights</h4>
                        <p>Helps in smarter decisions and resource allocation.</p>
                    </div>
                </div>

                <div class="slide-highlight-card">
                    <div class="slide-highlight-icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                    <div class="slide-highlight-text">
                        <h4>Business Impact</h4>
                        <p>Drives satisfaction, loyalty and long-term growth.</p>
                    </div>
                </div>
            </div>

        </main>

    </div>

    <!-- Global Footer -->
    <?php include_once "components/footer.php" ?>

    <script>
        (function() {
            'use strict';

            var base_url = '<?= base_url() ?>';

            var slideDatabase = {
                // PAGE 1: Market Research and Analytics
                page1: {
                    '1': {
                        title: 'Sentiment & Voice of Customer',
                        tag: 'METHOD',
                        diagramTag: 'SENTIMENT & VOC FRAMEWORK',
                        image: base_url + 'assets/aa/slides/page1slide1.png',
                        overview: 'Unparalleled insights into consumer perceptions and opinions drive our Sentiment & VoC analysis across all omni-channel touchpoints.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Unparalleled Consumer Insights', desc: 'Capture deep perceptions and authentic opinions directly from target audiences.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Multi-Channel Feedback Decoding', desc: 'Advanced text analytics across review boards, surveys, and digital channels.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Market Sentiment Tracking', desc: 'Stay agile and ahead of consumer shifts in real-time competitive environments.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Enhanced Brand Loyalty', desc: 'Transform feedback into actionable strategies that improve customer retention.' },
                            { icon: 'fa-solid fa-trophy', title: 'Strategic Decision Enablement', desc: 'Empower executive decisions with high-fidelity customer intelligence.' }
                        ]
                    },
                    '2': {
                        title: 'Brand Positioning',
                        tag: 'METHOD',
                        diagramTag: 'BRAND POSITIONING MATRIX',
                        image: base_url + 'assets/aa/slides/page1slide2.png',
                        overview: 'Brand Positioning services ensure your brand captures a distinct, defensible, and high-value identity in today’s crowded marketplace.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Distinct Market Differentiation', desc: 'Carve a distinctive space that separates your brand from competitors.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Consumer Perception Mapping', desc: 'Meticulous perceptual maps revealing key purchase drivers and whitespace.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Targeted Value Proposition', desc: 'Align product benefits with high-intent customer desires.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Increased Market Share', desc: 'Convert heightened brand visibility into measurable commercial gains.' },
                            { icon: 'fa-solid fa-trophy', title: 'Sustainable Competitive Advantage', desc: 'Build enduring relevance that protects margins and drives organic advocacy.' }
                        ]
                    },
                    '3': {
                        title: 'Brand Equity',
                        tag: 'METHOD',
                        diagramTag: 'BRAND EQUITY EVALUATION',
                        image: base_url + 'assets/aa/slides/page1slide3.png',
                        overview: 'Brand Equity analysis measures the intangible commercial value, authority, and emotional connection your brand commands in the market.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Intangible Asset Valuation', desc: 'Quantify brand strength, recognition, and perceived quality metrics.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Consumer Trust Building', desc: 'Deep dive into brand associations that foster repeat business.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Market Resilience', desc: 'Shield market presence against economic volatility and competitor aggression.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Pricing Power Optimization', desc: 'Command premium pricing supported by strong brand preference.' },
                            { icon: 'fa-solid fa-trophy', title: 'Enduring Brand Equity', desc: 'Leverage customer loyalty for compounding long-term enterprise value.' }
                        ]
                    },
                    '4': {
                        title: 'Cluster Analysis',
                        tag: 'METHOD',
                        diagramTag: 'CLUSTER SEGMENTATION MAP',
                        image: base_url + 'assets/aa/slides/page1slide4.png',
                        overview: 'Cluster Analysis employs advanced statistical segmentation to discover high-value cohort behaviors and hidden customer clusters.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Advanced Statistical Grouping', desc: 'Segment diverse audiences based on granular behavioral vectors.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Pattern Recognition', desc: 'Uncover non-obvious purchase affinities and usage patterns in big datasets.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Targeted Go-To-Market', desc: 'Tailor offerings and messaging for precise high-converting cohorts.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Personalized Experiences', desc: 'Deliver custom touchpoints that maximize customer lifetime value.' },
                            { icon: 'fa-solid fa-trophy', title: 'Actionable Intelligence', desc: 'Turn multidimensional data clusters into streamlined revenue engines.' }
                        ]
                    },
                    '5': {
                        title: 'Quadrant Analysis',
                        tag: 'METHOD',
                        diagramTag: 'QUADRANT DECISION MATRIX',
                        image: base_url + 'assets/aa/slides/page1slide5.png',
                        overview: 'Quadrant Analysis plots complex data across strategic 2x2 matrices to simplify prioritization and accelerate high-impact decision making.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Strategic 2x2 Visualization', desc: 'Map performance against importance to instantly identify priorities.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Opportunity & Risk Discovery', desc: 'Mitigate blindspots and allocate resources to top-quadrant opportunities.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Resource Optimization', desc: 'Eliminate waste on low-impact areas and focus investment on key drivers.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Streamlined Alignment', desc: 'Create consensus across leadership with intuitive visual clarity.' },
                            { icon: 'fa-solid fa-trophy', title: 'Accelerated Execution', desc: 'Move faster from insight to tactical deployment with clear priority tiers.' }
                        ]
                    },
                    '6': {
                        title: 'Driver Analysis',
                        tag: 'METHOD',
                        diagramTag: 'DRIVER IMPORTANCE RANKING',
                        image: base_url + 'assets/aa/slides/page1slide6.png',
                        overview: 'Driver Analysis utilizes MaxDiff and Conjoint modeling to isolate the primary factors that truly influence customer decisions.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Conjoint & MaxDiff Modeling', desc: 'Quantify relative importance of competing features and price points.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Feature Prioritization', desc: 'Know exactly which attributes drive purchase intent vs mere interest.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Go-To-Market Precision', desc: 'Refine product packaging and promotional value propositions.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Revenue Optimization', desc: 'Build offerings engineered to maximize customer willingness to pay.' },
                            { icon: 'fa-solid fa-trophy', title: 'Market Competitiveness', desc: 'Outperform rival products with scientifically backed feature sets.' }
                        ]
                    },
                    '7': {
                        title: 'KANO Model',
                        tag: 'METHOD',
                        diagramTag: 'KANO MODEL DIAGRAM',
                        image: base_url + 'assets/aa/slides/page1slide7.png',
                        overview: 'Kano Model Analysis categorizes features into Must-Have, Performance, and Delighters for understanding customer preferences.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Understand Customer Priorities', desc: 'Identify what truly matters to your customers and prioritize features that drive satisfaction.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Exceed Expectations', desc: 'Focus on performance and delighters to create standout experiences.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Drive Innovation', desc: 'Uncover potential delighters to fuel product innovation and differentiation.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Improve Satisfaction', desc: 'Align offerings with customer expectations to boost satisfaction and loyalty.' },
                            { icon: 'fa-solid fa-trophy', title: 'Sustainable Growth', desc: 'Deliver tailored solutions that unlock market leadership and long-term success.' }
                        ]
                    },
                    '8': {
                        title: 'Pricing Analysis',
                        tag: 'METHOD',
                        diagramTag: 'PRICE ELASTICITY MODEL',
                        image: base_url + 'assets/aa/slides/page1slide8.png',
                        overview: 'Pricing Analysis determines optimal price elasticity curves, threshold boundaries, and revenue-maximizing packaging structures.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Price Elasticity Modeling', desc: 'Measure how demand responds to price fluctuations across segments.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Van Westendorp & Gabor-Granger', desc: 'Identify acceptable price ranges and psychological pricing thresholds.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Margin Optimization', desc: 'Maximize gross margins without sacrificing overall market penetration.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Competitive Benchmarking', desc: 'Position price points strategically against alternative market solutions.' },
                            { icon: 'fa-solid fa-trophy', title: 'Sustainable Profitability', desc: 'Drive long-term enterprise value with data-backed monetization strategies.' }
                        ]
                    },
                    '9': {
                        title: 'TURF Analysis',
                        tag: 'METHOD',
                        diagramTag: 'TURF REACH OPTIMIZATION',
                        image: base_url + 'assets/aa/slides/page1slide9.png',
                        overview: 'Total Unduplicated Reach and Frequency (TURF) analysis identifies optimal product portfolios that reach the maximum unique customers.',
                        backSection: 'market_research',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Maximized Unique Reach', desc: 'Select product combinations that reach the largest unduplicated audience.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Portfolio Optimization', desc: 'Eliminate cannibalization by pruning overlapping product variants.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Resource Efficiency', desc: 'Focus production and advertising on highest-yielding portfolio bundles.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Market Expansion', desc: 'Pinpoint untapped consumer niches with precision bundle additions.' },
                            { icon: 'fa-solid fa-trophy', title: 'Strategic Distribution', desc: 'Optimize shelf space and media spend for peak revenue generation.' }
                        ]
                    }
                },

                // PAGE 2: Customer Insights and Engagements
                page2: {
                    '1': {
                        title: 'Awareness & Familiarity',
                        tag: 'CUSTOMER INSIGHTS',
                        diagramTag: 'AWARENESS FUNNEL DIAGRAM',
                        image: base_url + 'assets/aa/slides/page2slide1.png',
                        overview: 'Gauges and enhances customer brand recall, aided/unaided awareness, and perception across the target market landscape.',
                        backSection: 'customer_insight',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Brand Recall Measurement', desc: 'Track top-of-mind and aided brand recognition metrics over time.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Market Presence Tracking', desc: 'Benchmark awareness velocity against primary market competitors.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Channel Effectiveness', desc: 'Identify which marketing channels drive the highest brand familiarity.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Brand Authority Expansion', desc: 'Convert passive awareness into active consideration and brand equity.' },
                            { icon: 'fa-solid fa-trophy', title: 'Industry Leadership', desc: 'Solidify market presence for long-term customer acquisition success.' }
                        ]
                    },
                    '2': {
                        title: 'Customer Loyalty & Retention',
                        tag: 'CUSTOMER INSIGHTS',
                        diagramTag: 'LOYALTY ENGAGEMENT LOOP',
                        image: base_url + 'assets/aa/slides/page3slide2.png',
                        overview: 'Fosters deep emotional customer connections, repeat purchase cycles, and reduced churn through personalized loyalty architecture.',
                        backSection: 'customer_insight',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Retention Optimization', desc: 'Build retention programs tailored to high-value customer expectations.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Lifetime Value (LTV) Maximization', desc: 'Increase repeat order velocity and expand annual contract value.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Churn Risk Mitigation', desc: 'Early detection of disengagement signals for proactive re-engagement.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Advocacy Programs', desc: 'Empower delighted customers to become active referral brand champions.' },
                            { icon: 'fa-solid fa-trophy', title: 'Sustainable Growth Loops', desc: 'Create self-reinforcing customer loyalty engines.' }
                        ]
                    },
                    '3': {
                        title: 'NPS & NRI Analytics',
                        tag: 'CUSTOMER INSIGHTS',
                        diagramTag: 'NET PROMOTER METRIC DASHBOARD',
                        image: base_url + 'assets/aa/slides/page3slide3.png',
                        overview: 'Monitors Net Promoter Score (NPS) and Net Referral Index (NRI) to continuously enhance product-market fit and satisfaction.',
                        backSection: 'customer_insight',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Continuous Satisfaction Telemetry', desc: 'Real-time monitoring of customer delight and friction points.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Promoter & Detractor Insights', desc: 'Deep dive into key drivers that convert passives into promoters.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Product-Market Feedback', desc: 'Close the loop between user experience and product roadmap decisions.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Benchmarking Standards', desc: 'Measure customer happiness against top industry standards.' },
                            { icon: 'fa-solid fa-trophy', title: 'Advocacy Growth', desc: 'Elevate organic referral velocity across customer cohorts.' }
                        ]
                    }
                },

                // PAGE 3: Data Science and Business Intelligence
                page3: {
                    '1': {
                        title: 'Market Basket Analysis',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'ASSOCIATION RULE DIAGRAM',
                        image: base_url + 'assets/aa/slides/page3slide1.png',
                        overview: 'Uncovers transaction affinities, co-purchasing patterns, and association rules to power cross-sell algorithms and catalog layout.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Affinity Pattern Mining', desc: 'Discover unexpected correlations between co-purchased items.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Cross-Sell Optimization', desc: 'Deploy automated recommendation rules that elevate average order value.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Merchandising Strategy', desc: 'Optimize digital catalog placement and physical store displays.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Promotional Bundling', desc: 'Design high-converting bundle promotions backed by transaction data.' },
                            { icon: 'fa-solid fa-trophy', title: 'Revenue Expansion', desc: 'Unlock hidden sales volume from existing customer traffic.' }
                        ]
                    },
                    '2': {
                        title: 'Churn Rate Analysis',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'PREDICTIVE CHURN MODEL',
                        image: base_url + 'assets/aa/slides/page3slide2.png',
                        overview: 'Applies machine learning to detect attrition triggers and predict churn probability before customer departure occurs.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Early Churn Warning System', desc: 'Identify at-risk accounts weeks before contract renewal dates.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Behavioral Feature Extraction', desc: 'Isolate specific platform usage drops that indicate churn intent.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Automated Retention Triggers', desc: 'Deploy tailored win-back campaigns and personalized incentives.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Margin Protection', desc: 'Reduce customer acquisition costs by saving existing revenue streams.' },
                            { icon: 'fa-solid fa-trophy', title: 'Predictive Competitiveness', desc: 'Transform historical telemetry into proactive customer success.' }
                        ]
                    },
                    '3': {
                        title: 'Predictive Forecasting',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'TIME-SERIES FORECASTING MODEL',
                        image: base_url + 'assets/aa/slides/page3slide3.png',
                        overview: 'Deploys advanced time-series modeling to forecast demand, inventory velocity, and revenue with high statistical accuracy.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Time-Series Machine Learning', desc: 'Forecast sales, churn, and traffic with seasonal adjustment.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Demand Planning', desc: 'Prevent stockouts and reduce excess inventory holding costs.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Scenario Simulation', desc: 'Model best-case, base-case, and worst-case market conditions.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Cash Flow Visibility', desc: 'Equip finance teams with reliable multi-quarter forward projections.' },
                            { icon: 'fa-solid fa-trophy', title: 'Data-Driven Agility', desc: 'Navigate dynamic economic shifts with clear probabilistic models.' }
                        ]
                    },
                    '4': {
                        title: 'Market-Mix Modelling (MMM)',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'ATTRIBUTION & MMM DIAGRAM',
                        image: base_url + 'assets/aa/slides/page3slide4.png',
                        overview: 'Quantifies the exact ROI and incremental sales impact of each marketing channel, both online and offline.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Multi-Touch Channel Attribution', desc: 'Isolate the distinct sales contribution of digital and traditional media.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Budget Allocation Efficiency', desc: 'Reallocate ad spend to channels yielding highest marginal returns.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Diminishing Returns Modeling', desc: 'Identify saturation thresholds to prevent wasteful overspending.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Macro Factor Normalization', desc: 'Account for seasonality, promotions, and macroeconomic trends.' },
                            { icon: 'fa-solid fa-trophy', title: 'Maximized Marketing ROI', desc: 'Ensure every marketing dollar contributes to bottom-line profitability.' }
                        ]
                    },
                    '5': {
                        title: 'Propensity Analysis',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'PROPENSITY SCORING PIPELINE',
                        image: base_url + 'assets/aa/slides/page3slide5.png',
                        overview: 'Predicts the likelihood of specific customer actions, such as upgrading, purchasing, or responding to promotions.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Behavioral Propensity Scoring', desc: 'Score each lead on propensity to buy, upgrade, or cross-convert.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Sales Prioritization', desc: 'Route high-propensity opportunities to sales reps for faster closes.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Targeted Marketing', desc: 'Eliminate ad waste by focusing campaigns on receptive leads.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Conversion Rate Uplift', desc: 'Deliver tailored offers at the exact moment of peak buyer intent.' },
                            { icon: 'fa-solid fa-trophy', title: 'Scalable Growth Engine', desc: 'Automate lead scoring across entire enterprise CRM databases.' }
                        ]
                    },
                    '6': {
                        title: 'Text & NLP Analysis',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'NLP TEXT PIPELINE',
                        image: base_url + 'assets/aa/slides/page3slide6.png',
                        overview: 'Leverages Natural Language Processing to extract actionable themes, sentiment polarity, and customer feedback patterns.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Natural Language Processing', desc: 'Parse thousands of reviews, emails, and tickets in seconds.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Topic & Entity Extraction', desc: 'Detect emerging product bugs, feature requests, and competitor praise.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Sentiment Polarity Mapping', desc: 'Track customer sentiment shifts over product lifecycle releases.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Support Ticket Automation', desc: 'Categorize customer inquiries to streamline support operations.' },
                            { icon: 'fa-solid fa-trophy', title: 'Unstructured Data Value', desc: 'Unlock massive business intelligence buried in raw textual records.' }
                        ]
                    },
                    '7': {
                        title: 'Geo-Marketing Analytics',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'SPATIAL INTELLIGENCE MAP',
                        image: base_url + 'assets/aa/slides/page3slide7.png',
                        overview: 'Combines geospatial datasets, demographic telemetry, and footfall metrics for hyper-local expansion and targeted advertising.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Location Intelligence', desc: 'Map market penetration and whitespace across geographic regions.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Store Site Selection', desc: 'Evaluate new retail locations using foot traffic and demographic density.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Hyper-Local Targeting', desc: 'Deliver location-specific campaigns that drive in-store foot traffic.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Territory Optimization', desc: 'Balance sales territories and distribution routes for maximum efficiency.' },
                            { icon: 'fa-solid fa-trophy', title: 'Regional Market Dominance', desc: 'Outmaneuver competitors with hyper-local competitive insights.' }
                        ]
                    },
                    '8': {
                        title: 'Recommendation Engine',
                        tag: 'DATA SCIENCE',
                        diagramTag: 'RECOMMENDATION MATRIX',
                        image: base_url + 'assets/aa/slides/page3slide8.png',
                        overview: 'Powers real-time personalized product and content recommendations utilizing collaborative and content-based filtering.',
                        backSection: 'data_science',
                        points: [
                            { icon: 'fa-regular fa-star', title: 'Collaborative & Content Filtering', desc: 'Deliver tailored suggestions matching individual user taste vectors.' },
                            { icon: 'fa-solid fa-crosshairs', title: 'Real-Time Inference Engine', desc: 'Update recommendations dynamically as users browse your platform.' },
                            { icon: 'fa-regular fa-lightbulb', title: 'Engagement & Session Depth', desc: 'Keep users engaged longer with curated next-best-action discovery.' },
                            { icon: 'fa-solid fa-chart-line', title: 'Conversion Rate Multiplication', desc: 'Elevate click-through rates and basket sizes across digital storefronts.' },
                            { icon: 'fa-solid fa-trophy', title: 'Automated Personalization', desc: 'Scale 1-to-1 customer personalization to millions of active users.' }
                        ]
                    }
                }
            };

            // Parse URL parameters
            var urlParams = new URLSearchParams(window.location.search);
            var pageNo = urlParams.get('page') || '1';
            var slideNo = urlParams.get('slide') || '1';

            var pageKey = 'page' + pageNo;
            var slideData = (slideDatabase[pageKey] && slideDatabase[pageKey][slideNo]) || slideDatabase.page1['7']; // Default to Kano Model if not found

            // Update Page Title
            document.title = slideData.title + ' — Analytics Arts';

            // Update Back Button & Tabs
            var backSection = slideData.backSection || 'market_research';
            var backBtn = document.getElementById('slideBackBtn');
            if (backBtn) {
                backBtn.href = base_url + 'bharat_bussiness_section#' + backSection;
            }

            // Highlight corresponding tab
            var tabMarket = document.getElementById('tabMarketResearch');
            var tabCustomer = document.getElementById('tabCustomerInsight');
            var tabData = document.getElementById('tabDataScience');

            if (tabMarket && tabCustomer && tabData) {
                tabMarket.classList.remove('active');
                tabCustomer.classList.remove('active');
                tabData.classList.remove('active');

                if (backSection === 'market_research') tabMarket.classList.add('active');
                else if (backSection === 'customer_insight') tabCustomer.classList.add('active');
                else if (backSection === 'data_science') tabData.classList.add('active');
            }

            // Render Content
            var slideTagElem = document.getElementById('slideTag');
            var slideTitleElem = document.getElementById('slideTitle');
            var slideOverviewElem = document.getElementById('slideOverview');
            var diagramTagElem = document.getElementById('diagramTag');
            var slideDiagramImgElem = document.getElementById('slideDiagramImg');
            var slidePointsListElem = document.getElementById('slidePointsList');

            if (slideTagElem) slideTagElem.textContent = slideData.tag || 'METHOD';
            if (slideTitleElem) slideTitleElem.textContent = slideData.title || '';
            if (slideOverviewElem) slideOverviewElem.textContent = slideData.overview || '';
            if (diagramTagElem) diagramTagElem.textContent = slideData.diagramTag || (slideData.title + ' DIAGRAM');
            
            if (slideDiagramImgElem) {
                slideDiagramImgElem.src = slideData.image || '';
                slideDiagramImgElem.alt = slideData.title + ' Diagram';
            }

            // Render 5 Key Points
            if (slidePointsListElem && slideData.points) {
                slidePointsListElem.innerHTML = '';
                slideData.points.forEach(function(pt) {
                    var item = document.createElement('div');
                    item.className = 'slide-point-item';
                    item.innerHTML = 
                        '<div class="point-icon-badge"><i class="' + (pt.icon || 'fa-regular fa-star') + '"></i></div>' +
                        '<div class="point-content">' +
                            '<h4 class="point-title">' + (pt.title || '') + '</h4>' +
                            '<p class="point-desc">' + (pt.desc || '') + '</p>' +
                        '</div>';
                    slidePointsListElem.appendChild(item);
                });
            }

        })();
    </script>

</body>
</html>