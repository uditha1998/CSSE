<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login Construction</title>
        <!--== META TAGS ==-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--== FAV ICON ==-->
        <link rel="shortcut icon" href="images/fav.ico">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

        <!-- FONT-AWESOME ICON CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--== ALL CSS FILES ==-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mob.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/materialize.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>

    <body>
        <div class="blog-login">
            <div class="blog-login-in">
                <form>
                    <img src="images/logo.png" alt="" />
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate">
                            <label for="first_name1">User Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="last_name">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="type">
                                <option value="" disabled selected>Choose Login Type</option>
                                <option value="1">Supplier</option>
                                <option value="2">Manager</option>

                            </select>
                            <label>Select User Type</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <a class="waves-effect waves-light btn-large btn-log-in" id="login-admin" >Login</a>
                            </div>
                        </div>
                        <a href="#" class="for-pass">Forgot Password?</a>
                </form>
            </div>
        </div>

        <!--======== SCRIPT FILES =========-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(document).ready(function () {
                //Create slider

                $("#login-admin").click(function (event) {
                    event.preventDefault();
                    ;

                    if (!$('#username').val() || $('#username').val().length === 0) {
                        swal({
                            title: "Error!",
                            text: "Please enter username..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else if (!$('#password').val() || $('#password').val().length === 0) {
                        swal({
                            title: "Error!",
                            text: "Please enter Password..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        var username = $('#username').val();

                        var pass = $('#password').val()

                        var type = $('#type').val()
                        

                        $.ajax({
                            type: "POST",
                            url: "controller/login.php",
                            data: {username: username, password: pass, type: type},
                            dataType: "json",
                            //if received a response from the server
                            success: function (result) {

                                if (result.status == "fail") {
                                    swal({
                                        title: "Error!",
                                        text: "Username or Password Invalid..!",
                                        type: 'error',
                                        timer: 2000,
                                        showConfirmButton: false

                                    });
                                } else if (result.status == "success") {
                                    swal({
                                        title: "Success!",
                                        text: "Your Have Successfully Login",
                                        type: 'success',
                                        timer: 2000,
                                        showConfirmButton: false
                                    }, function () {
                                        setTimeout(function () {
                                            window.location.replace("index.php");
                                        }, 2000);
                                    });
                                }


                            }

                        });

                    }
                });

            });
        </script>
    </body>


</html>