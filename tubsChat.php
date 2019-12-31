<!DOCTYPE html>
<html>
    <head>
        <title>Tubs Chat</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" media="All">
        <script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/design.css" type="text/css" media="All">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="./scripts/chat.js"></script>
        <script type="text/javascript" src="./scripts/SmoothScroll.min.js"></script>
    </head>
    <body>
        <section class="" id="">
            <div class="chatBox" id="">
                <div class="container">
                    <div class="chatBody" id="">
                        <div class="message_header" id="">
                            <div class="message_profile" id="">
                                <ul>
                                    <div class="user-img">
                                       <span>SN</span>
                                    </div>
                                    <div class="user-detail">
                                        <li><span class="conn" id="connector">Solomon Ndifereke</span></li>
                                        <li><span class="online"></span></li>
                                        <li class="diff"><span>online</span></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="message_body" id="m_message">
                            <div class="conversation-start">
                                <span>Today, 4:56 AM</span>
                            </div>
                            <div class="bubble me">
                                wassasasas...<button type="button" id="btnLogout">logout</button>
                            </div>
                            <div class="bubble you">
                                Hello, can you hear me?
                            </div>
                            <div class="bubble you">
                                I'm in California dreaming
                            </div>
                            <div class="bubble me">
                                ... about who we used to be.
                            </div>
                            <div class="bubble you">
                                When we were younger and free...
                            </div>
                            <div class="bubble you">
                                I've forgotten how it felt before
                            </div>
                            <div class="bubble me">
                                Are you serious?...Awwnn that's cute
                            </div>
                            <div class="bubble me">
                                wassasasas...<button type="button" id="btnLogout">logout</button>
                            </div>
                            <div class="bubble you">
                                Hello, can you hear me?
                            </div>
                            <div class="bubble you">
                                I'm in California dreaming
                            </div>
                            <div class="bubble me">
                                ... about who we used to be.
                            </div>
                            <div class="bubble you">
                                When we were younger and free...
                            </div>
                            <div class="bubble you">
                                I've forgotten how it felt before
                            </div>
                        </div>
                        <div class="message_footer" id="">
                            <div class="messageText" id="">
                                <button type="submit" class="emoji" name="submit">emoji</button>
                                <input type="text" name="msg_Text" placeholder="type message here" class="" id="txtMsg">
                                <button type="submit" class="send" name="submit" id="sendMsg">send</button>
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
        function getMessages(letter) {
            var div = $(".message_body");
            div.scrollTop(div.prop('scrollHeight'));
        }
        $(function() {
            getMessages();
        });
        </script>
    </body>
</html>