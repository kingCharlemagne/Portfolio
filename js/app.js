// Effet stiky
(function (w, d) {

    let el_html = d.documentElement,
        el_body = d.getElementsByTagName('body')[0],
        header = d.getElementById('header'),
        menuIsStuck = function () {
            let wScrollTop = w.pageYOffset || el_body.scrollTop,
                regexp = /(nav\-is\-stuck)/i,
                classFound = el_html.className.match(regexp),
                navHeight = header.offsetHeight,
                bodyRect = el_body.getBoundingClientRect(),
                scrollValue = 600;


            if (wScrollTop > scrollValue && !classFound) {
                el_html.className = el_html.className + ' nav-is-stuck';
                el_body.style.paddingTop = navHeight + 'px';
            }


            if (wScrollTop < 2 && classFound) {
                el_html.className = el_html.className.replace(regexp, '');
                el_body.style.paddingTop = '0';
            }
        },
        onScrolling = function () {
            menuIsStuck();
        };

    w.addEventListener('scroll', function () {
        w.requestAnimationFrame(onScrolling);
    });

}(window, document));


$(function () {
    //Effet smooth scroll
    $('a[href^="#"]').click(function () {
        let the_id = $(this).attr("href");
        if (the_id === '#') {
            return;
        }
        $('html, body').animate({
            scrollTop: $(the_id).offset().top
        }, 'slow');
        return false;
    });

});

// validation du formulaire
$(function () {
    $("#send").click(function () {
        valid = true;

        if ($("#name").val() == "") {
            $("#name").next(".required").fadeIn().text("Champ obligatoire !");
            valid = false;
        } else {
            $("#name").next(".required").fadeOut()
        }

        if ($("#email").val() == "") {
            $("#email").next(".required").fadeIn().text("Champ obligatoire !");
            valid = false;
        } else if (!$("#email").val().match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)) {
            $("#email").next(".required").fadeIn().text("Email invalide !");
            valid = false;
        }
        else {
            $("#email").next(".required").fadeOut()
        }

        if ($("#phone").val() == "") {
            $("#phone").next(".required").fadeIn().text("Champ obligatoire !");
            valid = false;
        } else if (!$("#phone").val().match(/0[1-9]\d{8}/)) {
            $("#phone").next(".required").fadeIn().text("Numéros invalide !");
            valid = false;
        } else {
            $("#phone").next(".required").fadeOut()
        }

        if ($("#message").val() == "") {
            $("#message").next(".required").fadeIn().text("Champ obligatoire !");
            valid = false;
        } else {
            $("#message").next(".required").fadeOut()
        }
        return valid
    })
});


