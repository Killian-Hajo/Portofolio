const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.nav-links-index');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('active');
});

// Fermer le menu si on clique en dehors
document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !menuToggle.contains(e.target)) {
        menu.classList.remove('active');
    }
});
