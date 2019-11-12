const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'alternative');
        localStorage.setItem('theme', 'alternative');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    };  
    
    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

    if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

        if (currentTheme === 'alternative') {
            toggleSwitch.checked = true;
        }
    }

}

toggleSwitch.addEventListener('change', switchTheme, false);

