import { gsap } from "gsap";

export function navigationInteraction() {
    const nav = {
        el: document.querySelector('header #main nav'),
        offSet: function () {
            return this.el.getBoundingClientRect().left
        }
    }
    const items = document.querySelectorAll('header #main nav > .item');
    const underline = document.querySelector('header #main nav .underline');

    let activeRect = {
        x: 0,
        width: 0
    };

    items.forEach(item => {
        const rect = item.getBoundingClientRect();

        if (item.classList.contains('active')) {
            activeRect.x = rect.x - nav.offSet();
            activeRect.width = rect.width;

            const properties = {
                duration: .3,
                ease: "back.out(1.3)",
                x: rect.x - nav.offSet(),
                width: rect.width
            }

            moveTo(underline, properties);
        }

        item.addEventListener('mouseenter', () => {
            const properties = {
                duration: .3,
                ease: "back.out(1.3)",
                x: rect.x - nav.offSet(),
                width: rect.width
            }

            moveTo(underline, properties);
        })
    })

    nav.el.addEventListener('mouseleave', () => {
        const properties = {
            duration: .3,
            ease: "back.out(1.3)",
            x: activeRect.x,
            width: activeRect.width
        }

        moveTo(underline, properties)
    })
}

function moveTo(element, properties) {
    gsap.to(element, properties);
}
