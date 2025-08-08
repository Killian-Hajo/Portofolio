const sliderTabs = document.querySelectorAll(".slider1-tab");
const sliderIndicator = document.querySelector(".slider1-indicator");
const SliderControls = document.querySelector(".slider1-controls")

const updateIndicator = (tab, index) => {
    sliderIndicator.style.transform = `translateX(${tab.offsetLeft - 20}px)`;
    sliderIndicator.style.width = `${tab.getBoundingClientRect().width}px`;

    const scrollLeft = sliderTabs[index].offsetLeft - SliderControls.offsetWidth / 2 + sliderTabs[index].offsetWidth / 2;
    SliderControls.scrollTo({left: scrollLeft, behavior: "smooth"});
}
const swiper = new Swiper(".slider1-container", {
    effect: "fade",
    speed: 1300,
    autoplay: {delay: 4000},
    navigation: {
        prevEl: "#slide1-prev",
        nextEl: "#slide1-next"
    },
    on: {
        slideChange: () => {
            const currentTabIndex = [...sliderTabs].indexOf(sliderTabs[swiper.activeIndex]);
            updateIndicator(sliderTabs[swiper.activeIndex], currentTabIndex);
        }
    }
});

sliderTabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        swiper.slideTo(index);
        updatePagination(tab, index);
    });
});

updateIndicator(sliderTabs[0], 0);
window.addEventListener("resize", () => updatePagination (sliderTabs[swiper.activeIndex], 0));