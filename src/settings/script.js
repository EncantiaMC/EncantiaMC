document.addEventListener('DOMContentLoaded', function() {
    function applySettings() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.body.classList.add(savedTheme);
        }
    }

    // Aplicar configuraciones guardadas
    applySettings();
});
