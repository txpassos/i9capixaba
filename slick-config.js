// INICIO Slick Slider
$('.slider-noticias-container').slick({
dots: true,
slidesToShow: 2,
slidesToScroll: 2,
speed: 1800,
autoplay: true,
autoplaySpeed: 10000,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 2,
slidesToScroll: 2,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
arrows: false
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
arrows: false
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
// FIM Slick Slider

// INICIO Slick Modchip
$('.mod-chips').slick({
infinite: false,
speed: 1800,
slidesToShow: 7,
slidesToScroll: 2,
arrows: false,
variableWidth: true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 2,
slidesToScroll: 2,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 3,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 3,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
// FIM Slick Modchip
