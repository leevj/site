/* global Materialize, grecaptcha */
$(document).ready(function () {
    $('.slider').slider({
        interval: 15000
    });
    $('.dropdown-trigger').dropdown({
        constrainWidth: false,
        coverTrigger: false
    });
    $('.parallax').parallax();
    //$(".button-collapse").sideNav();
    $('.carousel').carousel({
        dist: 0,
        shift: 0,
        padding: 20,
        numVisible: 20,
        indicators: true
    });
    $('.modal').modal();
    $('.tabs').tabs();
    $('.slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        rows: 2,
        prevArrow: '<i class="fas fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fas fa-angle-right slick-next"></i>'
    });
    $('.materialboxed').materialbox();
});
$(".tab").click(function (event) { //Ao clicar no tab atualiza o slick.
    $('.slick-slider').slick('refresh');
});
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top - 60 }, 1500);
    });
});
$(".navegacao-left").click(function () {
    $('.slider').slider('prev');
});
$(".navegacao-right").click(function () {
    $('.slider').slider('next');
});
jQuery(document).ready(function () {
    /*SEM CAPTCHA*/
    jQuery('#envia-email-form').submit(function () {
        jQuery.ajax({
            type: "POST",
            url: "/php/envia-email.php",
            data: $("#envia-email-form").serialize(),
            success: function (data) {
                Materialize.toast('Email enviado com sucesso', 8000);
                $("#envia-email-form").trigger('reset');
            }
        });
        return false;
    });
    /*SEM CAPTCHA*/
    /* COM CAPTCHA
    jQuery('#envia-email-form').submit(function () {
        var v = grecaptcha.getResponse();
        if (v.length === 0) {
            Materialize.toast('Por favor, clique em "N&atilde;o sou um rob&ocirc;"', 8000);
            return false;
        } else {
            jQuery.ajax({
                type: "POST",
                url: "/php/envia-email.php",
                data: $("#envia-email-form").serialize(),
                success: function (data) {
                    Materialize.toast('Email enviado com sucesso', 8000);
                    $("#envia-email-form").trigger('reset');
                }
            });
            return false;
        }
    });
    COM CAPTCHA */
});
/*Scroll*/
$(window).scroll(function () {
    var $rolagem = $(window);
    if ($rolagem.scrollTop() > 20) {
        $(".tudo-topo nav").css("line-height", "75px");
        $(".tudo-topo nav").css("height", "75px");
        $(".tudo-topo nav img").css("height", "50px");
        $(".tudo-topo nav").removeClass("z-depth-0");
        $(".tudo-topo nav").addClass("shadow-suave");
    } else {
        $(".tudo-topo nav").css("line-height", "75px");
        $(".tudo-topo nav").css("height", "75px");
        $(".tudo-topo nav img").css("height", "50px");
        $(".tudo-topo nav").removeClass("shadow-suave");
        $(".tudo-topo nav").addClass("z-depth-0");
    }
});
/*Scroll*/