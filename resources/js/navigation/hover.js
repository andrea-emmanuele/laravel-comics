export function navigationInteraction() {
    const items = document.querySelectorAll('header #main nav > .item');
    const underline = document.querySelector('header #main nav .underline');
    const navOffset = document.querySelector('header #main nav').getBoundingClientRect().left;

    console.log(items);

    items.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const rect = item.getBoundingClientRect();
            underline.style.left = rect.x - navOffset + "px";
            underline.style.width = rect.width + "px";
        })

        item.addEventListener('mouseleave', () => {
            underline.style.left = 0 + "px";
            underline.style.width = 0 + "px";
        })
    })
}
