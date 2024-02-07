# WAPH-jaindy Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Divyani Jain

**Email**: jaindy@mail.uc.edu

**Short-bio**: I have a total of 6 years of work experience in IT as a software developer.

![Divyani Headshot!](Images/Divyani_Jain.jpg)

## Repository Information

Respository's URL: [https://github.com/jaindy/waph-jaindy.git](https://github.com/jaindy/waph-jaindy.git)


## Lab Overview Hackathon 1 - Cross-site Scripting Attacks and Defenses

In hackathon 1, I learned about cross site attacks and prevention technique. Learn about htmlentities and strip_tag used to prevent hacking. Implemented the input validation and encoding input data in server side.

Task 1. Perform cross site scripting attacks on below Url and display my name in alert.
http://waph-hackathon.eastus.cloudapp.azure.com/xss/level[0-6]/echo.php

#### Level 0: Hacked level0 by injected javascript script tag in input field.  <br />
![Level 0!](Images/Level0.png) <br />

    Source code: 
    <html>
    <body>
    <form action="/echo.php" method="POST">
      Input:<input type="text" name="input" >
      <input type="submit" name="Submit">
    </form>
    <?php
        echo $_REQUEST["input"];
    ?>
    </body>
    </html>

-----

#### Level 1: Hacked level1 by injected javascript script tag in url. <br />
![Level 1!](Images/Level1.png) <br />


    Source code: 
    <?php
       
     if(!isset($_REQUEST["input"])) { <br />
        die("{\"error\":\"Please provide 'input' field in an HTTP GET Request\"}"); <br />
      } else { <br />
      echo strip_tags($_REQUEST["input"],"<body>"); <br />
        }
    ?> 
              

-----



#### Level 2: Hacked the level2 by changing the URL path in action attribute of the Form tag in HTML and send data in POST request.
![Injected code Level 2!](Images/InjectedCodeForLevel2.png)
![Level 2!](Images/Level2.png) <br />


    Source code: 
    <?php
       
     if(!isset($_REQUEST["input"])) { <br />
        die("{\"error\":\"Please provide 'input' field in an HTTP POST Request\"}"); <br />
      } else { <br />
      echo strip_tags($_REQUEST["input"],"<body>"); <br />
        }
    ?> 
           
-----



#### Level 3: Hacked the level3 by providing alert in onerror event in image tag.
Source code of the echo.php web application: using strip_tag to stripped html and php tags. <br />

![Level 3!](Images/Level3.png) <br />


    Source code: 
    <?php
       
     if(!isset($_REQUEST["input"])) { <br />
        die("{\"error\":\"Please provide 'input' field \"}"); <br />
      } else { <br />
      echo strip_tags($_REQUEST["input"],"<body>"); <br />
        }
    ?> 

-----

#### Level 4: Hacked the level4 by providing alert in onerror event in image tag.
Source code of the echo.php web application: using strip_tag to stripped html and php tags and specify img table in second parameter. <br />
![Level 4!](Images/Level4.png) <br/>

     Source code:
     <?php
     if(!isset($_REQUEST["input"])) { <br />
        die("{\"error\":\"No 'script' is allowed!\"}"); <br />
      } else { <br />
      echo strip_tags($_REQUEST["input"],"<body>"); <br />
        }
     ?> 

-----

#### Level 5: Hacked the level5 by providing window alert in onload event in body tag. 
Source code of the echo.php web application: using strip_tag to stripped html and php tags. <br/>


![Level 5!](Images/Level5.png) 

<br />

 

      Source code:
      <?php
         
       if(!isset($_REQUEST["input"])) { <br />
          die("{\"error\":\"Please provide 'input' field\"}"); <br />
        } else { <br />
        echo strip_tags($_REQUEST["input"],"<body>"); <br />
          }
      ?> 

-----



#### Level 6: 
I tried php function htmlspecialchars_decode($input) in php file and added html form field in the same php file and send a post request to the external URL (http://waph-hackathon.eastus.cloudapp.azure.com/xss/level6]/echo.php). Alert is not showing on external Url. Unable to hack the level 6.

 <br />



    Source Code:
    <html>
    <body>
    <form action="http://waph-hackathon.eastus.cloudapp.azure.com/xss/level6/echo.php" method="POST">
      Input:<input type="text" name="input" >
      <input type="submit" name="Submit">
    </form>
    <?php
        echo htmlentities($_REQUEST["input"]);
    ?>
    </body>
    </html>

-----

## Task 2: Implement input validation and cross site defense methods.

Updated and push the chnages done in the echo.php file where it is checking if the input field is empty or not. It is not allowing alert popup by adding script tag in input field, URL or via Post request. Also, added input validation for Joke API.
<br />

![Server side validation!](Images/ServerSideValidation.png)

![Prevent alert execution!](Images/AlertValidation.png)

![External API validation!](Images/ValidateJokeAPI.png)

![Input field validation!](Images/InputFieldValidation.png)



