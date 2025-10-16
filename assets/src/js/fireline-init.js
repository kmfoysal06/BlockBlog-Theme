import FireLine from "./fireline/index.js";
import Alpine from "alpinejs";
import morph from "@alpinejs/morph";

Alpine.plugin(FireLine);
Alpine.plugin(morph)
window.Alpine = Alpine;
Alpine.start();

//document.addEventListener("alpine:init", () => {
  window.FireLine.settings.targetEl = "#blockblog-content";
  window.FireLine.settings.timeout = 40;
  window.FireLine.settings.interceptLinks = true;
  window.FireLine.settings.interceptForms = true;
//});
