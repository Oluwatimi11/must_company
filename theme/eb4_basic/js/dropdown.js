(function($) {
    'use strict';

    document.querySelectorAll('.bottom-list-item').forEach((item) => {
        item.addEventListener('mouseenter', () => {
            const dropdown = item.querySelector('.dropdown-menu');
            if (dropdown) {
                dropdown.style.display = 'block';
            }
        });

        item.addEventListener('mouseleave', () => {
            const dropdown = item.querySelector('.dropdown-menu');
            if (dropdown) {
                dropdown.style.display = 'none';
            }
        });
    });
})(jQuery);