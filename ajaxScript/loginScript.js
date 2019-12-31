var x = 0;
function getphpConnection(){
    let xmlhttp;

    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function(err){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            if(document.myLoginForm.email.value != "" && document.myLoginForm.password.value != ""){
                var response = xmlhttp.responseText;
                
                switch(response){
                    case "good chatter":
                        setTimeout(function(){
                            window.location = "TubsIndex.php";
                        }, 4000);
                        rememberPassword(myLoginForm.email.value, myLoginForm.password.value);
                        break;
                    case "wrong":
                        x++;
                        if(x % 5 != 0){
                            changeClass("details", "vibrate", 1000);
                            playSound();
                        }else{
                            changeClass("details", "vibrate", 1000);
                            playSound();
                            setTimeout(function(){
                                changeClass("snack", "show-snackbar", 5000);
                            },2000);
                        }
                        break;
                    case "not connected":
                        alert("connection failed");
                        break;
                    default:

                }
            }else if(document.myLoginForm.email.value == ""){

                alert("email field cannot be empty");

            }else if(document.myLoginForm.password.value == ""){

                alert("password field cannot be empty");

            }
        }
        else{

        }
    }
    xmlhttp.open('GET', './phpScripts/UserLogin.php?email='+document.myLoginForm.email.value + '&password='+document.myLoginForm.password.value, true);
    xmlhttp.send();
};

/*var password = function(){
    document.myLoginForm.password.value = "solomon";
}
window.addEventListener('load', password, false);
**/

function changeClass(ID, classNm, time){

    var vb = document.getElementById(ID);
    vb.className = classNm;
    setTimeout(function(){
        vb.className = vb.className.replace(classNm, "");
    }, time);
}

// function validateEmail(){

// }
function rememberPassword(name, password){
    var pass = document.getElementById("rem_pass");
    this.one = name;
    this.two = password;

    if(pass.checked){
        sessionStorage.setItem(one, two);
    }else{
        sessionStorage.clear();
    }
}
function displayPassword(){
    var a = sessionStorage.key(0);
    var b = sessionStorage.getItem(a);
    
    document.myLoginForm.password.value = b;
    if(document.myLoginForm.password.value != ""){
        $("#rem_pass").prop("checked", true);
    }
}
var playSound = function(){
    var snd = new Audio("Audio/0cfa8e84d6a5cd63afa31d541625a9ef.wav");
    snd.play();
    snd.currentTime=0;
}

window.onload = function(){
    displayPassword();
}