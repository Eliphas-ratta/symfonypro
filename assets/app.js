import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

import 'bootstrap';

import './styles/app.scss';


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


document.addEventListener('DOMContentLoaded', () => {
    console.log('[App.js] DOM loaded ✅');

    // on attache à tous les boutons toggle
    document.querySelectorAll('.toggle-btn').forEach(button => {
        button.addEventListener('click', event => {
            event.stopPropagation();
            event.preventDefault();

            const card = button.closest('.continent-card');
            if (!card) return;

            const id = card.id.split('-')[1];
            const icon = document.getElementById(`toggle-icon-${id}`);

            card.classList.toggle('show-actions');
            if (icon) {
                icon.textContent = card.classList.contains('show-actions') ? '×' : '+';
            }
        });
    });
});




