window.addEventListener('DOMContentLoaded', (event) => {
    fetch('library/particlesjs-config.json')
        .then(response => response.json())
        .then(jsonConfig => {
            particlesJS('particles-js', jsonConfig);
        });
});
