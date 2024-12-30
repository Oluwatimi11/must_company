document.addEventListener('DOMContentLoaded', function() {
    // Menu Elements
    const topHamburger = document.querySelector('.top-hamburger-menu');
    const btmHamburger = document.querySelector('.btm-hamburger-menu');
    const topNav = document.querySelector('.top-nav-right');
    const bottomNav = document.querySelector('.bottom-nav');

    // Toggle function for menus
    function toggleMenu(hamburger, nav) {
        hamburger.classList.toggle('active');
        nav.classList.toggle('active');
    }

    // Click handlers for hamburger menus
    topHamburger.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu(topHamburger, topNav);
        // Close bottom menu if open
        if (btmHamburger.classList.contains('active')) {
            toggleMenu(btmHamburger, bottomNav);
        }
    });

    btmHamburger.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu(btmHamburger, bottomNav);
        // Close top menu if open
        if (topHamburger.classList.contains('active')) {
            toggleMenu(topHamburger, topNav);
        }
    });

    // Close menus when clicking outside
    document.addEventListener('click', function(event) {
        const isTopMenuClick = event.target.closest('.top-nav-right');
        const isBtmMenuClick = event.target.closest('.bottom-nav');

        if (!isTopMenuClick && topNav.classList.contains('active')) {
            toggleMenu(topHamburger, topNav);
        }

        if (!isBtmMenuClick && bottomNav.classList.contains('active')) {
            toggleMenu(btmHamburger, bottomNav);
        }
    });

    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            if (window.innerWidth > 620) {
                // Reset all menus
                topHamburger.classList.remove('active');
                btmHamburger.classList.remove('active');
                topNav.classList.remove('active');
                bottomNav.classList.remove('active');
            }
        }, 250);
    });
});