$(document).ready(function () {
    setTimeout(function () {
        $(".preloader").fadeOut();
    }, 1500);

    if (localStorage.getItem("theme") === "dark") {
        $("html").addClass("dark");
    }

    window.mobileBtn = function () {
        $("#mobile-menu").slideToggle(300);
        $("#mobile-menu").toggleClass("hidden");
    };

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $("#scroll-top").addClass("show");
        } else {
            $("#scroll-top").removeClass("show");
        }
    });

    $("#scroll-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });

    

    if (localStorage.getItem("theme") === "dark") {
        $("html").addClass("dark");
        $("#switch").addClass("translate-x-6");
        $("#moon").addClass("hidden");
        $("#sun").removeClass("hidden");
    }

    window.themeToggle = function () {
        $("html").toggleClass("dark");
        $("#switch").toggleClass("translate-x-6");
        $("#moon, #sun").toggleClass("hidden");
        localStorage.setItem(
            "theme",
            $("html").hasClass("dark") ? "dark" : "light"
        );
    };

    function themeToggle() {
        $("html").toggleClass("dark");
        $("#switch").toggleClass("translate-x-6");
        $("#moon, #sun").toggleClass("hidden");

        localStorage.setItem(
            "theme",
            $("html").hasClass("dark") ? "dark" : "light"
        );
    }

    $(".fa-heart").on("click", function () {
        $(this).toggleClass("far fas text-primary");
    });

    window.readMoreBtn = function () {
        const content = $("#expandable-content");
        const icon = $(this).find("i");

        if (content.hasClass("expanded")) {
            content.removeClass("expanded");
            icon.css("transform", "rotate(0deg)");
            $(this).find("span").text("Read Full Story");
        } else {
            content.addClass("expanded");
            icon.css("transform", "rotate(180deg)");
            $(this).find("span").text("Show Less");
        }
    };

    $(".image-slider").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow:
            '<button type="button" class="slick-prev text-gray-600"><i class="fas fa-chevron-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next text-gray-600"><i class="fas fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                },
            },
        ],
    });

    $(".cad-slider").slick({
        dots: true,
        infinite: true,
        speed: 100,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow:
            '<button type="button" class="slick-prev text-gray-600"><i class="fas fa-chevron-left"></i></button>',
        nextArrow:
            '<button type="button" class="slick-next text-gray-600"><i class="fas fa-chevron-right"></i></button>',
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // সব মেনু লিঙ্ক সিলেক্ট করো
    const menuLinks = document.querySelectorAll(".menu-link");

    menuLinks.forEach((link) => {
        link.addEventListener("click", function () {
            // আগে সবগুলা থেকে active ক্লাস রিমুভ করো
            menuLinks.forEach((item) => {
                item.classList.remove("active", "text-red-500", "font-bold");
            });

            // ক্লিক করা লিঙ্কে active ক্লাস অ্যাড করো
            this.classList.add("active", "text-red-500", "font-bold");
        });
    });
});
