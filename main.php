<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learn English</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div class="first">
        <a class="sprite" href="#"><b>Learn English</b></a>
        <ul class="log sprite">
            <li class="signin"><a href="#">Contact</a></li>
            <li class="signin divider">|</li>
            <li class="signin"><a href="#" onclick="click_signup()">Sign up</a></li>
            <li class="signin"><button id="btnlogin" onclick="click_login()"><b><a href="#"><span style="color: white; font-size:14px;"> Log in</span></a></b></button></li>
        </ul>
    </div>
    <div class="section1">
        <h1>Speak to learn English</h1>
        <h4>Connect with native speakers from UK or USA, and learners of English from around the world.</h4>
        <button onclick="click_signup()">Sign up - It's free</button>
    </div>
    <section class="s2main">
        <div class="section2 sectionleft">
            <h2>Improve your English</h2>
            <p>Practice your English writing and speaking skills by chatting with native speakers from UK and USA or with other learners of English.</p>
        </div>
        <div class="section2 sectionright">
            <img src="picture/mockup-1.png" alt="learn english">
        </div>
    </section>
    <section class="s3main">
        <div class="section3 s3left">
            <img src="picture/mockup-2.png" alt="learn english">
        </div>
        <div class="section3 s3right">
            <h3>Meet people</h3>
            <p>Make friends with people from all over the world and learn new cultures every day.</p>
        </div>
    </section>
    <section class="section4" id="myModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="s4 s4left">
                    <button id="signup-tab" onclick="click_signup()">Sign up</button>
                </div>
                <div class="s4 s4right">
                    <button id="login-tab" onclick="click_login()">Log in</button>
                </div>
                <span class="s4right close">&times;</span>
            </div>
            <div class="modal-body">
                    <input class="modal-signup" type="text" name="yourname" placeholder="Your name">
                    <input type="text" name="yourmail" placeholder="Your mail"><br>
                    <input type="password" name="psw" placeholder="Password"><br>
                    <button class="forgotpw modal-login">Forgot your password?</button>
                    <input type="submit" class="btnlog modal-signup" value="Sign up">
                    <input type="submit" class="btnlog modal-login" value="Log in">
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>
</html>