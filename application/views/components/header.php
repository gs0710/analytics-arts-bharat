<?php
/**
 * DAMA Digital Analytics — Global Header / Navbar
 * Phase 1 Redesign: Floating pill navbar (dark shell → light inner panel)
 * Preserves: data-id anchor nav, scroll active state, mobile menu
 */
?>
<!-- Mobile nav drawer (outside nav-shell so it can overlay everything) -->
<div class="nav-drawer" id="nav-drawer" aria-hidden="true">
    <div class="nav-drawer-overlay" id="nav-drawer-overlay"></div>
    <div class="nav-drawer-panel" role="menu">
        <span class="drawer-item" data-id="AABharat_for_bussiness" role="menuitem">AABharat for Business</span>
        <span class="drawer-item" data-id="Our_Story" role="menuitem">Our Story</span>
        <span class="drawer-item" data-id="Our_Team" role="menuitem">Our Team</span>
        <span class="drawer-item" data-id="Contact_Us" role="menuitem">Connect with us</span>
        <div class="nav-drawer-divider"></div>
        <a href="<?= base_url() ?>aa_research" class="drawer-cta" role="menuitem">Join Community</a>
    </div>
</div>

<!-- Floating navbar -->
<div class="nav-shell" id="nav-shell">
    <nav class="nav-inner" aria-label="Main navigation">

        <!-- Logo -->
        <a href="<?= base_url() ?>" class="nav-logo" aria-label="DAMA Digital Analytics — Home">
            <img src="<?= base_url() ?>assets/images/research/AA_Mumbai_.png"
                 alt="Analytics Arts Logo"
                 width="120" height="42">
        </a>

        <!-- Desktop nav links -->
        <ul class="nav-links" role="list">
            <li class="nav-item" data-id="AABharat_for_bussiness" role="listitem">AABharat for Business</li>
            <li class="nav-item" data-id="Our_Story" role="listitem">Our Story</li>
            <li class="nav-item" data-id="Our_Team" role="listitem">Our Team</li>
            <li class="nav-item" data-id="Contact_Us" role="listitem">Connect with us</li>
            <li role="listitem">
                <a href="<?= base_url() ?>aa_research" class="nav-cta">Join Community</a>
            </li>
        </ul>

        <!-- Mobile hamburger -->
        <button class="nav-hamburger" id="nav-hamburger"
                aria-label="Open menu" aria-expanded="false" aria-controls="nav-drawer">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </nav>
</div>

<script>
(function() {
    'use strict';

    /* -----------------------------------------------------------------------
       Helpers
    ----------------------------------------------------------------------- */
    function getSectionId() {
        var hash = window.location.hash;
        return hash ? hash.slice(1) : '';
    }

    function setNavActive() {
        var pageId = getSectionId();
        // Desktop
        document.querySelectorAll('.nav-links .nav-item').forEach(function(item) {
            item.classList.toggle('active', item.getAttribute('data-id') === pageId);
        });
        // Drawer
        document.querySelectorAll('.nav-drawer-panel .drawer-item').forEach(function(item) {
            item.classList.toggle('active', item.getAttribute('data-id') === pageId);
        });
    }

    /* -----------------------------------------------------------------------
       Anchor navigation (preserves existing data-id behaviour)
    ----------------------------------------------------------------------- */
    function bindNavItems(selector) {
        document.querySelectorAll(selector).forEach(function(item) {
            item.addEventListener('click', function() {
                var id = item.getAttribute('data-id');
                if (id) {
                    window.location.replace('<?= base_url() ?>#' + id);
                    setNavActive();
                    closeDrawer(); // close mobile drawer on selection
                }
            });
        });
    }

    bindNavItems('.nav-links .nav-item[data-id]');
    bindNavItems('.nav-drawer-panel .drawer-item[data-id]');
    setNavActive();

    /* -----------------------------------------------------------------------
       Mobile drawer
    ----------------------------------------------------------------------- */
    var hamburger = document.getElementById('nav-hamburger');
    var drawer    = document.getElementById('nav-drawer');
    var overlay   = document.getElementById('nav-drawer-overlay');
    var isOpen    = false;

    function openDrawer() {
        isOpen = true;
        hamburger.classList.add('is-open');
        hamburger.setAttribute('aria-expanded', 'true');
        hamburger.setAttribute('aria-label', 'Close menu');
        drawer.classList.add('is-open');
        drawer.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        isOpen = false;
        hamburger.classList.remove('is-open');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.setAttribute('aria-label', 'Open menu');
        drawer.classList.remove('is-open');
        drawer.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    hamburger.addEventListener('click', function() {
        isOpen ? closeDrawer() : openDrawer();
    });

    overlay.addEventListener('click', closeDrawer);

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && isOpen) closeDrawer();
    });

    /* -----------------------------------------------------------------------
       Resize — restore body scroll & drawer state on resize to desktop
    ----------------------------------------------------------------------- */
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && isOpen) {
            closeDrawer();
        }
    });

})();
</script>