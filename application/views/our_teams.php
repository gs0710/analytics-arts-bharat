<section id="Our_Team" class="team-section">
    
    <div class="team-header">
        <div class="th-label">
            <span class="th-line"></span>
            OUR TEAM
            <span class="th-line"></span>
        </div>
        <h2 class="th-title">Meet the People Behind Our Success</h2>
        <p class="th-desc">A diverse team of experts committed to delivering innovative solutions and driving impactful results for our clients.</p>
    </div>

    <!-- Expanding Flex Cards Accordion -->
    <div class="team-accordion">
        
        <!-- Member 1 -->
        <div class="acc-card" tabindex="0">
            <img src="<?= base_url() ?>assets/aa/our_team/DR.jpeg" alt="Dheeraj Rathi" class="acc-photo" loading="lazy">
            <div class="acc-overlay">
                <div class="acc-content">
                    <div class="acc-info">
                        <h3 class="acc-name">Dheeraj Rathi</h3>
                        <p class="acc-role">Director</p>
                    </div>
                    <a href="https://www.linkedin.com/in/dheerajrathi/" class="acc-link" aria-label="View Dheeraj Rathi on LinkedIn" target="_blank" rel="noopener">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="acc-card" tabindex="0">
            <img src="<?= base_url() ?>assets/aa/our_team/Maurizio .jpeg" alt="Maurizio Poli" class="acc-photo" loading="lazy">
            <div class="acc-overlay">
                <div class="acc-content">
                    <div class="acc-info">
                        <h3 class="acc-name">Maurizio Poli</h3>
                        <p class="acc-role">Director</p>
                    </div>
                    <a href="https://www.linkedin.com/in/maurizio-poli/" class="acc-link" aria-label="View Maurizio Poli on LinkedIn" target="_blank" rel="noopener">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 3 (CEO - Default Active in Center) -->
        <div class="acc-card active default-active" tabindex="0">
            <img src="<?= base_url() ?>assets/aa/our_team/Alessandro Recla.webp" alt="Alessandro Recla" class="acc-photo" loading="lazy">
            <div class="acc-overlay">
                <div class="acc-content">
                    <div class="acc-info">
                        <h3 class="acc-name">Alessandro Recla</h3>
                        <p class="acc-role">CEO/Founder</p>
                    </div>
                    <a href="https://www.linkedin.com/in/alessandrorecla/" class="acc-link" aria-label="View Alessandro Recla on LinkedIn" target="_blank" rel="noopener">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 4 -->
        <div class="acc-card" tabindex="0">
            <img src="<?= base_url() ?>assets/aa/our_team/Michele Russo.webp" alt="Michele Russo" class="acc-photo" loading="lazy">
            <div class="acc-overlay">
                <div class="acc-content">
                    <div class="acc-info">
                        <h3 class="acc-name">Michele Russo</h3>
                        <p class="acc-role">Associate Data Scientist</p>
                    </div>
                    <a href="https://www.linkedin.com/in/michele-russo-2b4793153/" class="acc-link" aria-label="View Michele Russo on LinkedIn" target="_blank" rel="noopener">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="acc-card" tabindex="0">
            <img src="<?= base_url() ?>assets/aa/our_team/Alessio Rossi.webp" alt="Alessio Rossi" class="acc-photo" loading="lazy">
            <div class="acc-overlay">
                <div class="acc-content">
                    <div class="acc-info">
                        <h3 class="acc-name">Alessio Rossi</h3>
                        <p class="acc-role">Associate Data Scientist</p>
                    </div>
                    <a href="https://www.linkedin.com/in/alessio-rossi-ar/" class="acc-link" aria-label="View Alessio Rossi on LinkedIn" target="_blank" rel="noopener">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 6 -->
        <div class="acc-card" tabindex="0">
            <img src="<?= base_url() ?>assets/aa/our_team/tanmay-nipane.jpeg" alt="Tanmay Nipane" class="acc-photo" loading="lazy">
            <div class="acc-overlay">
                <div class="acc-content">
                    <div class="acc-info">
                        <h3 class="acc-name">Tanmay Nipane</h3>
                        <p class="acc-role">Associate Data Scientist</p>
                    </div>
                    <a href="#" class="acc-link" aria-label="View Tanmay Nipane on LinkedIn" target="_blank" rel="noopener">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>

<script>
    (function() {
        // --- ANIMATIONS FOR HEADER ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                } else {
                    entry.target.classList.remove('in-view'); // Re-trigger on scroll
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.th-label, .th-title, .th-desc, .team-accordion').forEach((el, index) => {
            el.style.transitionDelay = `${index * 0.1}s`;
            observer.observe(el);
        });

        // --- ACCORDION LOGIC ---
        const accordion = document.querySelector('.team-accordion');
        const cards = document.querySelectorAll('.acc-card');
        
        // When hovering a card, make it active and remove active from others
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                cards.forEach(c => c.classList.remove('active'));
                card.classList.add('active');
            });
            
            // For touch devices
            card.addEventListener('click', () => {
                cards.forEach(c => c.classList.remove('active'));
                card.classList.add('active');
            });

            // Accessibility: allow expanding via keyboard
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    cards.forEach(c => c.classList.remove('active'));
                    card.classList.add('active');
                }
            });
        });

        // When mouse leaves the entire accordion, snap back to the default active card
        accordion.addEventListener('mouseleave', () => {
            cards.forEach(c => c.classList.remove('active'));
            const defaultCard = document.querySelector('.acc-card.default-active');
            if(defaultCard) {
                defaultCard.classList.add('active');
            }
        });
    })();
</script>