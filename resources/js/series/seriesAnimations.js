import { gsap } from "gsap";

export function animateCards() {
    gsap.to(".card",{
        scale: 1,
        ease: "power1.inOut",
        delay: .5,
        stagger: .3
    });
}
