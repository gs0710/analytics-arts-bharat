<section class="contact-section">
    <!-- Map Texture Background -->
    <div class="contact-map-texture"></div>

    <div class="contact-container">
        
        <div class="contact-header">
            <div class="ch-label">
                <span class="ch-line"></span>
                GET IN TOUCH
                <span class="ch-line"></span>
            </div>
            <h2 class="ch-title">Connect With Us<span class="ch-dot"></span></h2>
        </div>

        <div class="contact-grid">
            
            <!-- LEFT COLUMN: Contact Info -->
            <div class="contact-left">
                <div class="contact-accent-line"></div>
                
                <div class="contact-info-list">
                    
                    <div class="contact-info-block">
                        <div class="ci-label">Global HQ</div>
                        <div class="ci-content">
                            <strong>Analytics Arts</strong><br>
                            Kailash Business Park, Vikhroli<br>
                            Mumbai, India
                        </div>
                    </div>

                    <div class="contact-info-block">
                        <div class="ci-label">Reach Out</div>
                        <div class="ci-content">
                            <a href="mailto:support@analyticsarts.in" class="ci-link">
                                <i class="fa-solid fa-envelope"></i> support@analyticsarts.in
                            </a>
                        </div>
                    </div>

                    <div class="contact-info-block">
                        <div class="ci-label">Follow Us</div>
                        <div class="ci-socials">
                            <a href="#" class="ci-social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="ci-social-link"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: Form -->
            <div class="contact-right">
                
                <!-- Corner brackets (created via CSS pseudo-elements on the wrapper) -->
                <div class="contact-form-wrapper">
                    
                    <h3 class="cf-title">Send an Enquiry</h3>

                    <form action="" id="contact-form">
                        
                        <div class="cf-field">
                            <input type="text" name="name" id="name" class="cf-input" placeholder="Name" required>
                            <!-- Label visually hidden but kept for structure, placeholders act as labels in modern aesthetic -->
                        </div>

                        <!-- Dropdown (Preserved perfectly for backend) -->
                        <div class="dropdown-container cf-field">
                            <div class="top cf-dropdown-toggle">
                                <div class="selected"></div>
                                <label>Enquiry for</label>
                                <img height="14" width="14" src="<?= base_url() ?>assets/aa/t.webp" alt="Toggle" style="filter: invert(1);">
                            </div>

                            <div class="dropdown cf-dropdown-menu">
                                <li class="list">
                                    <span>1. Market Research and Analytics</span>
                                    <ul>
                                        <li>Sentiment & Voice of Customer</li>
                                        <li>Brand Positioning</li>
                                        <li>Brand Equity</li>
                                        <li>Cluster Analysis</li>
                                        <li>Quadrant Analysis</li>
                                        <li>Driver Analysis</li>
                                        <li>KANO Model</li>
                                        <li>Pricing Analysis</li>
                                        <li>TURF Analysis</li>
                                    </ul>
                                </li>
                                <li class="list">
                                    <span>2. Customer Insights and Engagements</span>
                                    <ul>
                                        <li>Awareness & Familiarity</li>
                                        <li>Loyalty</li>
                                        <li>NPS and NRI for Product and Brand</li>
                                    </ul>
                                </li>
                                <li class="list">
                                    <span>3. Data Science and Business Intelligence</span>
                                    <ul>
                                        <li>Market Basket Analysis</li>
                                        <li>Churn Rate Analysis</li>
                                        <li>Forecasting</li>
                                        <li>Market-Mix Modelling</li>
                                        <li>Propensity Analysis</li>
                                        <li>Text Analysis</li>
                                        <li>Geo-Marketing</li>
                                        <li>Dashboarding and Data Modelling</li>
                                    </ul>
                                </li>
                                <li class="list">
                                    <span>4. KYC and On-ground Investigations</span>
                                    <ul>
                                        <li>Mystery Shopping</li>
                                        <li>Asset Tracking</li>
                                        <li>On-Ground Verifications</li>
                                        <li>Information Security</li>
                                    </ul>
                                </li>
                            </div>
                        </div>

                        <div class="cf-field">
                            <input type="email" name="email/phone" id="email" class="cf-input" placeholder="E-Mail/Phone" required>
                        </div>

                        <div class="cf-field">
                            <!-- Converted to textarea for better UX, but kept original ID/name -->
                            <textarea name="message" id="message" class="cf-input cf-textarea" placeholder="Message" rows="4" required></textarea>
                        </div>

                        <button id="contact-submit" type="button" class="btn-primary cf-submit">
                            SEND MESSAGE <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Include required Toast CSS/JS if not globally loaded -->
<link rel="stylesheet" href="<?= base_url() ?>assets/js/toast.css">
<script src="<?= base_url() ?>assets/js/toast.js"></script>

