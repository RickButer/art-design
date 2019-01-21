var indexSliderHomePage = 0;
var sliderHomePageArray = ['/images/girl1.jpg', '/images/girl2.jpg', '/images/girl3.jpg', '/images/girl4.jpg', '/images/girl5.jpg'];

var circle1 = document.getElementsByClassName('circle1');
var circle2 = document.getElementsByClassName('circle2');
var circle3 = document.getElementsByClassName('circle3');
var circle4 = document.getElementsByClassName('circle4');
var circle5 = document.getElementsByClassName('circle5');

function startHomePageSlider() {
    document.homeSlider.src = sliderHomePageArray[indexSliderHomePage];
    setTimeout("startHomePageSlider()", 5000);

    if (indexSliderHomePage == 0) {
        circle1[0].style.backgroundColor = 'black';
        circle5[0].style.backgroundColor = 'white';
    } else if (indexSliderHomePage == 1) {
        circle2[0].style.backgroundColor = 'black';
        circle1[0].style.backgroundColor = 'white';
    } else if (indexSliderHomePage == 2) {
        circle3[0].style.backgroundColor = 'black';
        circle2[0].style.backgroundColor = 'white';
    } else if (indexSliderHomePage == 3) {
        circle4[0].style.backgroundColor = 'black';
        circle3[0].style.backgroundColor = 'white';
    } else {
        circle5[0].style.backgroundColor = 'black';
        circle4[0].style.backgroundColor = 'white';
    }
    if (indexSliderHomePage < sliderHomePageArray.length - 1) {
        indexSliderHomePage++;
    } else {
        indexSliderHomePage = 0;
    }
}
window.onload = startHomePageSlider;

function changeImg1() {
    indexSliderHomePage = 0;
}

function changeImg2() {
    indexSliderHomePage = 1;
}

function changeImg3() {
    indexSliderHomePage = 2;
}

function changeImg4() {
    indexSliderHomePage = 3;
}

function changeImg5() {
    indexSliderHomePage = 4;
}