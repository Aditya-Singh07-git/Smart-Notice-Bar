
document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("sab-banner");
    const closeBtn = document.getElementById("sab-close");

    if (localStorage.getItem("sab_dismissed") === "true") {
        banner.style.display = "none";
    }

    closeBtn.addEventListener("click", function () {
        banner.style.display = "none";
        localStorage.setItem("sab_dismissed", "true");
    });
});
