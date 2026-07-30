document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('mainNavbar');
    if (!navbar) return;

    function toggleScrolled() {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    toggleScrolled();
    window.addEventListener('scroll', toggleScrolled);
});