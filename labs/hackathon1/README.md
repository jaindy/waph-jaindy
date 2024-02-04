# WAPH-jaindy Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Divyani Jain

**Email**: jaindy@mail.uc.edu

**Short-bio**: Work experience of more than 6 years in IT Industry. Specialize in Analysis, Development, Design, Testing, Debugging and Implementation of Web Applications. 

![Divyani Headshot!](/Images/Divyani_Jain.jpg)

## Repository Information

Respository's URL: [https://github.com/jaindy/waph-jaindy.git](https://github.com/jaindy/waph-jaindy.git)

This is a private repository for divyani Jain to store all code from the course. The organization of this repository is as follows.

## Hackathon 1 - Cross-site Scripting Attacks and Defenses

Task 1. Perform cross site scripting attacks on below Url and display my name in alert.
http://waph-hackathon.eastus.cloudapp.azure.com/xss/level[0-6]/echo.php​

#### Level 0: Hacked level0 by injected javascript script tag in input field. 

Injected Code: <script>alert('level 0 hack by Divyani Jain')</script>
![Level 0!](/Images/Level0.png)

Source code: echo $_REQUEST["input"];

#### Level 1: hacked level1 by injected javascript script tag in url. 

Injected Code: <script>alert('level 0 hack by Divyani Jain')</script>
![Level 1!](/Images/Level1.png)

Source code: echo $_REQUEST["input"];

#### Level 2: hacked the level2 by changing the URL path in action attribute of the Form tag in HTML and send data in POST request.
Injected Code:
![Injected code Level 2!](/Images/InjectedCodeForLevel2.png)
![Level 2!](/Images/Level2.png)

Source code: echo $_REQUEST["input"];

#### Level 3: Hacked the level3 by providing alert in onerror event in image tag.
![Level 3!](/Images/Level3.png)

Source code of the echo.php web application: echo strip_tags("<script>alert('level 3 hack by Divyani Jain')</script>","<img>");

#### Level 4:Hacked the level4 by providing alert in onerror event in image tag.
![Level 4!](/Images/Level4.png)

Source code of the echo.php web application: echo strip_tags("<script>alert('level 4 hack by Divyani Jain')</script>","<img>");

#### Level 5: Hacked the level5 by providing window alert in onload event in body tag.
![Level 5!](/Images/Level5.png)

Source code of the echo.php web application: echo strip_tags("<script>alert('level 5 hack by Divyani Jain')</script>","<img>");

#### Level 6: 

Source code of the echo.php web application: echo htmlentities($_REQUEST["input"])



