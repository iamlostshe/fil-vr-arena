var $ = jQuery;


$(document).ready(function () {
    browserDetect();
    setTimeout(function () {
        $("body").addClass('is-loaded');
    }, 200);
});

$(function () {

    const $body = $('body');

    // Показываем попап
    $('.js-popup-trigger').click(function () {
        $body.toggleClass('is-popup');
    });

    // Показываем бар
    $('.js-bar-trigger').click(function () {
        $body.toggleClass('is-bar');
    });

    $('.js-bar-close').click(function () {
        $body.addClass('is-bar-closing');
        setTimeout(function () {
            $body.removeClass('is-bar-closing').removeClass('is-bar');
        }, 500);
    });
});

function browserDetect() {
    var browser = '';
    if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
        browser = 'is-opera';
    } else if (navigator.userAgent.indexOf("Edg") != -1) {
        browser = 'is-edge';
    } else if (navigator.userAgent.indexOf("Chrome") != -1) {
        browser = 'is-chrome';
    } else if (navigator.userAgent.indexOf("Safari") != -1) {
        browser = 'is-safari';
    } else if (navigator.userAgent.indexOf("Firefox") != -1) {
        browser = 'is-firefox';
    } else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) //IF IE > 10
    {
        browser = 'is-ie';
    } else {
        browser = 'is-unknown';
    }
    document.documentElement.classList.add(browser);
}


/* Sticky Header start */
$(function () {
    //get nav position
    var sticky = true;
    var navY = 40;
    var fix = false;
    var root = $('body');

    if (window.pageYOffset > navY) {
        root.addClass("is-sticky");
        fix = true;
    }
    if (sticky == true) {
        $(window).scroll(function () {
            if (window.pageYOffset > navY) {
                if (!fix) {
                    root.addClass("is-sticky");
                    fix = true;
                }
            } else {
                if (fix) {
                    root.removeClass("is-sticky");
                    fix = false;
                }
            }
        });
    }
});

/* Phone mask */
$(function () {
    //+7 (XXX) XXX-XX-XX
    if ($('.js-mask-phone').length > 0) {
        var trigger = false;
        var options = {
            'translation': {
                C: {
                    pattern: /[7]/
                },
                M: {
                    pattern: /[9,7,5,3,2]/
                },
                L: {
                    pattern: /[9,7,5]/
                }
            },
            onKeyPress: function onKeyPress(cep, e, field, options) {
                var masks = ['+7 (000) 000-00-00'];
                if (cep.length === 8) {
                    trigger = true;
                }
                if (cep.length < 8) {
                    trigger = false;
                }
                var mask = cep.length > 7 && trigger ? masks[0] : masks[0];
            }
        };
        $('.js-mask-phone').mask('+7 (000) 000-00-00', options);
    }
});


// Select2
$(function () {

    $(".js-files").change(function () {
        const fileName = this.files[0]?.name;
        const label = document.querySelector("label[for=file]");
        if (fileName.length) {
            label.innerText = fileName;
        } else {
            label.innerText = "Выберите файл";
        }
        //label.innerText = fileName ?? "Browse Files";
    });
});

// Показываем спойлер
$(function () {
    $('.js-spoiler-trigger').click(function () {
        let spoilerID = $(this).attr('data-spoiler');
        $(this).toggleClass('is-active');
        $('#' + spoilerID).toggleClass('is-open');
    });
});

$(function () {
    if ($('.js-format').length) {
        $('.js-format table').each(function () {
            $(this).wrap('<div class="c-table"></div>');
        });
    }
});

$(function () {

    $('.js-format img').each(function () {
        var imgPath = $(this).attr('src');
        $(this).wrap('<a href="' + imgPath + '" data-fancybox="images-set"></a>');
    });

});


$(function () {

    if ($('.js-pagenav').length > 0) {

        $('.js-pagenav').onePageNav({
            currentClass: 'is-active',
            changeHash: true,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function () {
                //I get fired when the animation is starting
            },
            end: function () {
                //I get fired when the animation is ending
            },
            scrollChange: function ($currentListItem) {
                //I get fired when you enter a section and I pass the list item of the section
            }
        });
    }
});

function heroVideoController(videoDesktopPath, videoMobilePath) {

    if(device.portrait()) {
        $('#js-hero-video source').attr('src', videoMobilePath);
    } else {
        $('.js-hero-video source').attr('src', videoDesktopPath);
    }
    //$('#js-hero-video')[0].load();
    //$('#js-hero-video')[0].play();
}

/* Play or stop visible hero video */
$(function () {
    var $video = $('#js-hero-video source');
    var videoDesktopPath = $('#js-hero-video source').attr('data-video');
    var videoMobilePath = $('#js-hero-video source').attr('src');

    if(device.desktop()) {
        $('#js-hero-video source').attr('src', videoDesktopPath);
        //$video[0].load();
        //$video[0].play();
    } else {
        heroVideoController(videoDesktopPath, videoMobilePath);

        $(window).resize(function (){
            heroVideoController(videoDesktopPath, videoMobilePath);
        });
    }
});


