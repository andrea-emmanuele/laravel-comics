import { gsap } from "gsap";

const timeline = gsap.timeline();

export function mobile() {
    let showed = false;

    const body = document.querySelector('body');
    const nav = document.querySelector('header #main nav');
    const mobileBtn = document.querySelector('header #main .mobile button.menu-btn');

    mobileBtn.addEventListener('click', () => {
        if (!showed)
            showed = showMenu(body, nav, mobileBtn);
        else if (showed)
            showed = closeMenu(body, nav, mobileBtn);
    })
}

function showMenu(body, nav, mobileBtn) {
    body.style.overflowY = "hidden";
    nav.classList.add('fullscreen');
    gsap.fromTo(nav, { left: "100%" }, {duration: .5, left: 0, ease: "elastic.out( 1, 0.5)"});
    closeButton(mobileBtn);

    return true;
}

function closeMenu(body, nav, mobileBtn) {
    body.style.overflowY = "unset";
    gsap.to(nav, {duration: .1, left: "-100%", ease: "ease-out", onComplete: () => {
        nav.classList.remove('fullscreen');
        nav.style.left = "0";
    }});
    showButton(mobileBtn);

    return false;
}

function showButton(btn) {
    btn.style.position = "unset";
    btn.style.top = "unset";
    btn.style.right = "unset";
    btn.style.zIndex = "unset";

    timeline.reverse();
}

function closeButton(btn) {
    btn.style.position = "fixed";
    btn.style.top = "10px";
    btn.style.right = "20px";
    btn.style.zIndex = "6";

    createAnimation(btn);
    timeline.play();
}

function createAnimation(btn) {
    const group = btn.querySelector('svg #hamburger');
    const line1 = btn.querySelector('svg #Line1');
    const line2 = btn.querySelector('svg #Line2');
    const line3 = btn.querySelector('svg #Line3');

    const timing = .2;

    timeline.to(group, {duration: timing, x: .7}, .1)
    timeline.to(group, {duration: timing, color: "#ef1213"}, .1)
    timeline.to(line1, {duration: timing, rotation: 46, y: .15, x: .4}, .1)
    timeline.to(line2, {duration: timing, opacity: 0}, .1)
    timeline.to(line3, {duration: timing, rotation: -45, x: .4}, .1)
}

