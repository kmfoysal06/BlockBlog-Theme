document.addEventListener("DOMContentLoaded", function() {
    const menuToggler = document.querySelector(".blockblog-menu-toggler");
    const header_nav = document.querySelector(".blockblog-nav");

    menuToggler.addEventListener("click", e => {
        e.preventDefault();
        header_nav.classList.toggle("nav-shown");
    });
    document.addEventListener("click", async e => {
        if(!e.target.closest(".blockblog-nav") && !e.target.closest(".blockblog-menu-toggler")) {
            header_nav.classList.remove("nav-shown");
        }
        if(e.target.closest("a").getAttribute("data-blockblog-load")) {
            e.preventDefault();
            const url = e.target.closest("a").getAttribute("data-blockblog-load");
            const response = await fetch(url);
            if(response.ok) {
                const data = await response.text();
                const container = document.body;
                container.innerHTML = data;
                history.pushState({}, '', url);
            } else {
                console.error("Failed to load content:", response.status, response.statusText);
            }
        }
    });
});
