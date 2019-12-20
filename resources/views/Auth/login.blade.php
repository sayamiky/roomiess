<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Roomies</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="{{asset('loginuser/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<p class="tip"></p>
<div class="cont">
  <form class="form-auth-small" action="/proseslogin" method="POST">
    {{csrf_field()}}
  <div class="form sign-in">
      <p class="tips"></p>
    <h2>Welcome back,</h2>
    <label>
      <span>Email</span>
      <input name="email" type="email" value="irmakrisnayanti31@gmail.com" />
    </label>
    <label>
      <span>Password</span>
      <input name="password" type="password" value="thisispassword"/>
    </label>
    <p class="forgot-pass"><a href="" style="text-decoration: none; color: #cfcfcf;">Forgot password?</a></p> 
    <button type="submit" class="submit">Sign In</button>
  </div>
  </form>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
          <!-- <p class="tip"></p> -->
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
  <form class="form-auth-small" action="/proseslogin" method="POST">
   {{csrf_field()}}
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <label>
        <span>Name</span>
        <input type="text" />
      </label>
      <label>
        <span>Alamat</span>
        <input type="text" />
      </label>
      <label>
        <span>Telp</span>
        <input type="text" />
      </label>
      <label>
        <span>Email</span>
        <input type="Email" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" />
      </label>
      <button type="submit" class="submit">Sign Up</button>
    </div>
  </form>
  </div>
</div>

<!-- partial -->
  <script  src="{{asset('loginuser/script.js')}}"></script>

</body>
</html>