document.addEventListener("DOMContentLoaded", function() {
    const profile_btn = document.querySelector(".blockblog-profile");
    const header_nav = document.querySelector(".blockblog-nav");

    profile_btn.addEventListener("click", e => {
        e.preventDefault();
        header_nav.classList.toggle("nav-shown");
    });
    document.addEventListener("click", e => {
        if(!e.target.closest(".blockblog-nav") && !e.target.closest(".blockblog-profile")) {
            header_nav.classList.remove("nav-shown");
        }
    });
});
