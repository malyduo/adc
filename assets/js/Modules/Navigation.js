import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
export default class Navigation {
    constructor() {
        this.config = {
            start: "200px",
            end: 99999,
            duration: 0.2,
        };
    }

    showHideMenu() {
        const showAnim = gsap
            .from(".header", {
                yPercent: -100,
                paused: true,
                duration: this.config.duration,
            })
            .progress(1);

        ScrollTrigger.create({
            start: this.config.start,
            end: this.config.end,
            onUpdate: (self) => {
                self.direction === -1 ? showAnim.play() : showAnim.reverse();
            },
        });
    }
}
