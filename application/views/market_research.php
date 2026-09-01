<div id="market_research" class="service-view-section active">
    
    <!-- Approach Header -->
    <div class="approach-header">
        <span class="approach-tag">OUR APPROACH</span>
        <h1 class="approach-title">ADAPT Framework</h1>
        <p class="approach-desc">
            A structured 5-phase approach that transforms insights into impactful business outcomes.
        </p>
    </div>

    <!-- Interactive / Visual 5-Phase ADAPT Flow Diagram -->
    <div class="framework-diagram-card">
        <div class="framework-flow-wrapper">
            <svg class="framework-svg-container" viewBox="0 0 1180 370" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <!-- Diamond Gradients -->
                    <linearGradient id="diamondGrad1" x1="50" y1="130" x2="210" y2="250" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#99f6e4" stop-opacity="0.85" />
                        <stop offset="100%" stop-color="#2dd4bf" stop-opacity="0.55" />
                    </linearGradient>
                    <linearGradient id="diamondGrad2" x1="210" y1="130" x2="390" y2="250" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#5eead4" stop-opacity="0.80" />
                        <stop offset="100%" stop-color="#14b8a6" stop-opacity="0.55" />
                    </linearGradient>
                    <linearGradient id="diamondGrad3" x1="390" y1="130" x2="570" y2="250" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#2dd4bf" stop-opacity="0.75" />
                        <stop offset="100%" stop-color="#0f766e" stop-opacity="0.60" />
                    </linearGradient>
                    <linearGradient id="diamondGrad4" x1="570" y1="110" x2="810" y2="270" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#14b8a6" stop-opacity="0.70" />
                        <stop offset="100%" stop-color="#115e59" stop-opacity="0.50" />
                    </linearGradient>
                    <linearGradient id="funnelTailGrad" x1="810" y1="135" x2="1080" y2="190" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#115e59" stop-opacity="0.65" />
                        <stop offset="70%" stop-color="#042f2e" stop-opacity="0.45" />
                        <stop offset="100%" stop-color="#042f2e" stop-opacity="0.05" />
                    </linearGradient>
                    <filter id="badgeShadow" x="-20%" y="-20%" width="140%" height="140%">
                        <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#000000" flood-opacity="0.35"/>
                    </filter>
                    <filter id="cyanGlow" x="-30%" y="-30%" width="160%" height="160%">
                        <feGaussianBlur stdDeviation="3" result="blur" />
                        <feComposite in="SourceGraphic" in2="blur" operator="over" />
                    </filter>
                </defs>

                <!-- Background Subtle Flow Line -->
                <path d="M 50 190 Q 550 170 1080 190" stroke="rgba(34, 211, 238, 0.15)" stroke-width="1" fill="none" stroke-dasharray="4 4" />

                <!-- 1. Geometric Shapes (Connected Flow) -->
                <!-- Diamond 01 (Assess) -->
                <polygon points="50,190 130,130 210,190 130,250" fill="url(#diamondGrad1)" stroke="rgba(255,255,255,0.2)" stroke-width="1" />
                
                <!-- Diamond 02 (Develop) -->
                <polygon points="210,190 300,130 390,190 300,250" fill="url(#diamondGrad2)" stroke="rgba(255,255,255,0.15)" stroke-width="1" />
                
                <!-- Diamond 03 (Align) -->
                <polygon points="390,190 480,130 570,190 480,250" fill="url(#diamondGrad3)" stroke="rgba(255,255,255,0.15)" stroke-width="1" />
                
                <!-- Polygon 04 (Pivot - Widening Funnel) -->
                <polygon points="570,190 690,110 810,135 810,245 690,270" fill="url(#diamondGrad4)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                
                <!-- Funnel Tail 05 (Transform - Tapering Tail) -->
                <polygon points="810,135 1080,186 1080,194 810,245" fill="url(#funnelTailGrad)" stroke="rgba(45, 212, 191, 0.2)" stroke-width="0.75" />

                <!-- Connecting Node Rings -->
                <circle cx="210" cy="190" r="5" fill="#080d0d" stroke="#5eead4" stroke-width="2" />
                <circle cx="390" cy="190" r="5" fill="#080d0d" stroke="#2dd4bf" stroke-width="2" />
                <circle cx="570" cy="190" r="6" fill="#080d0d" stroke="#22d3ee" stroke-width="2.5" filter="url(#cyanGlow)" />
                <circle cx="810" cy="190" r="4" fill="#080d0d" stroke="#14b8a6" stroke-width="1.5" />

                <!-- ========================================================
                     STEP 01: ASSESS
                     ======================================================== -->
                <!-- Top Badge -->
                <g transform="translate(130, 45)">
                    <!-- White circle with icon -->
                    <circle cx="0" cy="0" r="22" fill="#ffffff" filter="url(#badgeShadow)" />
                    <!-- Icon: Magnifying glass / search chart -->
                    <path d="M-5 -5 A6 6 0 1 1 5 3 L10 8 M1 0 L4 0 M-2 -2 L-2 1 M1 -3 L1 1" stroke="#0d9488" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    <!-- Number -->
                    <text x="0" y="38" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="800" font-size="16" fill="#22d3ee">01</text>
                    <!-- Step Name -->
                    <text x="0" y="58" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="700" font-size="15" fill="#ffffff">Assess</text>
                </g>
                <!-- Bottom Drop Line & Description -->
                <line x1="130" y1="250" x2="130" y2="280" stroke="#2dd4bf" stroke-width="1.5" stroke-dasharray="3 3" opacity="0.7" />
                <circle cx="130" cy="280" r="3.5" fill="#2dd4bf" />
                <text x="130" y="305" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">Shaping the problems</text>
                <text x="130" y="323" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">and defining markets</text>
                <text x="130" y="341" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">with precision</text>

                <!-- ========================================================
                     STEP 02: DEVELOP
                     ======================================================== -->
                <!-- Top Badge -->
                <g transform="translate(300, 45)">
                    <circle cx="0" cy="0" r="22" fill="#ffffff" filter="url(#badgeShadow)" />
                    <!-- Icon: Lightbulb -->
                    <path d="M-4 -3 C-7 -7 7 -7 4 -3 C3 0 2 2 2 4 L-2 4 C-2 2 -3 0 -4 -3 Z M-2 6 L2 6 M-1 8 L1 8" stroke="#0d9488" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    <text x="0" y="38" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="800" font-size="16" fill="#22d3ee">02</text>
                    <text x="0" y="58" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="700" font-size="15" fill="#ffffff">Develop</text>
                </g>
                <!-- Bottom Drop Line & Description -->
                <line x1="300" y1="250" x2="300" y2="280" stroke="#2dd4bf" stroke-width="1.5" stroke-dasharray="3 3" opacity="0.7" />
                <circle cx="300" cy="280" r="3.5" fill="#2dd4bf" />
                <text x="300" y="305" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">Develop a solution</text>
                <text x="300" y="323" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">for the known</text>
                <text x="300" y="341" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">and unknown needs</text>

                <!-- ========================================================
                     STEP 03: ALIGN
                     ======================================================== -->
                <!-- Top Badge -->
                <g transform="translate(480, 45)">
                    <circle cx="0" cy="0" r="22" fill="#ffffff" filter="url(#badgeShadow)" />
                    <!-- Icon: Crosshairs / Target -->
                    <circle cx="0" cy="0" r="6" stroke="#0d9488" stroke-width="1.8" fill="none" />
                    <circle cx="0" cy="0" r="2" fill="#0d9488" />
                    <path d="M0 -9 L0 -6 M0 6 L0 9 M-9 0 L-6 0 M6 0 L9 0" stroke="#0d9488" stroke-width="1.8" stroke-linecap="round" />
                    <text x="0" y="38" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="800" font-size="16" fill="#22d3ee">03</text>
                    <text x="0" y="58" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="700" font-size="15" fill="#ffffff">Align</text>
                </g>
                <!-- Bottom Drop Line & Description -->
                <line x1="480" y1="250" x2="480" y2="280" stroke="#2dd4bf" stroke-width="1.5" stroke-dasharray="3 3" opacity="0.7" />
                <circle cx="480" cy="280" r="3.5" fill="#2dd4bf" />
                <text x="480" y="305" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">Discover futuristic</text>
                <text x="480" y="323" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">opportunities and</text>
                <text x="480" y="341" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">strategic alignment</text>

                <!-- ========================================================
                     STEP 04: PIVOT
                     ======================================================== -->
                <!-- Top Badge -->
                <g transform="translate(690, 45)">
                    <circle cx="0" cy="0" r="22" fill="#ffffff" filter="url(#badgeShadow)" />
                    <!-- Icon: Strategy / Chess pieces -->
                    <path d="M-6 8 L6 8 M-4 8 L-4 5 C-4 2 -6 0 -3 -4 C-1 -4 0 -5 1 -4 C4 0 2 2 2 5 L2 8 M-1 -7 L1 -7 M0 -8 L0 -6" stroke="#0d9488" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    <text x="0" y="38" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="800" font-size="16" fill="#22d3ee">04</text>
                    <text x="0" y="58" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="700" font-size="15" fill="#ffffff">Pivot</text>
                </g>
                <!-- Bottom Drop Line & Description -->
                <line x1="690" y1="270" x2="690" y2="295" stroke="#2dd4bf" stroke-width="1.5" stroke-dasharray="3 3" opacity="0.7" />
                <circle cx="690" cy="295" r="3.5" fill="#2dd4bf" />
                <text x="690" y="318" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">Evaluate and</text>
                <text x="690" y="336" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">optimise chosen</text>
                <text x="690" y="354" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">strategies</text>

                <!-- ========================================================
                     STEP 05: TRANSFORM
                     ======================================================== -->
                <!-- Top Badge -->
                <g transform="translate(920, 45)">
                    <circle cx="0" cy="0" r="22" fill="#ffffff" filter="url(#badgeShadow)" />
                    <!-- Icon: Growth Chart with trend line -->
                    <path d="M-6 6 L-6 3 M-2 6 L-2 -1 M2 6 L2 -3 M6 6 L6 -5 M-7 0 L-2 -5 L3 -2 L8 -8" stroke="#0d9488" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    <text x="0" y="38" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="800" font-size="16" fill="#22d3ee">05</text>
                    <text x="0" y="58" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="700" font-size="15" fill="#ffffff">Transform</text>
                </g>
                <!-- Bottom Drop Line & Description -->
                <line x1="920" y1="220" x2="920" y2="295" stroke="#2dd4bf" stroke-width="1.5" stroke-dasharray="3 3" opacity="0.7" />
                <circle cx="920" cy="295" r="3.5" fill="#2dd4bf" />
                <text x="920" y="318" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">Implement the chosen</text>
                <text x="920" y="336" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">solution and drive</text>
                <text x="920" y="354" text-anchor="middle" font-family="'Inter', sans-serif" font-weight="500" font-size="12" fill="#999999">sustainable impact</text>
            </svg>
        </div>
    </div>

    <!-- Bottom Feature Highlights Bar -->
    <div class="approach-highlights-bar">
        <!-- 1. Structured Approach -->
        <div class="highlight-item">
            <div class="highlight-icon-wrap">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <div class="highlight-content">
                <h4>Structured Approach</h4>
                <p>A proven 5-phase framework</p>
            </div>
        </div>

        <!-- 2. Actionable Insights -->
        <div class="highlight-item">
            <div class="highlight-icon-wrap">
                <i class="fa-solid fa-chart-simple"></i>
            </div>
            <div class="highlight-content">
                <h4>Actionable Insights</h4>
                <p>Data-backed insights that drive results</p>
            </div>
        </div>

        <!-- 3. Strategic Alignment -->
        <div class="highlight-item">
            <div class="highlight-icon-wrap">
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="highlight-content">
                <h4>Strategic Alignment</h4>
                <p>Aligning business goals with customer needs</p>
            </div>
        </div>

        <!-- 4. Measurable Impact -->
        <div class="highlight-item">
            <div class="highlight-icon-wrap">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="highlight-content">
                <h4>Measurable Impact</h4>
                <p>Solutions that deliver tangible outcomes</p>
            </div>
        </div>

        <!-- 5. Continuous Transformation -->
        <div class="highlight-item">
            <div class="highlight-icon-wrap">
                <i class="fa-solid fa-arrows-rotate"></i>
            </div>
            <div class="highlight-content">
                <h4>Continuous Transformation</h4>
                <p>Evolving strategies for sustainable growth</p>
            </div>
        </div>
    </div>

    <!-- Analytical Capabilities & Research Solutions -->
    <div class="modules-section-wrapper">
        <h3 class="modules-section-title">Market Research Solutions &amp; Analytical Frameworks</h3>
        <div class="modules-grid">
            <a href="<?= base_url() ?>slide?page=1&slide=1" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (1).png" alt="Sentiment">
                </div>
                <div class="module-card-text">Sentiment &amp; Voice of Customer</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=2" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (4).png" alt="Brand Positioning">
                </div>
                <div class="module-card-text">Brand Positioning</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=3" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (2).png" alt="Brand Equity">
                </div>
                <div class="module-card-text">Brand Equity</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=4" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (5).png" alt="Cluster Analysis">
                </div>
                <div class="module-card-text">Cluster Analysis</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=5" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (7).png" alt="Quadrant Analysis">
                </div>
                <div class="module-card-text">Quadrant Analysis</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=6" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (3).png" alt="Driver Analysis">
                </div>
                <div class="module-card-text">Driver Analysis</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=7" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (6).png" alt="Kano Model">
                </div>
                <div class="module-card-text">Kano Model</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=8" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (8).png" alt="Pricing Analysis">
                </div>
                <div class="module-card-text">Pricing Analysis</div>
            </a>

            <a href="<?= base_url() ?>slide?page=1&slide=9" class="module-card">
                <div class="module-card-icon">
                    <img src="<?= base_url() ?>assets/aa/page1/AA (9).png" alt="TURF Analysis">
                </div>
                <div class="module-card-text">TURF Analysis</div>
            </a>
        </div>
    </div>

</div>