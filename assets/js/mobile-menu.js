// Mobile Menu Script - Premium Version
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const body = document.body;

    // Mobile dropdown toggle
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');

    // Toggle mobile menu
    if (mobileMenuBtn && mobileMenuOverlay) {
        mobileMenuBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleMobileMenu();
        });

        // Close button
        const mobileMenuCloseBtn = document.getElementById('mobile-menu-close');
        if (mobileMenuCloseBtn) {
            mobileMenuCloseBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                closeMobileMenu();
            });
        }

        // Close menu when clicking outside content
        mobileMenuOverlay.addEventListener('click', function (e) {
            if (e.target === mobileMenuOverlay) {
                closeMobileMenu();
            }
        });

        // Close menu when clicking on a link (except dropdown toggle)
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link:not(.mobile-dropdown-toggle), .mobile-submenu-link');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function () {
                closeMobileMenu();
            });
        });

        // Close menu on ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileMenuOverlay.classList.contains('active')) {
                closeMobileMenu();
            }
        });
    }

    // Handle dropdown toggles
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const dropdown = this.closest('.mobile-menu-dropdown');
            const isActive = dropdown.classList.contains('active');

            // Close all other dropdowns
            document.querySelectorAll('.mobile-menu-dropdown').forEach(d => {
                if (d !== dropdown) {
                    d.classList.remove('active');
                }
            });

            // Toggle current dropdown
            dropdown.classList.toggle('active', !isActive);
        });
    });

    function toggleMobileMenu() {
        const isActive = mobileMenuOverlay.classList.contains('active');

        if (isActive) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }

    function openMobileMenu() {
        mobileMenuOverlay.classList.add('active');
        mobileMenuBtn.classList.add('active');
        body.classList.add('mobile-menu-open');
    }

    function closeMobileMenu() {
        mobileMenuOverlay.classList.remove('active');
        mobileMenuBtn.classList.remove('active');
        body.classList.remove('mobile-menu-open');

        // Close all dropdowns
        setTimeout(() => {
            document.querySelectorAll('.mobile-menu-dropdown').forEach(d => {
                d.classList.remove('active');
            });
        }, 300);
    }
});
