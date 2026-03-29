import AOS from 'aos';
import 'aos/dist/aos.css';

const aosOptions = {
    duration: 700,
    easing: 'ease-in-out-cubic',
    once: true,
    offset: 64,
    delay: 0,
};

let aosReady = false;

const initAos = () => {
    AOS.init(aosOptions);
    aosReady = true;
};

if (document.readyState === 'complete') {
    initAos();
} else {
    window.addEventListener('load', initAos, { once: true });
}

document.addEventListener('livewire:navigated', () => {
    if (aosReady) {
        AOS.refreshHard();
    } else {
        initAos();
    }
});
