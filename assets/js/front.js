import Navigation from "./Modules/Navigation";
import Info from "./Modules/Info";

window.addEventListener("DOMContentLoaded", () => {
    const nav = new Navigation();
    nav.showHideMenu();

    const info = new Info();
    info.init();
});
