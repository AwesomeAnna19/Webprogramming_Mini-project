// I watched this video to know how to make forms for sign in and login: https://www.youtube.com/watch?v=LiomRvK7AM8

function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
}