export default class Info {
    constructor() {
        this.headerInfo = document.querySelector(".info");
        this.headerInfoBtn = document.querySelector(".info__btn-close");
        this.init();
    }

    init() {
        const cookies = this.getCookies();

        if (Object.prototype.hasOwnProperty.call(cookies, "info")) {
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
        document.cookie = "info=true";
        this.headerInfo.style.display = "none";
    }

    getCookies() {
        return Object.fromEntries(
            document.cookie.split("; ").map((x) => x.split("="))
        );
    }
}
