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
        <div>
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                <li><button type="button" id="btnLogout">logout</button></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">Contenido home <a href="Chatpage.php">Enter Chat page</a></div>
                <div class="tab-pane" id="profile">Contenido profile</div>
                <div class="tab-pane" id="messages">Contenido messages</div>
                <div class="tab-pane" id="settings">Contenido settings</div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                    localStorage.setItem('activeTab', $(e.target).attr('href'));
                });
                
                var activeTab = localStorage.getItem('activeTab');
                
                console.log(activeTab);
                
                if (activeTab) {
                    $('a[href="' + activeTab + '"]').tab('show');
                }
            });
        </script>
    </body>
</html>