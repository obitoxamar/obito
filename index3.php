<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
   
    <title>BLUEBIRD: CARRIER OF YOUR PROBLEMS</title>
</head>
<body>
    <nav class="navbar background h-nav">
    <ul class="navlist v-class">
    <div class="logo"><img src="img/bluebird.jpeg" alt="logo"></div>
    <li> <a href="#home">Home</a> </li>
    <li> <a href="#about">About</a> </li>
   
    <li> <a href="#contact">ADD QUERY</a> </li>
     </ul>
     <div class="rightnav v-class">
     <input type="text " name = "search" id= "search">
     <button class="btn btn-sm">Search</button>
    </div>
    <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    </nav>
     <section class="background FirstSection">
      <div class="box-main" id="home">
        <div class="firsthalf">
            <p class="text-big">It feels good to work for the right cause</p>
            <p class="text-small">Let's start making changes in the world. </p>
            <div class="button">
                <button class="btn">START BY RAISING YOUR VOICE</button>
            </div>
        </div>
        <div class="secondhalf">
            <img src="img/yellowleaf.jpg" alt="laptop image">
        </div>

     </div>

     </section>
     <section class="secRight" id="about">
         <div class="paras">
      <p class="sectiontag text-big">THE END OF ALL OF YOUR WORRIES IS HERE :)</p>  
     
      <p class="sectionsub tag text-small">ABOUT US:</p>
     

      <p class="sectionsub tag text-small">  The primary reason to chose this particular topic was->
        Despite the fact that our country has progressed significantly, there are still numerous issues in our society that go unnoticed. People who are experiencing these issues have a difficult time contacting the appropriate authority to make a complaint. As a result, people assume that nothing will happen and that their problems will remain unsolved.,
        
      </p>
         </div> 
      <div class="thumbnail">
          <img src="img/nature1.jpeg" alt="laptop image" class="imgfluid">
      </div> 
 

</section>
 
<section class="secLeft">
    <div class="paras">
 <p class="sectiontag text-big">THE WORLD IS A BEAUTIFUL PLACE WITH BEAUTIFUL PEOPLE FOR EXAMPLE , LOOK AT YOU :)</p>  
 
 <p class="sectionsub tag text-small">_____________________________________________________</p>
 <p class="sectionsub tag text-small">The project will make a huge contribution to the society .
    People will gave to worry a little less about some critical problems that exixts in the  society and they can freely put up their problems without any hesitation or getting confused whom to contact.
    It will also be helpful for people in rural areas where problems like lack of water for irrigation , poor electricity , handpump malfunction are common…
    The main objective of the project will be development of a website where people can register themselves and can put any query or complain about the society and we will refer there query directly to the concerned authority.
    </p>

     
 </p>
    </div> 
 <div class="thumbnail">
     <img src="img/nature2.jpg" alt="laptop image" class="imgfluid">

</div>

</section>
<hr>

<section class="contact" id="contact">
<fieldset>
<legend class="text-center">GO AHEAD WITH YOUR QUERY</legend>
<form class="form" method="post" action="new.php">
<p>

<input class= "form-input"  type="text" name="name" id="name" placeholder="Enter your name">
</p>
<p>

<input class= "form-input" type="text" name="email" id="email" placeholder="Enter your email">
</p>
<p>

<input  class= "form-input" type="text" name="phone" id="phone" placeholder="Enter your phone number">
</p>
<p>

<textarea  class= "form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</section>
<footer class= "background">
    <p class="text-footer">
        Copyright &copy; 2027 - All rights reserved.
    </p>

</footer>
<script src="js/resp.js"></script>     
</body>
</html>
