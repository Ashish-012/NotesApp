<!DOCTYPE html>
<html lang="en">
<head>
    <link href='css/style.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <!------         Navbar        ------->
    
    <nav class="navbar navbar-custom navbar-expand-md navbar-fixed-top navbar-light" style="background-color: #209fde;">
    <a class="navbar-brand" href="index.php" style = 'color:white;margin-right:80px' >NOTES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav navbar-right">
        <li class="active">
            <a class="nav-link" style='color:white;padding-right:25px;' href="#" >Home</a>
        </li>
        <li>
            <a class="nav-link" style='color:white;padding-right:25px;' href="#" >Help</a>
        </li>
        <li>
            <a class="nav-link" style='color:white;' href="#" >Contact Us</a>
        </li>
        </ul>
        
        <ul class="nav navbar-nav ml-auto">
        <li>
            <a class="nav-link" style='color:white;' href="#loginmodal" data-toggle='modal'>Login</a>
        </li>
        
        </ul>
        
    </div>
    </nav>
    
    <!--------   Jumbotron      -------->

    <div class="jumbotron" id='myContainer'>
            <h1>Online Notes App</h1>
            <h3 style='margin-top:50px'>Your Notes with you wherever you go</h3>
            <a class="btn btn-success btn-lg" href="#" style='margin-top:50px;' data-target='#signupmodal' data-toggle='modal'>Sign up - Its Free!</a>
    </div>
    <!--------   Login form     ----------->
    <form method='post' id='loginform'>
    <div class="modal" id='loginmodal' aria-labelledby='myModalLabel' role="dialog" aria-hidden='true'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Login:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <!--- login from php file  --->
                <div id='loginmessage'>
                
                </div>
                <div class="form-group">
                    
                    <input type="email" class="form-control" name="loginemail" placeholder="Email"><br>
                    <input type="password" class="form-control" name="loginpassword" placeholder="Password"><br>
                    <div class='checkbox'>
                        <label >
                            <input type='checkbox' name='rememberme'> Remember me
                        </label>
                        <a class='float-right' style='cursor:pointer;color:blue;' data-dismiss='modal' data-target='#forgotpasswordmodal' data-toggle='modal' >Forgot password?</a>
                    </div>
                    
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary mr-auto"  name='Register' data-dismiss='modal' href='#signupmodal' data-toggle='modal'  >Register</button>
                <button type="button" class="btn btn-success" name='login' type='submit'>Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </form>



    <!--------   sign up form    ---------->
    <form method='post' id='signupform'>
    <div class="modal" id='signupmodal' aria-labelledby='myModalLabel' role="dialog" aria-hidden='true'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Sign up today and Start using out Online Notes App!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <!--- signup from php file  --->
                <div id='signupmessage'>
                
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" maxlength='20'><br>
                    <input type="email" class="form-control" name="email" placeholder="Email Address"><br>
                    <input type="password" class="form-control" name="password" placeholder="Choose a password"><br>
                    <input type="password" class="form-control" name="password2" placeholder="Re-enter password">
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" name='signup' type='submit'>Sign-up</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-------    Forget password    ------>
    <form method='post' id='forgotpasswordform'>
    <div class="modal" id='forgotpasswordmodal' aria-labelledby='myModalLabel' role="dialog" aria-hidden='true'>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Forgot Password? Enter your email address:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <!--- fotgot password message from php file  --->
                <div id='loginmessage'>
                
                </div>
                <div class="form-group">
                    
                    <input type="email" class="form-control" name="forgotemail" placeholder="Email"><br>
                    
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary mr-auto"  name='Register' href='#signupmodal' data-toggle='modal' >Register</button>
                <button type="button" class="btn btn-success" name='forgotpassword' type='submit'>Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </form>




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>