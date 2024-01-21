$(function () {
    //menginalisasi sebuah objek berdasarkan class
    var nav = $(".bg-biru");

    //fungsi yg akan di panggil saat navbar di scroll
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        //ketika do scrol lebih dari 50px maka akan berubah
        if (scroll >= 50) {
            nav.addClass("navbar-drak").addClass("navbar-light bg-light");
        } else {
            nav.removeClass("navbar-dark bg-light").addClass("navbar-drak");
        }


    });
});