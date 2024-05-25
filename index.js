
document.addEventListener("DOMContentLoaded", function() {
    const profilePicture = document.getElementById("profilePicture");

    profilePicture.addEventListener("click", function() {
        profilePicture.classList.toggle("hidden");
    });
});

