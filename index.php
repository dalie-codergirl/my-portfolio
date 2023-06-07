<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "my_portfolio";
        $connection = mysqli_connect($servername,$username,$password,$dbname);
        if(!$connection){
            echo "no connection";
        }else{
            echo "connected succefully";
        }
        ?>

<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" href="style.css">
  
    <title>DALITSO</title>
    <script src="myScript.js"></script>
</head>
    <header>
        <nav  >
            <ul class="nav-ul" id="nav-ul">
                <li><a href="#about"><d>about</d></a></li>
                <li><a href="#projects"><d>projects</d></a></li>
                <li><a href="#skills"><d>skills</d></a></li>
                <li><a href="#contacts"><d>contact</d></a></li>
                
          </ul>
        </nav>
   
        <h1>DALITSO MBICHOLO</h1>
    </header>
<body>
    <div id="greeting"></div>
    <!-- <p id="par1" class="greeting" ></p> -->
        <h3 id="about"> BIOGRAPHY </h3>
    
        <img src="images/dali.jpg" alt="profile picture"><br>
        <p>~My name is dalitso mbicholo a student at mzuzu university currently studying ICT, a programmer in making. I am a malawian  young lady aged 18 currently residing in lilongwe. I am acquited with some of the programming languages like c programming and currently learning java, i also have knowledge about graphics and designing, pc repairing. I am more knowlegdeable in microsoft office and more interested in networking, i did my computer repairing at NTHA foundation where we were taught how one can maintain he's/her computer, we also learnt some basic graphics and designing and how to play well with the adobe suit. </p>
        <p>~I am one of the founders and a COO of a company called smart solution, it is an electronics company where we offer the following services: CCTV installation, nertworking,graphic and web designing, electriv fencing, IP PABX system,gate or garage automation and video conferencing solutions.This is why in my own free time i am a fleerance designer and a bussiness woman in a sense that i sell limited edition clothes </p>
        <br>
        <img name="slide" width="1000" height="400">



        <h3 id="projects"> PROJECTS </h3>
    
        <p>~Below are some projects of which i featured in.</p><br>
        <img src="images/cooker.png"  alt="solar cooker"><br>
        
        <img src="images/oven.png"  alt="solar heater"><br>
        
        <a href="http://www.scienceduddies.com"><t>Click here to view the project details.</a></t>
        <br>
    
        <a href="projects.php"><t>FOR MORE INFO....</t> </a>  
        

        <h3 id="skills"> SKILLS </h3>
        <P>~With the knowledge i have on designing and programming i can say that i have the following skills.</P> 
        <li> Graphics and designing</li>
        <li> Web design </li>
        <li> Pc repairing and maintanance</li>
        <li> Research</li>
        <li> Front end development</li>
        <li> Bussines </li>
        <li> Communication</li>
        <a href="skills.php"><t>VIEW MORE....</t></a>
    
         

        <h3> FORM </h3>
        <p>Fill out the form below.</p>
    <form id="form" action"/" method="get">
        <div>
            <label for="name"><w>Name</w></label><br>
            <input id="name" name="name" size="90"    type="text" required><br>
        </div>
        <div>
        <label for="password"><w>Password</w></label><br>
        <input id="password" name="password"  size="90" type="text" required><br>
    </div>
        <div>
            <label for="email"><m>EMAIL</m></label><br>
            <input id="email" name="email" size="90" row="5"  type="text" required><br>
        </div>  
        <button type="submit" size="30">Submit</button>
    </form>
       
    </body>


    <footer>
        <h3 id="contacts">MY CONTACTS</h3>
        <h3><img src="images/call.png" width="30px">0997351383</h3> 
        <br>
        <h3><img src="images/msg .png" width="30px">dalitsombhicholo@gmail.com </h3>
    <ul>
        <li><a href="https://www.instagram.com"><img src="images/insta.png" width="30px"></a></li>
        <li><a href="https://www.linked.com"><img src="images/ln.png"width="30px"></a></li>
        <li><a href="https://www.twitter.com"><img src="images/twit.jpg"width="30px"></a></li>
        <li><a href="https://www.facebook.com"><img src="images/fb.png"width="30px"></a></li>
        <li><a href="https://www.telegram.com"><img src="images/tel.png "width="30px"></a></li>
    </ul>
    </footer>
</html>