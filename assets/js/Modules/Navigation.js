import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
export default class Navigation {
    constructor() {
        let config = {
            start: "200px",
            end: 99999,
            duration: 0.2,
        }
        this.showHideMenu(config);
    }

    showHideMenu(config) {
        const showAnim = gsap.from('.header', {
            yPercent: -100,
            paused: true,
            duration: config.duration
        }).progress(1);

        ScrollTrigger.create({
            start: config.start,
            end: config.end,
            onUpdate: (self) => {
                self.direction === -1 ? showAnim.play() : showAnim.reverse()
            }
        });
    }
}