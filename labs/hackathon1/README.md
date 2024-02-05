# WAPH-jaindy Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Divyani Jain

**Email**: jaindy@mail.uc.edu

**Short-bio**: Work experience of more than 6 years in IT Industry. Specialize in Analysis, Development, Design, Testing, Debugging and Implementation of Web Applications. 

![Divyani Headshot!](/Images/Divyani_Jain.jpg)

## Repository Information

Respository's URL: [https://github.com/jaindy/waph-jaindy.git](https://github.com/jaindy/waph-jaindy.git)


## Hackathon 1 - Cross-site Scripting Attacks and Defenses

In hackathon 1, I learned about cross site attacks and prevention technique. Learn about htmlentities and strip_tag used to prevent hacking. Implemented the input validation and encoding html in server side.

Task 1. Perform cross site scripting attacks on below Url and display my name in alert.
http://waph-hackathon.eastus.cloudapp.azure.com/xss/level[0-6]/echo.php

#### Level 0: Hacked level0 by injected javascript script tag in input field. 

Injected Code: <script>alert('level 0 hack by Divyani Jain')</script>
![Level 0!](/Images/Level0.png)

Source code: echo $_REQUEST["input"];
#### Level 1: Hacked level1 by injected javascript script tag in url. 

Injected Code: <script>alert('level 0 hack by Divyani Jain')</script>
![Level 1!](/Images/Level1.png)

Source code: echo $_REQUEST["input"];
#### Level 2: Hacked the level2 by changing the URL path in action attribute of the Form tag in HTML and send data in POST request.
Injected Code:
![Injected code Level 2!](/Images/InjectedCodeForLevel2.png)
![Level 2!](/Images/Level2.png)

Source code: echo $_REQUEST["input"];
#### Level 3: Hacked the level3 by providing alert in onerror event in image tag.
![Level 3!](/Images/Level3.png)

Source code of the echo.php web application: echo strip_tags("<script>alert('level 3 hack by Divyani Jain')</script>");

#### Level 4: Hacked the level4 by providing alert in onerror event in image tag.
![Level 4!](/Images/Level4.png)

Source code of the echo.php web application: echo strip_tags("<script>alert('level 4 hack by Divyani Jain')</script>","<img>");

#### Level 5: Hacked the level5 by providing window alert in onload event in body tag.
![Level 5!](/Images/Level5.png)

Source code of the echo.php web application: echo strip_tags("<script>alert('level 5 hack by Divyani Jain')</script>","<img>");

#### Level 6: 
I tried this javascript code htmlspecialchars_decode($input) in html file and send a post request to the external URL (http://waph-hackathon.eastus.cloudapp.azure.com/xss/level6]/echo.php).
Unable to hack the level 6.

Source code of the echo.php web application: echo htmlentities($_REQUEST["input"]) 



## Task 2: Implement input validation and cross site defense methods.

Update the echo.php file where it is checking if the input field is empty or not. If not it is also not allowing script tag in input field, URL or via Post request.
![Prevent alert execution!](/Images/Preventalert.png)
![Input field validation!](/Images/InputFieldValidation.png)
![Server side validation!](/Images/ServerSideValidation.png)


