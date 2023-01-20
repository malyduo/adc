import Navigation from "./Modules/Navigation";
import HeaderInfo from "./Modules/HeaderInfo";

window.addEventListener("DOMContentLoaded", () => {
    const nav = new Navigation();
    nav.showHideMenu();

    const headerInfo = new HeaderInfo();
    headerInfo.init();
});
