window.sliders = [];
$.fn.oldBxSlider = $.fn.bxSlider;

$.fn.bxSlider = function (options) {
    x = $(this).oldBxSlider(options);
    window.sliders.push(x);
    return x;
}
jQuery(document).ready(function () {


    jQuery('.moderate').on('click', 'a', function (e) {
        e.preventDefault();
        var method = jQuery(this).data('method');

        if (method == "REMOVE") {
            if (confirm('Вы точно хотите удалить данное обращение') == false) return false;
        }

        var variant = jQuery(this).data('variant');
        var fid = jQuery(this).data('fid');
        var tid = jQuery(this).data('tid');
        var bid = jQuery(this).data('bpid');
        var href = jQuery(this).attr('href');
        var formData = {
            'method': method,
            'variant': variant,
            'theme_id': tid,
            'forum_id': fid,
            'blog_post_id': bid,
        };
        // process the form
        $.ajax({
            type: 'POST',
            url: href,
            data: formData,
            dataType: 'json',
            encode: true
        })
            .done(function (data) {
                console.log(data);
                if (data.message)
                    jQuery(e.target).parent().parent().append(data.message);

                if (data.ACTION) {
                    if (data.ACTION == 'BACKGROUND')
                        if (data.COLOR == 'ORANGE')
                            jQuery(e.target).parent().parent().parent().css('background', 'rgba(255,255,0,0.5)');
                    if (data.COLOR == 'RED')
                        jQuery(e.target).parent().parent().parent().css('background', 'rgba(255,0,0,0.5)');
                    setTimeout(function () {
                        location.reload()
                    }, 1000);
                }
            });


    });
});


// слайдер в шапке
$(document).ready(function () {
    slider = $('.bxslider').bxSlider({
        auto: true,
        autoStart: true,
        pause: 5000,
        pagerCustom: '.sp-link, .pager-slid',
        mode: 'fade'
    });

    $('.sp-link a, .pager-slid a').click(function (e) {
        var i = $(this).data("slide-index");
        slider.goToSlide(i);
        slider.startAuto();
        return false;
    });

    $('.bx-controls-direction a').click(function (e) {
        var i = $(this).index();
        slider.goToSlide(i);
        slider.stopAuto();
        restart = setTimeout(function () {
            slider.startAuto();
        }, 500);
        return false;
    });
});
// Конец слайдер в шапке


// карусель новостей
$(document).ready(function () {
    $('.carus-news-in').bxSlider({
        mode: 'vertical',
        minSlides: 3,
        pager: false,
        maxSlides: 3,
        adaptiveHeight: true,
        moveSlides: 1
    });
});
// Конец карусель новостей


// Бегущая строка
$('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 10000,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,
    pauseOnHover: true
});
// Конец Бегущая строка


// Слайдер статистики
$(document).ready(function () {
    $('.slid-stat-in').bxSlider();
});
// Конец Слайдер статистики


// Парад логотипов
$(document).ready(function () {
    $('.parad').bxSlider({
        minSlides: 6,
        pager: false,
        maxSlides: 6,
        slideWidth: 190,
        moveSlides: 1
    });
});
// Парад логотипов


$(".nav ul").delegate("div", "click", function () {
    $('.nav').toggleClass('newClassUl');
});

$(".nav > ul > li:nth-child(1)").after("<div class='fluid-menu'> </div><div class='hamburger-menu'></div> ");

$(".nav > ul > li > ul > li:nth-child(1)").append("<div class='fluid-menu fluid-menu-item'> </div><div class='hamburger-menu hamburger-item'></div> ");

$('.nav ul li').click(function () {
    var thisId = this.id;
    //alert('thisId');
    //$(this + ' ul').animate({'left': '0px'}, 300);
    $('.nav ul li ul').css({"left": "-320px"});
    $(this).find("ul").css({"left": "0px"});
})

$(".nav > ul > li > ul > li").delegate("div", "click", function () {
    // $('.nav ul li ul').css({"left": "320px"});
    // alert("ddd");
    $(".nav ul li ul").animate({"left": "-320px"}, 300);
});


$(function () {
    $('#mainNavToggleButton').on('click', function () {
        $(this).toggleClass('toggle-menu-icon-change')
    });
});

