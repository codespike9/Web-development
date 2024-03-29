<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" @import url("https://fonts.googleapis.com/css2?
    family=Outfit:wght@100; 200; 300; 400; 500; 600; 700; 800;
    900&display=swap"); />
    <link rel="stylesheet" href="wave.css"/>
    <style>
      

      html {
        height: 100%;
      }

      * {
        font-family: "Outfit", sans-serif;
      }

      .login-box {
        position: absolute;
        font-family: "Outfit", sans-serif;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.5);
        box-sizing: border-box;
        border-radius: 10px;
      }
      .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
      }
      .login-box .user-box {
        position: relative;
      }
      .login-box .user-box input {
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
      .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;
      }
      .login-box .user-box input:focus-label,
      .login-box .user-box input:valid-label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
      }
      .forgot_pass {
        font-size: 12px;
        color: #5b6b8b;
        float: right;
      }

      .btn_submit {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        background: rgba(0, 0, 0, 0.5);
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        margin-top: 20px;
        letter-spacing: 4px;
        
      }
      .btn_submit:hover {
        background: #03e9f4;
        color: rgb(10, 11, 21);
        border-radius: 5px;
      }
      .btn_submit span {
        position: absolute;
        display: block;
      }
      .btn_submit span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient (90deg, transparent, #03e9f4);
        animation: btn-anim1 5s linear infinite;
      }

      @keyframes btn-anim1 {
        0% {
          left: -100%;
        }

        50%,
        100% {
          left: 100%;
        }
      }

      .btn_submit span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient (180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: 0.25s;
      }
      @keyframes btn-anim2 {
        0% {
          top: -100%;
        }
        50%,
        100% {
          top: 100%;
        }
      }

      .btn_submit span:nth-child(3) {
        bottom: 0;
        right: 100%;
        width: 100%;
        height: 2px;
        background: linear-gradient (270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: 0.5s;
      }

      @keyframes btn-anim3 {
        0% {
          right: -100%;
        }
        50%,
        100% {
          right: 100%;
        }
      }
      .btn_submit span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient (360deg, transparent, #03e9f4);
        animation: btn-anim4 is linear infinite;
        animation-delay: 0.75s;
      }
      @keyframes btn-anim4 {
        0% {
          bottom: -100%;
        }
        50%,
        100% {
          bottom: 100%;
        }
      }
    </style>
  </head>
  <body>
    &nbsp;
    &nbsp;
    &nbsp;
    <center>
  <a class="btn_submit" href="Homepage.php"> Home </a>
    </center>
  <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
      </div>
    <div class="login-box">
      <h2>Admin Login</h2>
      
      <form class="user-box"  name="myForm" method="post" action="php/admin.php">
        <div >
          <input type="text" name="Uname" placeholder="Username"   />
          <label></label>
        </div>

        <div >
          <input
            type="password"
            name="Pass"
            placeholder="Password"
            
          />
          <label></label>
        </div>
        <center>
        <button class="btn_submit" href="php/admin.php"> Login </button>
    </center>
      </form>
    </div>
  </body>
</html>
