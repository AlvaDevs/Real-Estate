document.addEventListener('DOMContentLoaded', function() {
    eventListener();
    darkMode();
});

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu img');
    const darkModeBtn = document.querySelector('.dark-mode-btn');

    mobileMenu.addEventListener('click', responsiveNav);
    darkModeBtn.addEventListener('click', toggleDarkMode);
}

function responsiveNav() {
    const nav = document.querySelector('.navigation');

    nav.classList.toggle('show');
}

function darkMode() {
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        applyTheme(savedTheme);
    } else {
        applyTheme(prefersDarkScheme.matches ? 'dark' : 'light');
    }

    prefersDarkScheme.addEventListener('change', e => {
        const newColorScheme = e.matches ? 'dark' : 'light';
        applyTheme(newColorScheme);
    });
}

function applyTheme(theme) {
    document.body.classList.toggle('dark-mode', theme === 'dark');
    const darkModeIcon = document.querySelector('.dark-mode-btn');
    darkModeIcon.src = theme === 'dark' ? 'build/img/light-mode.svg' : 'build/img/dark-mode.svg';
    localStorage.setItem('theme', theme);
}

function toggleDarkMode() {
    const currentTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    applyTheme(newTheme);
}