$(document).ready(function () {                                     // вся мaгия пoсле зaгрузки стрaницы
    $('a#go').click(function (event) {                              // лoвим клик пo ссылки с id="go"
        event.preventDefault();                                     // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400,                                   // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function () {                                           // пoсле выпoлнения предъидущей aнимaции
                $('#modal_form')
                    .css('display', 'block')                        // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '50%'}, 200);        // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });

    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */

    $('#modal_close, #overlay').click(function () {                 // лoвим клик пo крестику или пoдлoжке
        $('#modal_form')
            .animate({opacity: 0, top: '45%'}, 200,                 // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function () {                                       // пoсле aнимaции
                    $(this).css('display', 'none');                 // делaем ему display: none;
                    $('#overlay').fadeOut(400);                     // скрывaем пoдлoжку
                }
            );
    });
});


function ClosePopap() {
    $('#modal_form')
        .animate({opacity: 0, top: '45%'}, 200,                     // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
            function () {                                           // пoсле aнимaции
                $(this).css('display', 'none');                     // делaем ему display: none;
                $('#overlay').fadeOut(400);                         // скрывaем пoдлoжку
            }
        );
}


function SendEmail() {
    var value = $("#pop-emeil-value").val();
    var url = $("#url-value").val();
    var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
    if (!value.match(reg)) {
        $('#error_email').text("Пожалуйста, введите e-mail правильно!");
    }
    else {

        $.ajax
        ({
            url: "/ajax/send.php",
            type: "POST",
            data: {email: value, url: url},
            error: function () {
                alert("error");
            },
            success: function (data) {
                $('#form_email').hide();
                $('#error_email').text("");
                $("#messeg_email").text("Спасибо, сообщение отправленно!");
                setTimeout(ClosePopap, 2000);
            }
        });
    }
}


function Subscribe() {
    var value = $("#sub_value").val();
    var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
    if (!value.match(reg)) {
        $('#form_sub').text("Пожалуйста, введите e-mail правильно!");
    }

    else {
        $.ajax
        ({
            url: "/ajax/subscribe.php",
            type: "POST",
            data: {email: value},
            error: function () {
                alert("error");
            },
            success: function (data) {
                $("#form_sub").text(data);
            }
        });
    }
}


$(function () {
    $.fn.scrollToTop = function () {
        $(this).hide().removeAttr("href");
        if ($(window).scrollTop() != "0") {
            $(this).fadeIn("slow")
        }
        var scrollDiv = $(this);
        $(window).scroll(function () {
            if ($(window).scrollTop() == "0") {
                $(scrollDiv).fadeOut("slow")
            } else {
                $(scrollDiv).fadeIn("slow")
            }
        });
        $(this).click(function () {
            $("html, body").animate({scrollTop: 0}, "slow")
        })
    }
});


$(function () {
    $("#toTop").scrollToTop();
});





// vision switch

$('body').toggleClass(localStorage.toggled);

$('#visionSwitch').on('click',function(){
    if (localStorage.toggled != "vision_global_class" ) {
        $('body').toggleClass("vision_global_class", true );
        localStorage.toggled = "vision_global_class";
    } else {
        $('body').toggleClass("vision_global_class", false );
        localStorage.toggled = "";
    }
});

$('#fontSizeSwitchLarge').on('click',function(){
    if (localStorage.toggled != "fontSizeSwitchLarge" ) {
        $('body').addClass("fontSizeSwitchLarge", true );
        $("body").removeClass("fontSizeSwitchSmall");
        $("body").removeClass("fontSizeSwitchNormal");
        localStorage.toggled = "fontSizeSwitchLarge";
    } else {
        $('body').addClass("fontSizeSwitchLarge", false );
        localStorage.toggled = "";
    }
});

$('#fontSizeSwitchNormal').on('click',function(){
    if (localStorage.toggled != "fontSizeSwitchNormal" ) {
        $('body').addClass("fontSizeSwitchNormal", true );
        $('body').removeClass("fontSizeSwitchLarge");
        $("body").removeClass("fontSizeSwitchSmall");
        localStorage.toggled = "fontSizeSwitchNormal";
    } else {
        $('body').addClass("fontSizeSwitchNormal", false );
        localStorage.toggled = "";
    }
});

$('#fontSizeSwitchSmall').on('click',function(){
    if (localStorage.toggled != "fontSizeSwitchSmall" ) {
        $('body').addClass("fontSizeSwitchSmall", true );
        $("body").removeClass("fontSizeSwitchLarge");
        $("body").removeClass("fontSizeSwitchNormal");
        localStorage.toggled = "fontSizeSwitchSmall";
    } else {
        $('body').addClass("fontSizeSwitchSmall", false );
        localStorage.toggled = "";
    }
});

// end - vision switch