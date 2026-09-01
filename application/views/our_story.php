<section id="Our_Story" class="story-section">
    <div class="story-header">
        <div class="sh-label">
            <span class="sh-line"></span>
            OUR STORY
            <span class="sh-line"></span>
        </div>
        <h2 class="sh-title">A Journey of Data & Innovation</h2>
        <p class="sh-desc">From our founding to our global expansion, discover how we've grown to become a leader in data analytics and consulting.</p>
    </div>

    <div class="timeline-container" id="timelineContainer">
        <!-- Background Maps -->
        <img class="map-bg map-italy" src="<?= base_url() ?>assets/aa/ItalyMap.png" alt="" loading="lazy">
        <img class="map-bg map-india" src="<?= base_url() ?>assets/aa/India.png" alt="" loading="lazy">

        <!-- Central Track -->
        <div class="timeline-track">
            <!-- Scroll Progress Line -->
            <div class="timeline-progress" id="timelineProgress"></div>
        </div>

        <!-- Node 2020 -->
        <div class="timeline-node">
            <div class="node-dot"></div>
            <div class="node-content left-align">
                <div class="node-year">2020</div>
                <div class="node-media">
                    <img src="<?= base_url() ?>assets/aa/AA_logo.png" alt="Analytics Arts" class="logo-media">
                </div>
                <p class="node-text">Analytics Arts was founded by a team boasting over 15 years of expertise in data analysis, consulting, and academic instruction.</p>
            </div>
        </div>

        <!-- Node 2021 -->
        <div class="timeline-node">
            <div class="node-dot"></div>
            <div class="node-content right-align">
                <div class="node-year">2021</div>
                <div class="node-media">
                    <video autoplay muted loop playsinline class="video-media">
                        <source src="<?= base_url() ?>assets/aa/2021.mp4" type="video/mp4">
                    </video>
                </div>
                <p class="node-text">Initiated our first projects in collaboration with international brands.</p>
            </div>
        </div>

        <!-- Node 2022 -->
        <div class="timeline-node">
            <div class="node-dot"></div>
            <div class="node-content left-align">
                <div class="node-year">2022</div>
                <div class="node-media">
                    <video autoplay muted loop playsinline class="video-media">
                        <source src="<?= base_url() ?>assets/aa/2022.mp4" type="video/mp4">
                    </video>
                </div>
                <p class="node-text">Introduced innovative dashboarding solutions and AI-driven market research methodologies.</p>
            </div>
        </div>

        <!-- Node 2023 -->
        <div class="timeline-node">
            <div class="node-dot"></div>
            <div class="node-content right-align">
                <div class="node-year">2023</div>
                <div class="node-media colab-media">
                    <img src="<?= base_url() ?>assets/aa/AA_logo.png" alt="AA Logo" class="logo-media colab-logo">
                    <span class="colab-x">X</span>
                    <img src="<?= base_url() ?>assets/aa/clients/download.png" alt="Partner Logo" class="logo-media colab-logo">
                </div>
                <p class="node-text">Formed a partnership with TEST IT, launching the first phygital market platform designed to deliver reliable and precise feedback on both new and existing products.</p>
            </div>
        </div>

        <!-- Node 2024 -->
        <div class="timeline-node">
            <div class="node-dot"></div>
            <div class="node-content left-align">
                <div class="node-year">2024</div>
                <div class="node-media">
                    <img src="<?= base_url() ?>assets/images/research/AA_Mumbai_.png" alt="AA Mumbai" class="logo-media wide-logo">
                </div>
                <p class="node-text">Partnered with Ecovis RKCA to launch Analytics Arts Bharat and enter the Indian market.</p>
            </div>
        </div>

    </div>
</section>

<style>
/* ==========================================================================
   OUR STORY SECTION (KLARHEIT TIMELINE)
   ========================================================================== */

.story-section {
    background: #050505; /* Black theme */
    padding: var(--section-py, 8rem) 1.5rem;
    position: relative;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
}

/* Header */
.story-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 3rem auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 5;
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 1s cubic-bezier(0.25, 1, 0.5, 1), transform 1s cubic-bezier(0.25, 1, 0.5, 1);
}
.story-header.in-view {
    opacity: 1;
    transform: translateY(0);
}

.sh-label {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #ff7a18; /* Primary Orange */
    margin-bottom: 1.5rem;
}

.sh-line {
    width: 24px;
    height: 1px;
    background: #ff7a18;
    opacity: 0.6;
}

.sh-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    letter-spacing: -0.02em;
    margin: 0 0 1.5rem 0;
}

.sh-desc {
    font-size: 1.1rem;
    color: #a0a0a0;
    line-height: 1.6;
    max-width: 600px;
    margin: 0;
}

/* Timeline Container */
.timeline-container {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem 0;
}

/* Map Backgrounds */
.map-bg {
    position: absolute;
    width: clamp(300px, 40vw, 600px);
    opacity: 0.15;
    pointer-events: none;
    z-index: 0;
    filter: invert(1); /* Invert to make it visible on black */
}
.map-italy {
    top: 5%;
    left: 5%;
}
.map-india {
    bottom: 5%;
    right: 5%;
}

