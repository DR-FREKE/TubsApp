<!DOCTYPE html>
<html>
    <head>
        <title>Tubs Chat</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" media="All">
        <script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/signupStyle.css" type="text/css" media="All">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="" id="">
            <div class="loginBox" id="">
                <div class="snackbar" id="snack">you seem to be entering<br> a wrong username or password</div>
                <div class="container">
                    <div class="loginBody">
                        <div class="app-name"><a href="#">TUBS</a><br><span>welcome to tubs communication app...please login</span></div>
                        <div class="" id="details">
                            <div class="info-content">
                                <div class="info-body">
                                    <form name="myregForm" id="m_Form" action="./SignUp.php">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mySlides">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="cover" id="cover_Firstname">
                                                                <span class="user"><i class="glyphicon glyphicon-user"></i></span>
                                                                <input type="text" placeholder="FirstName" class="" id="mFirstname" name="firstname">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="cover" id="cover_Lastname">
                                                                <span class="user"><i class="glyphicon glyphicon-lock"></i></span>
                                                                <input type="text" placeholder="LastName" class="" id="" name="lastname">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mySlides">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="cover" id="cover_Username">
                                                                <span class="user"><i class="glyphicon glyphicon-user"></i></span>
                                                                <input type="text" placeholder="UserName" class="" id="" name="username" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="cover" id="cover_email">
                                                                <span class="user"><i class="glyphicon glyphicon-user"></i></span>
                                                                <input type="email" placeholder="E-mail" class="" id="mEmail" name="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mySlides">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="cover" id="cover_pass">
                                                                <input type="password" placeholder="Password" class="" id="" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="cover" id="cover_pass">
                                                                <input type="password" placeholder="Confirm Password" class="" id="" name="confirm_password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span class="gender">GENDER: </span><input type="radio" class="checker" id="" name="gender" value="male"><em class="d_male">Male</em>
                                                            <input type="radio" class="checker" id="" name="gender" value="female"><em class="d_female">Female</em>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="submit_item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button type="button" class="" id="btnprev" onclick="plusSlide(-1);">PREVIOUS</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" class="" id="btnNext" onclick="plusSlide(1);">NEXT</button>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="info-footer">
                                <div class="signUp_link">
                                    <span class="">Already own an account with gister? <a href="http://localhost/Tubs/TubsIndex.php">Sign In</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chatfooter" id="">
                        program created by solomon @2017
                    </div>
                </div>
            </div>
        </section>
        <script>
            // slideindex = 1;
            // slideInput(slideindex);
            
            // function plusSlide(n){
            //     slideInput(slideindex += n);
            // }
            // function slideInput(n){
            //     var i;
            //     var slide = document.querySelectorAll(".mySlides");
            //     var prev = document.getElementById("btnprev");
            //     if(n > slide.length){slideindex = slide.length};
            //     if(n < ((slide.length) - 1)){
            //         //prev.disabled = true;
            //         prev.style.display = "none";
            //     }else{
            //         prev.style.display = "block";
            //     }
            //     for(i = 0; i < slide.length; i++){
            //         slide[i].style.display = "none";
            //     }
            //     slide[slideindex - 1].style.display = "block";
            // }

            slide =document.querySelectorAll(".mySlides");
            currentSlide = 0;
            btnNext = document.getElementById("btnNext");
            btnPrev =document.getElementById("btnprev");
            showSlides(currentSlide);

            function showSlides(n){
                slide[n].style.display = "block";
                if(n == 0){
                    btnPrev.style.display = "none";
                }else{
                    btnPrev.style.display = "inline";
                }
                if(n == (slide.length - 1)){
                    btnNext.innerHTML="SUBMIT";
                }else{
                    btnNext.innerHTML = "NEXT";
                }
                
            }
            function plusSlide(n){
                if(n == 1 && validateForm()) return true;
                slide[currentSlide].style.display = "none";
                currentSlide += n;

                if(currentSlide >= slide.length){
                    
                    document.getElementById("m_Form").submit();
                    //window.location="TubsIndex.php";
                    //return false;
                }

                showSlides(currentSlide);
            }
            function validateForm(){
                var y, empty;
                y =slide[currentSlide].getElementsByTagName("input");
                [].slice.call(y).forEach(function(el) {
                    if(el.value == ''){
                        empty =true;
                    }
                }, this);
                if(empty){
                    btnNext.disabled =true;
                    btnNext.style.backgroundColor = "#bbbbbb";btnNext.style.border="1px solid #bbbbbb";
                }else{
                    btnNext.disabled =false;
                    btnNext.style.backgroundColor = "#fff";btnNext.style.border="1px solid #255";
                }
                return empty;
            }
            function validateGender(){
                var z, radioChecked =false;
                z = document.getElementsByName("gender");
                if(z.checked){
                    radioChecked =true;
                }else{
                    radioChecked =false;
                }
                return radioChecked;
            }
            setInterval(validateForm, 100);
        </script>
    </body>
</html>