<script>
    (function() {
        // --- ANIMATIONS ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                } else {
                    entry.target.classList.remove('in-view');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.ch-label, .ch-title, .contact-left, .contact-form-wrapper').forEach((el, index) => {
            el.style.transitionDelay = `${index * 0.15}s`;
            observer.observe(el);
        });

        // --- PRESERVED BACKEND FORM LOGIC ---
        let dropdownLis = document.querySelectorAll('.dropdown-container .dropdown .list ul li');
        let selectedOptionContainer = document.querySelector('.dropdown-container .selected');

        selectedOptionContainer.value = () => {
            let allLis = selectedOptionContainer.querySelectorAll('li');
            let result = [];
            allLis.forEach(li => {
                result.push(li.innerText);
            });
            return result;
        }

        selectedOptionContainer.clear = () => {
            let allBtns = selectedOptionContainer.querySelectorAll('li button');
            allBtns.forEach(btn => btn.click());
        }

        function toggleLabel() {
            let container = document.querySelector('.dropdown-container');
            if (selectedOptionContainer.children.length > 0) {
                container.classList.add('has-selections');
            } else {
                container.classList.remove('has-selections');
            }
        }

        dropdownLis.forEach(li => {
            li.onclick = () => {
                if (li.classList.contains('selected')) return;

                let newOpt = document.createElement('li');
                let text = document.createElement('span');
                let btn = document.createElement('button');

                newOpt.setAttribute('title', li.innerText);
                text.innerText = li.innerText;
                btn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
                btn.onclick = (e) => {
                    e.stopPropagation();
                    newOpt.remove();
                    li.classList.remove('selected');
                    toggleLabel();
                }

                li.classList.add('selected');

                newOpt.appendChild(text);
                newOpt.appendChild(btn);
                selectedOptionContainer.appendChild(newOpt);
                toggleLabel();
            }
        });

        document.querySelector('#contact-submit').onclick = (e) => {
            let form = document.querySelector('#contact-form');
            let equiryFor = selectedOptionContainer.value();

            let validate = validateForm(form);
            if (!validate.success) return showToast('error', validate.message || "Something went wrong!");
            if (equiryFor.length == 0) return showToast('error', "Please Select options from Enquiry!");

            // Visual Loading State
            const btn = document.querySelector('#contact-submit');
            const originalText = btn.innerHTML;
            btn.innerHTML = 'SENDING... <i class="fa-solid fa-circle-notch fa-spin"></i>';
            btn.style.pointerEvents = 'none';

            let formData = new FormData(form);
            formData.set('enquiry', equiryFor);

            $.ajax({
                url: '<?php echo base_url('contact_us'); ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(res) {
                    if(res.status == 200){
                        customPopup('Thanks for Contacting us! we will get back to you soon.');
                    } else {
                        showToast('error', res.message);
                    }
                    clearForm(form);
                    selectedOptionContainer.clear();
                    toggleLabel();
                    
                    // Reset Button
                    btn.innerHTML = originalText;
                    btn.style.pointerEvents = 'all';
                },
                error: (e) => {
                    showToast('error', "Failed to send request");
                    btn.innerHTML = originalText;
                    btn.style.pointerEvents = 'all';
                }
            });
        };

        function validateForm(form) {
            let allInps = form.querySelectorAll('input, textarea');
            for (let i = 0; i < allInps.length; i++) {
                let inp = allInps[i];
                if (inp.value.trim() == '') return {success: false, message: `${inp.placeholder || inp.name} cannot be empty`};
            }
            return {success: true};
        }

        function clearForm(form) {
            form.querySelectorAll('input, textarea').forEach(inp => inp.value = '');
        }

        function customPopup(text) {
            let popupContainer = document.createElement('div');
            popupContainer.classList.add('popup-container');
            popupContainer.onclick = () => removePopup();

            let popup = document.createElement('div');
            popup.classList.add('custom-popup');
            popup.onclick = (e) => e.stopPropagation();

            let top = document.createElement('div');
            top.classList.add('top');

            let span = document.createElement('span');
            span.innerText = 'Notice';
            let closeBtn = document.createElement('button');
            closeBtn.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
            closeBtn.onclick = () => removePopup();
            
            let bottom = document.createElement('div');
            bottom.classList.add('popup-bottom');
            bottom.innerHTML = `
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="message">${text}</div>
            `;
            
            top.appendChild(span);
            top.appendChild(closeBtn);
            popup.appendChild(top);
            popup.appendChild(bottom);
            popupContainer.appendChild(popup);
            document.body.appendChild(popupContainer);

            function removePopup() {
                // Ensure setNavActive exists in scope if it was dependent on it
                if (typeof setNavActive === 'function') {
                    setNavActive();
                }

                popupContainer.style.animation = `fade-out .1s linear forwards`;
                setTimeout(() => {
                    popupContainer.remove();
                }, 100);
            }
        }
    })();
</script>