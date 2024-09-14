document.addEventListener('DOMContentLoaded', function() {
    const themeRadios = document.querySelectorAll('input[name="theme"]');

    // Aplica la configuración guardada
    function applySettings() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.body.classList.add(savedTheme);
            document.querySelector(`input[name="theme"][value="${savedTheme}"]`).checked = true;
        }
    }

    // Guarda la configuración y recarga la página
    function saveSettings() {
        const selectedTheme = document.querySelector('input[name="theme"]:checked')?.value;
        if (selectedTheme) {
            localStorage.setItem('theme', selectedTheme);
            document.body.classList.remove('light', 'dark');
            document.body.classList.add(selectedTheme);
            location.reload(); // Recarga la página para aplicar el tema
        }
    }

    // Añade un listener a los radios
    themeRadios.forEach(radio => {
        radio.addEventListener('change', saveSettings);
    });

    // Aplicar la configuración al cargar la página
    applySettings();
});
