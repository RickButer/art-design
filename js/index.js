var indexSliderHomePage = 0;
var sliderHomePageArray = ['images/artwork/girl1.jpg', 'images/artwork/girl2.jpg', 'images/artwork/girl3.jpg', 'images/artwork/girl4.jpg', 'images/artwork/girl5.jpg'];
var indexArtistImages = 0;
var artistImagesArray = ['images/artist/enn_kunila.jpg', 'images/artist/bob_ross.jpg', 'images/artist/freddy_stuward.jpg', 'images/artist/sarah_michelle.jpg'];

var circle1 = document.getElementsByClassName('circle1');
var circle2 = document.getElementsByClassName('circle2');
var circle3 = document.getElementsByClassName('circle3');
var circle4 = document.getElementsByClassName('circle4');
var circle5 = document.getElementsByClassName('circle5');

function startHomePageSlider() {
    document.homeSlider.src = sliderHomePageArray[indexSliderHomePage];

    if (indexSliderHomePage === 0) {
        circle1[0].style.backgroundColor = 'black';
        circle5[0].style.backgroundColor = 'white';
    } else if (indexSliderHomePage === 1) {
        circle2[0].style.backgroundColor = 'black';
        circle1[0].style.backgroundColor = 'white';
    } else if (indexSliderHomePage === 2) {
        circle3[0].style.backgroundColor = 'black';
        circle2[0].style.backgroundColor = 'white';
    } else if (indexSliderHomePage === 3) {
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
setInterval("startHomePageSlider()", 5000);
window.onload = startHomePageSlider;

function nextPhoto() {
    document.artist_images.src = artistImagesArray[indexArtistImages];
    if (indexArtistImages < artistImagesArray.length - 1) {
        indexArtistImages++;
    } else {
        indexArtistImages = 0;
    }

}
var indexArtistText = 0;
var artistTextArray = ['dbfhdsbhfbdshgbhdsghdsfkdsgdshgdshgdshfdshfkjdshgdshgfdsjk', 'lklklklklklklkklkllklklklklklklklklklklklklklk', 'popopopopopopopopopopopopopopopopopopopopopo', 'wqwqwqwqwqwqwqwqwqwqwqwqwqwqwqwqwqwwqwqwq'];

function nextText() {
    document.getElementById('text_container_p').src = artistTextArray[indexArtistText];
    if (indexArtistText < artistTextArray.length - 1) {
        indexArtistText++;
    } else {
        indexArtistText = 0;
    }
}