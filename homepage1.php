<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
       <title>homepage</title>
   </head>
   <body>
<!--       <div class="container">-->
      <header>
         <div class="main">
            <div class="name wow fadeIn"  data-wow-duration="1s">
                <img src="images/500_F_177755139_mDY4QtKtQQvxxGEqgYptk52gwzXQfzgI.jpg" width="40">&nbsp;
               <font size=5> BR&nbsp;</font><font size=4> COMPANIES</font>
            </div>
            <div class="tagline wow fadeIn"  data-wow-duration="1s">
               <div class="best"><font face="monotype corsiva" size=5 color="black"><b>Excellence is our priority...</b><br></font></div>
            </div>
         </div>
         <div class="nav">
            <ul>
               <a href="#">
                  <li>HOME</li>
               </a>
               <a href="#prac">
                  <li>PRACTICE AREAS</li>
               </a>
               <a href="#vision1">
                  <li>OUR VISION</li>
               </a>
               <a href="#attorneys">
                  <li>ATTORNEYS</li>
               </a>
               <a href="#contact">
                  <li>CONTACTS</li>
               </a>
            </ul>
         </div>
      </header>
<!--         </div> -->
       <div class="whole">
      <div class="bgimg1">
         <div class="text1">
            <div class="text11 wow fadeInLeftBig">BOUTIQUE LAW FIRM<BR><BR>
               Specializing in Commercial Law & Litigation, Insolvency & Fraud</BR></BR>
            </div>
         </div>
      </div></div>
      <a name="prac"></a>
      <div class="one">
         <div class="text2">
            <div class="text22 wow fadeInLeft" data-wow-duration="1s">PRACTICE AREAS</div>
         </div>
         <div class="bullets">
            <table width=50% class="wow fadeInRight" data-wow-duration="1s">
               
                  <tr>
                     <td>
                         <dl class="bulls">
                        <dt>LITIGATION</dt>
                        <dd>I'm a paragraph.Create a para.</dd>
                         </dl>
                     </td>
                     <td><dl class="bulls">
                        <dt>BUSINESS</dt>
                         <dd>I'm a paragraph.Create a para.</dd></dl>
                     </td>
                  </tr>
                  <tr>
                     <td><dl class="bulls">
                        <dt>INSOLVENCY</dt>
                         <dd>I'm a paragraph.Create a para.</dd></dl>
                     </td>
                     <td><dl class="bulls">
                        <dt>FRAUD</dt>
                         <dd>I'm a paragraph.Create a para.</dd></dl>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <dt>DISPUTE RESOLUTION</dt><dl class="bulls">
                         <dd>I'm a paragraph.Create a para.</dd></dl>
                     </td>
                     <td>
                        <dt>TAX</dt><dl class="bulls">
                         <dd>I'm a paragraph.Create a para.</dd></dl>
                     </td>
                  </tr>
            </table>
         </div>
      </div>
      <a name="vision1"></a>
      <div class="vision">
         <div class="text3 wow fadeInUpBig"  data-wow-duration="1s">
            <center>
               <font size=10><b>OUR</b> VISION</font><br><br><br>
               <p>  I'm a paragraph. Click here to add your own text and edit me. It's easy. Just click "Edit Text" or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I'm a great place for you to tell a story and let your users know a little more about you.</p>
               <p>
                  This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
               </p>
               <p>
                  At Wix we're passionate about making templates that allow you to build fabulous websites and it's all thanks to the support and feedback from users like you! Keep up to date with New Releases and what's Coming Soon in Wixellaneous in Support. Feel free to tell us what you think and give us feedback in the Wix Forum.
               </p>
            </center>
         </div>
      </div>
      <div class="bgimg2"></div>
      <a name="attorneys"></a>
      <div class="one">
         <div class="text2">
            <div class="text22 wow fadeInLeftBig"  data-wow-duration="1s">OUR ATTORNEYS</div>
         </div>
         <div class="bullets1">
            <div class="slacks wow fadeInRight"  data-wow-duration="1s">
            <div class="slack">
                 <center>
                 <img src="images/Screenshot%20(124).png"><br>
               
                 <h3>JULIA KNOLL</h3>
                 <h4 style="color: orange;">PARTNER</h4>
                     <hr>
                     Tel: 123-456-7890<br>info@mysite.com
                 </center>
                </div>
                <div class="slack">
                    <center>
                 <img src="images/Screenshot%20(125).png"><br>
                
                 <h3>JAMES SHAW</h3>
                 <h4 style="color: orange;">PARTNER</h4>
                        <hr>
                        Tel: 123-456-7890<br>info@mysite.com
                 </center>
                </div>
         </div>
      </div>
       </div>
      <a name="contact"></a>
      <div class="bgimg3">
          <div class="one">
         <div class="text4">
             <div class="text11 wow slideInUp"  data-wow-duration="1s"><B>CONTACT</B><br>KNOLL AND SHAW
            </div>
         </div>
              <div class="text44">
             <div class="text111 wow fadeInRight"  data-wow-duration="1s"><h3>OUR ADDRESS</h3><br>
500 Terry Francois St. San Francisco, CA 94158
<br>
<b>Email:</b> info@mysite.com<br>
               <b>Tel:</b>    123-456-7890
                 
                 
                 
                 
                 
                 
<?php
                 if(isset($_POST['s']))
                 {
$servername="localhost";
$username="sups";
$password="sups10";
$dbname="webs";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$a=$_POST['un'];
$b=$_POST['em'];
$c=$_POST['su'];
$d=$_POST['me'];
                 
$sql = "insert into form2 values('$a','$b','$c','$d')";
      if (mysqli_query($conn, $sql))
      {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
      }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);
                 }
            ?>
                 
                 
                 

                 <form method="POST" action="">
                     For any general inquiries, please fill in the following contact form:<br><br>
                 <input type="text" placeholder="Name" name="un"><br><br>
                     <input type="email" placeholder="E-mail" name="em"><br><br>
                     <input type="text" placeholder="Subject" name="su"><br><br>
                     <textarea rows=5 cols=30 name="me">Message</textarea><br><br>
                 <input type="submit" name='s'>
                 </form>
            </div>
         </div>
      </div>
    </div>
      <div class="top">
         <center>
            <a href=""><img src="images/arrow_up.gif" width="60"></a>
         </center>
      </div>
      <footer class="mainfooter">
         <div class="first">
            <center><img src="images/500_F_177755139_mDY4QtKtQQvxxGEqgYptk52gwzXQfzgI.jpg" width="40"><br>
               <font size=5> BR&nbsp;</font><font size=4> COMPANIES</font>
            </center>
         </div>
         <div class="second">
            <div class="le">&copy; 2023 by Knoll & Walters LLP. Proudly created with Wix.com</div>
            <div class="ri">
               <font face="monotype corsiva" size=5>
               Connect with us :&nbsp;</font>
               <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
               <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
               <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
            </div>
         </div>
      </footer>
       
       
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
   <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    </body>
</html>