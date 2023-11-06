window.addEventListener('DOMContentLoaded', (event) => {
    fetch('particles-config')
        .then(response => response.json())
        .then(jsonConfig => {
            particlesJS('particles-js', jsonConfig);
        });
});