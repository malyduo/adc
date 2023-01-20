export default class HeaderInfo {
    constructor() {
        this.headerInfo = document.querySelector(".header-info");
        this.headerInfoBtn = document.querySelector(".header-info__btn-close");
        this.init();
    }

    init() {
        const cookies = this.getCookies();

        if (Object.prototype.hasOwnProperty.call(cookies, "header-info")) {
            this.hideInfo();
        }

        if (this.headerInfo) {
            this.headerInfoBtn.addEventListener(
                "click",
                this.hideInfo.bind(this)
            );
        }
    }

    hideInfo() {
        document.cookie = "header-info=true";
        this.headerInfo.style.display = "none";
    }

    getCookies() {
        return Object.fromEntries(
            document.cookie.split("; ").map((x) => x.split("="))
        );
    }
}
