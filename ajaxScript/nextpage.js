$(document).ready(function(){
    $("#btnLogin").on('click', function(){
        setTimeout(function(){
            window.location = "TubsIndex.php";
            $("#loading").css("display", "none");
            window.removeEventListener('scroll', noScroll);
        },10000);
        $("#loading").css("display", "block");
        window.addEventListener('scroll', noScroll, false);
    });
});
function noScroll(){
    window.scrollTo(0, 0);
}

