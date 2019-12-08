// function get from https://codepen.io/rdallaire/pen/apoyx

$(window).scroll(function () {
    if ($(this).scrollTop() >= 900) {
        $('#top').fadeIn(200);
    } else {
        $('#top').fadeOut(200);
    }
});
$('#top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});