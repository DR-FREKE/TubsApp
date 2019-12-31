var getmsg = function(){
    var btn = document.getElementById("sendMsg");
    
    btn.onclick = function(){
        document.getElementById("txtMsg").value = "";
    }
}
window.addEventListener('load', getmsg, false);

$(document).ready(function(){
    $("#btnLogout").on('click', function(){
        $.ajax({
            url: "./phpScripts/TubsLogout.php",
            type: "GET",
            success: function(response){
                if(response == "logout"){
                    setTimeout(function(){
                        window.location = "TubsIndex.php";
                    }, 5000);
                }
            }
        });
    });
});

