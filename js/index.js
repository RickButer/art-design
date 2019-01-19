var indexSliderHomePage = 0;
var indexSliderHomePageArray = ['/images/girl1.jpg', '/images/girl2.jpg', '/images/girl3.jpg', '/images/girl4.jpg', '/images/girl5.jpg'];
var indexSliderHomeCounter = 4000;

function startHomePageSlider() {
    document.getElementsByClassName('navbar_container').src = indexSliderHomePageArray;
    if (indexSliderHomePage > indexSliderHomePageArray.length - 1) {
        indexSliderHomePage++;
    } else {
        indexSliderHomePage = 0;
    }
}
window.onload=startHomePageSlider;