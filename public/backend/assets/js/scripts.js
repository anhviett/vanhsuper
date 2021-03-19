/*!
    * Start Bootstrap - SB Admin v6.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
(function ($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function (e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

})(jQuery);

if($('#profileInfo_avatar').attr('src') === 'usersUpload/defaultImage.png'){
    $('.avatarDelete').css('display', 'none');
}else{
    $('.avatarDelete').css('display', 'block');
}
$('.perChecked input').each(function() {
    $(this).click(function (){
        if($(this).prop("checked") === true) {
            $(this).parent().next().children().prop('checked', true)
            $(this).parent().next().next().children().prop('checked', true)
            $(this).parent().next().next().next().children().prop('checked', true)
            $(this).parent().next().next().next().next().children().prop('checked', true)
        }
        else if($(this).prop("checked") === false) {
            $(this).parent().next().children().prop('checked', false)
            $(this).parent().next().next().children().prop('checked', false)
            $(this).parent().next().next().next().children().prop('checked', false)
            $(this).parent().next().next().next().next().children().prop('checked', false)
        }
    })
});
CKEDITOR.replace('newsContentAdd');
CKEDITOR.replace('newsContentUpdate');
