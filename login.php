<!DOCTYPE html>
<html>
    <head>
        <title>Tubs Chat</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" media="All">
        <script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/style.css" type="text/css" media="All">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="./ajaxScript/loginScript.js"></script>
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
                                    <form name="myLoginForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cover" id="cover_email">
                                                    <span class="user_email"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input type="email" placeholder="E-mail" class="" id="mEmail" name="email" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="cover" id="cover_pass">
                                                    <span class="user_pass"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input type="password" placeholder="Password" class="" id="" name="password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="remember">
                                                    <label class="check_to_remember">
                                                        <input type="checkbox" name="" id="rem_pass"> <span>Remember my password</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="" id="btnLogin" onclick="getphpConnection();">LOGIN</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="" id="" name="">Forgot Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="info-footer">
                                <div class="signUp_link">
                                    <span class="">Don't have an account? <a href="http://localhost:8012/Tubs/SignUp.php">Sign Up</a></span>
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
            $(document).ready(function(){
                $('a[data-toggle="tab"]').on('click', function(e) {
                    localStorage.setItem('activeTab', $(e.target).attr('href'));
                });
                // Acá guarda el index al cual corresponde la tab. Lo podés ver en el dev tool de chrome.
                var activeTab = localStorage.getItem('activeTab');
                
                // En la consola te va a mostrar la pestaña donde hiciste el último click y lo
                // guarda en "activeTab". Te dejo el console para que lo veas. Y cuando refresques
                // el browser, va a quedar activa la última donde hiciste el click.
                console.log(activeTab);
                
                if (activeTab) {
                    $('a[href="' + activeTab + '"]').tab('show');
                }
            });
        </script>
    </body>
</html>