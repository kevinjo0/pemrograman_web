<!DOCTYPE html>
<!--
Nama        : Kevin Jonathan
NRP         : 2473002
PRAKTIKUM   : SOAL 1 / 19 Mei 2026 - Prak 11
-->

<html>
    <head>
        <title>2473002 - Kevin Jonathan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body {
                font-family: "Times New Roman", Times, serif;
            }

            .login {
                width: 450px;
            }

            .header {
                background-color: #000080;
                color: white;
                text-align: center;
                font-size: 45px;
                padding: 15px;
                margin-bottom: 20px;
            }

            .form {
                display: flex;
                margin-bottom: 10px;
                padding-left: 10px;
                align-items: center;
            }

            .form label {
                width: 120px;
                font-size: 18px;
            }

            .form input {
                width: 250px;
                padding: 4px;
                border: 1px solid #ccc;
            }

            .submit {
                margin-left: 130px;
                margin-bottom: 20px;
                margin-top: 10px;
            }

            .submit input {
                padding: 3px 15px;
                font-size: 16px;
            }

            .footer {
                border-top: 1px solid black;
                padding: 10px;
                font-size: 14px;
                line-height: 1.5;
            }
        </style>

        <script type="text/javascript" src="jquery.js"></script>
        <script>
            $(document).ready(function () {
                $("#login").submit(function (event) {
                    var user = $("#username").val();
                    var pass = $("#password").val();

                    if (user.trim() === "" || pass.trim() === "") {
                        alert("Username dan Password tidak boleh kosong!");
                        event.preventDefault();
                        return;
                    }

                    var loginData = {
                        "username": user,
                        "password": pass,
                        "timestamp": new Date().toISOString()
                    };

                    console.log("Data JSON yang disubmit: ", JSON.stringify(loginData));
                });
            });
        </script>
    </head>

    <body>
        <div class="login">
            <div class="header">
                Login
            </div>

            <form id="login" action="proses_login.php" method="POST">
                <div class="form">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="submit">
                    <input type="submit" value="login">
                </div>
            </form>

            <div class="footer">
                @UKM<?php echo date("Y"); ?><br>
                Kevin Jonathan-2473002&copy;
            </div>
        </div>
    </body>
</html>