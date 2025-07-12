import '../scss/main.scss';
document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("click", async e => {
        if(!e.target.closest(".blockblog-header") && !e.target.closest(".blockblog-menu-toggler")) {
            e.target.closest('body').querySelectorAll(".blockblog-header").forEach(nav => {
                nav.classList.remove("nav-shown");
            });
        }
        if(e.target.closest(".blockblog-menu-toggler")) {
            e.preventDefault();
            e.target.closest(".blockblog-header").querySelectorAll(".blockblog-nav")[0].classList.toggle("nav-shown");
        }
    });
    document.addEventListener("keydown", e => {
        if((e.ctrlKey && e.key === 'k') || e.key === '/') {
            /**
             * only prevent default if the key is not '/'
             */

            if(e.key !== '/'){
                e.preventDefault();
            }
            const searchInput = document.querySelector(".blockblog-search input");
            if(searchInput) {
                searchInput.focus();
            }
        }
    });
});
