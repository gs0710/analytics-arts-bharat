<?php
/**
 * DAMA Digital Analytics — Global Footer
 * Phase 6: Completely New Footer based on Reference Design
 */
?>
<footer class="dama-footer">
    <div class="footer-container">
        <!-- TOP SECTION: Navigation & Newsletter -->
        <div class="footer-top">
            
            <!-- COLUMN 1: PRODUCTS -->
            <div class="footer-col">
                <div class="fc-accent"></div>
                <h4 class="fc-title">PRODUCTS</h4>
                <ul class="fc-links">
                    <li><a href="<?= base_url() ?>bharat_bussiness_section#market_research">Market Research</a></li>
                    <li><a href="<?= base_url() ?>bharat_bussiness_section#customer_insight">Customer Insights</a></li>
                    <li><a href="<?= base_url() ?>bharat_bussiness_section#data_science">Data Science</a></li>
                    <li><a href="<?= base_url() ?>aa_bharat_business">Digital Marketing</a></li>
                    <li><a href="<?= base_url() ?>bharat_bussiness_section#kyc">KYC Solutions</a></li>
                </ul>
            </div>

            <!-- COLUMN 2: RESOURCES -->
            <div class="footer-col">
                <div class="fc-accent"></div>
                <h4 class="fc-title">RESOURCES</h4>
                <ul class="fc-links">
                    <li><a href="<?= base_url() ?>our_story">Our Story</a></li>
                    <li><a href="<?= base_url() ?>our_teams">Our Team</a></li>
                    <li><a href="<?= base_url() ?>blogs">Insights & Blogs</a></li>
                    <li><a href="<?= base_url() ?>aa_research">Join Community</a></li>
                </ul>
            </div>

            <!-- COLUMN 3: COMPANY -->
            <div class="footer-col">
                <div class="fc-accent"></div>
                <h4 class="fc-title">COMPANY</h4>
                <ul class="fc-links">
                    <li><a href="<?= base_url() ?>#AABharat_for_bussiness">About Us</a></li>
                    <li><a href="<?= base_url() ?>#Contact_Us">Contact</a></li>
                    <li><a href="<?= base_url() ?>#">Partners</a></li>
                    <li><a href="<?= base_url() ?>terms_and_condition">Terms of Condition</a></li>
                </ul>
            </div>

            <!-- COLUMN 4: NEWSLETTER -->
            <div class="footer-col footer-newsletter">
                <div class="fc-accent"></div>
                <h4 class="fc-title">NEWSLETTER</h4>
                
                <form class="fn-form" onsubmit="event.preventDefault();">
                    <div class="fn-input-wrapper">
                        <input type="email" class="fn-input" placeholder="Your email" required aria-label="Email address for newsletter">
                    </div>
                    <button type="submit" class="fn-btn">Subscribe</button>
                </form>

                <div class="footer-socials">
                    <a href="#" class="fs-link" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="fs-link" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="fs-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </div>


        <!-- BOTTOM SECTION: Status & Legal -->
        <div class="footer-bottom">
            <div class="fb-status">
                <span class="fb-pulse"></span>
                <span>All systems operational</span>
            </div>
            <div class="fb-legal">
                <a href="<?= base_url() ?>terms_and_condition">Privacy Policy</a>
                <span class="legal-sep">|</span>
                <a href="<?= base_url() ?>terms_and_condition">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
