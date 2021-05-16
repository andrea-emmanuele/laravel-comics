import { navigationInteraction } from './navigation/interaction';
import { animateCards } from "./series/seriesAnimations";

window.addEventListener('load', () => {
    navigationInteraction();
    animateCards();
});

