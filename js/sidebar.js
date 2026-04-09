// I watched this video to know how to make the sidebar: https://youtu.be/ppLEvovzOV0

document.addEventListener('DOMContentLoaded', function() {

    const button = document.getElementById('openCloseButton');
    const sidebar = document.querySelector('.sidebar');

    button.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });

});