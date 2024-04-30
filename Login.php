<html>
    <head>
        <title>uas</title>
        <style>
     html{
    height: 100%;
}

body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #14B3C1, #0f75af);
    
}

.login-box{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
    border-radius: 10px;
}

.login-box h2{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}

.login-box .user-box{
    position: relative;
}

.login-box .user-box input{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.login-box .user-box label{
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label{
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
}

.login-box form a{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
}

#submit-btn {
    background: -webkit-linear-gradient(right, #03868d, #03e9f4);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #03e9f4;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
  }
  
  #submit-btn:hover {
    box-shadow: 0px 1px 18px #03e9f4;
  }
      </style>
    </head>
    <body>
        
    <div class="login-box">
        <h2>Login</h2>

    <form action="Menuju.php" method="post" name="input">
    <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
    </div>
    <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
    </div>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input id="submit-btn" type="submit" name="Login" value="Login"/>
        <input id="submit-btn" type="reset" name="Reset" value="Reset"/>   
</form>
</div>
</body>
</html>