/*GENERAL DOCUMENT READY*/
$(document).ready(function () {
    $(".sub-menu").css("display", "none");
});

/*BINDE CLICKOUTSITE PLUGIN TO CLASS*/
$(".mainBar").bind( "clickoutside", function(event){
    $(".sub-menu").hide();
});

$("#menu-1").on("click", function() {
    $("#submenu-1").fadeToggle("fast");
    $("#submenu-2").css("display", "none");
    $("#submenu-3").css("display", "none");
    $("#submenu-4").css("display", "none");
    $("#submenu-5").css("display", "none");
    $("#submenu-6").css("display", "none");
});

$("#menu-2").on("click", function() {
    $("#submenu-2").fadeToggle("fast");
    $("#submenu-1").css("display", "none");
    $("#submenu-3").css("display", "none");
    $("#submenu-4").css("display", "none");
    $("#submenu-5").css("display", "none");
    $("#submenu-6").css("display", "none");
});

$("#menu-3").on("click", function() {
    $("#submenu-3").fadeToggle("fast");
    $("#submenu-2").css("display", "none");
    $("#submenu-1").css("display", "none");
    $("#submenu-4").css("display", "none");
    $("#submenu-5").css("display", "none");
    $("#submenu-6").css("display", "none");
});

$("#menu-4").on("click", function() {
    $("#submenu-4").fadeToggle("fast");
    $("#submenu-2").css("display", "none");
    $("#submenu-3").css("display", "none");
    $("#submenu-1").css("display", "none");
    $("#submenu-5").css("display", "none");
    $("#submenu-6").css("display", "none");
});

$("#menu-5").on("click", function() {
    $("#submenu-5").fadeToggle("fast");
    $("#submenu-2").css("display", "none");
    $("#submenu-3").css("display", "none");
    $("#submenu-1").css("display", "none");
    $("#submenu-4").css("display", "none");
    $("#submenu-6").css("display", "none");
});

$("#menu-6").on("click", function() {
    $("#submenu-6").fadeToggle("fast");
    $("#submenu-5").css("display", "none");
    $("#submenu-2").css("display", "none");
    $("#submenu-3").css("display", "none");
    $("#submenu-1").css("display", "none");
    $("#submenu-4").css("display", "none");
});

/*HOVER TABLE TR*/
$(document).ready(function () {
    $("tr").not(':first').hover(
        function () {
            $(this).css("cssText","background: #F9E97D !important;");
        },
        function () {
            $(this).css("background","");
        });
});

/*EDIT PROFILE TABLE*/
function editProfile(userId) {

}

