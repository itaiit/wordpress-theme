jQuery(document).ready(function($) {
    var progressBar = $('#progress-bar');
    var totalHeight = $(document).height() - $(window).height();

    $(window).scroll(function() {
        var progress = ($(window).scrollTop() / totalHeight) * 100;
        progressBar.css('width', progress + '%');
    });
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("back-to-top").style.display = "block";
    } else {
        document.getElementById("back-to-top").style.display = "none";
    }
}

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}