/* Central Track */
.timeline-track {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    z-index: 1;
}

/* Scroll Progress Line */
.timeline-progress {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 0%; /* Will be updated via JS */
    background: linear-gradient(to bottom, #ff7a18, #ff4e00);
    z-index: 2;
    box-shadow: 0 0 15px rgba(255, 122, 24, 0.5);
    transition: height 0.1s ease-out; /* Smooth scrubbing */
}

/* Timeline Node */
.timeline-node {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    min-height: 120px;
    z-index: 3;
}
.timeline-node:last-child {
    margin-bottom: 0;
}

/* Node Dot */
.node-dot {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 16px;
    height: 16px;
    background: #050505;
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    z-index: 4;
    transition: all 0.5s ease;
}

.timeline-node.active .node-dot {
    border-color: #ff7a18;
    background: #ff7a18;
    box-shadow: 0 0 0 6px rgba(255, 122, 24, 0.2);
}

/* Node Content */
.node-content {
    width: calc(50% - 3rem);
    position: relative;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1), transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
}

.timeline-node.active .node-content {
    opacity: 1;
    transform: translateY(0);
}

/* Alternating Alignment */
.left-align {
    text-align: right;
    margin-right: auto;
}
.right-align {
    text-align: left;
    margin-left: auto;
}

/* Year */
.node-year {
    font-size: clamp(3rem, 6vw, 5rem);
    font-weight: 900;
    line-height: 1;
    color: transparent;
    -webkit-text-stroke: 1px rgba(255, 255, 255, 0.15);
    margin-bottom: -1rem;
    position: relative;
    z-index: 0;
    transition: all 0.5s ease;
}

@keyframes blinkOrange {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.timeline-node.active .node-year {
    -webkit-text-stroke: 1px #ff7a18;
    color: #ff7a18; /* Fully flamy orange */
    text-shadow: 0 0 15px rgba(255, 122, 24, 0.8);
    animation: blinkOrange 0.4s ease-in-out 3;
}

/* Media */
.node-media {
    position: relative;
    z-index: 2;
    margin: 1.5rem 0;
}
.left-align .node-media {
    display: flex;
    justify-content: flex-end;
}
.right-align .node-media {
    display: flex;
    justify-content: flex-start;
}

.video-media {
    width: 240px;
    max-width: 100%;
    border-radius: 16px;
    background: transparent;
    mix-blend-mode: screen;
    filter: invert(1) hue-rotate(180deg);
}

.logo-media {
    height: 50px;
    object-fit: contain;
    background: transparent;
    padding: 6px;
    border-radius: 8px;
}
.wide-logo {
    height: 60px;
}

.colab-media {
    display: flex;
    align-items: center;
    gap: 1rem;
}
.colab-x {
    color: #ff7a18;
    font-weight: bold;
    font-size: 1.2rem;
}

/* Text */
.node-text {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #d0d0d0;
    margin: 0;
    position: relative;
    z-index: 2;
}


/* Responsive */
@media (max-width: 768px) {
    .timeline-track {
        left: 20px;
    }
    .node-dot {
        left: 20px;
    }
    .node-content {
        width: calc(100% - 60px);
        margin-left: auto !important;
        text-align: left !important;
    }
    .left-align .node-media {
        justify-content: flex-start;
    }
}
</style>

<script>
    (function() {
        const container = document.getElementById('timelineContainer');
        const progressLine = document.getElementById('timelineProgress');
        const nodes = document.querySelectorAll('.timeline-node');

        // Scroll Progress Logic
        function updateTimelineProgress() {
            // Get bounding rect of the container
            const rect = container.getBoundingClientRect();
            
            // Calculate how far we've scrolled past the top of the container
            // We want the line to start drawing when the top of the container hits the middle of the screen
            const windowCenter = window.innerHeight / 2;
            
            // How much of the container is past the center of the viewport
            let scrolled = windowCenter - rect.top;
            
            // Limit between 0 and total height
            scrolled = Math.max(0, Math.min(scrolled, rect.height));
            
            // Convert to percentage
            const percentage = (scrolled / rect.height) * 100;
            
            progressLine.style.height = `${percentage}%`;
        }

        window.addEventListener('scroll', updateTimelineProgress, { passive: true });
        window.addEventListener('resize', updateTimelineProgress, { passive: true });
        
        // Initial call
        updateTimelineProgress();

        // Intersection Observer for Nodes (Triggers content reveal)
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50% 0px', // Triggers when the node hits the middle of the screen
            threshold: 0
        };

        const nodeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                } else {
                    entry.target.classList.remove('active');
                }
            });
        }, observerOptions);

        nodes.forEach(node => {
            nodeObserver.observe(node);
        });

        // Entrance Animation for Header
        const headerObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                } else {
                    entry.target.classList.remove('in-view');
                }
            });
        }, { threshold: 0.1 });
        
        const header = document.querySelector('.story-header');
        if (header) {
            headerObserver.observe(header);
        }

    })();
</script>