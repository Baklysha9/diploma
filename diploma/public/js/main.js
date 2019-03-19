var slideWidth = 300;  //Ширина одного слайда
var slideTimer;        //Интервал смены кадров

/*Устанавливаем ширину списка
*равную произведению ширины одного слайда на общее кол-во слайдов
*чтобы он вытянулся в одну строку*/
$('.slidewrapper').width($('.slidewrapper').children().length * slideWidth);
/*задаем временной интервал*/
sliderTimer = setInterval(nextSlide, 1000);

/*функция, сменяющая слайды каждую секунду*/
function nextSlide() {
    var currentSlide = parseInt($('.slidewrapper').data('current'));  //определяем текущий слайд
    currentSlide++;  //увеличиваем его значение
    if (currentSlide >= $('.slidewrapper').children().length) //перематываем к началу, если слайд последний
    {
        currentSlide = 0;
    }
    /*передвигаем список и сохраняем значение текущего слайда*/
    $('.slidewrapper').animate({ left: -currentSlide * slideWidth }, 300).data('current', currentSlide);
}

$('.viewport').hover(function () {
    clearInterval(sliderTimer);
}, function () {
    sliderTimer = setInterval(nextSlide, 1000);
});