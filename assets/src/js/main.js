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
        if(e.target.closest("a")?.getAttribute("data-blockblog-load")) {
            e.preventDefault();

            e.target.closest("body").querySelector("header .blockblog-top-progress").classList.add('loading')

            const url = e.target.closest("a").getAttribute("data-blockblog-load");
            const response = await fetch(url);
            const container = document.body;
            
            if(response.ok) {
                const data = await response.text();
                const bodyMatch = data.match(/<body[^>]*>([\s\S]*)<\/body>/);
                const headMatch = data.match(/<head[^>]*>([\s\S]*?)<\/head>/);
                if (headMatch) {
                    // if there is script:src load it dynamically by creating a script element
                    const scriptMatches = headMatch[1].match(/<script[^>]*src="([^"]*)"[^>]*><\/script>/g);
                    if (scriptMatches) {
                        scriptMatches.forEach(scriptTag => {
                            const srcMatch = scriptTag.match(/src="([^"]*)"/);
                            if (srcMatch) {
                                const script = document.createElement('script');
                                script.src = srcMatch[1];
                                script.async = true;
                                document.head.appendChild(script);
                            }
                        });
                    }
                    const headContent = headMatch[1];
                    const headElement = document.head;
                    headElement.innerHTML = headContent;
                }
                if (bodyMatch) {
                    // if there is script:src load it dynamically by creating a script element
                    const scriptMatches = bodyMatch[1].match(/<script[^>]*src="([^"]*)"[^>]*><\/script>/g);
                    if (scriptMatches) {
                        scriptMatches.forEach(scriptTag => {
                            const srcMatch = scriptTag.match(/src="([^"]*)"/);
                            if (srcMatch) {
                                const script = document.createElement('script');
                                script.src = srcMatch[1];
                                script.async = true;
                                document.body.appendChild(script);
                            }
                        });
                    }
                    container.innerHTML = bodyMatch[1];
                } else {
                    container.innerHTML = '<div class="blockblog-error">Content not found</div>';
                }

                history.pushState({}, '', url);
            } else {
                container.innerHTML = '<div class="blockblog-error">Content not found</div>';
            }
        }
        if(e.target.closest(".blockblog-header-search")) {
            e.preventDefault();
            const container = document.body;
            e.target.closest("body").querySelector("header .blockblog-top-progress").classList.add('loading')

            const searchInput = e.target.closest(".blockblog-search").querySelector("input");
            const query = searchInput.value.trim();
            if(query) {
                const url = `/?s=${encodeURIComponent(query)}`;
                const response = await fetch(url);
                let data;
                if(response.ok) {
                    data = await response.text();
                }
                else{
                    data = `<div class="blockblog-search-error">No results found for "${query}"</div>`;

                }
                container.innerHTML = data;
                container.querySelector(".blockblog-search input").value = query;
                history.pushState({}, '', url);
            }
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
