<html>
    <body>
        <head>
        <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;  
        
      }
      html,body{
        display: grid; /* center*/
        height: 100%;
        width: 100%;
        place-items: center;
        background: linear-gradient(to right, #14B3C1, #0f75af);
        color: white;
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
      place-items: center;
      display: grid;
    }
  
    #submit-btn:hover {
    box-shadow: 0px 1px 18px #03e9f4;
    }
  
      </style>
      
        </head>
<span></span>

<?php
    if(isset($_POST['Login'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];
        if($user=="Naufal Labib" && $pass=="12345"){
            echo ("<h2>Login berhasil, selamat datang pak Muhammad Naufal Labib Ramadhan</h2>");
            
        }else{
          $arrGagal=array("Login ", " gagal,", " silakan", " ulangi", " kembali");
          for($i=0; $i<count($arrGagal); $i++){
          echo ("$arrGagal[$i]") ;
          }
        }
      }
?>
<a href="Shoorai.html" id="submit-btn" target="_blank" style="text-decoration:none"> Shoorai</a>
</body>
</html>