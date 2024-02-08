# WAPH-jaindy Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Divyani Jain

**Email**: jaindy@mail.uc.edu

**Short-bio**: Work experience of more than 6 years in IT Industry. Specialize in Analysis, Development, Design, Testing, Debugging and Implementation of Web Applications. 

![Divyani Headshot!](Images/Divyani_Jain.jpg)

## Repository Information

Respository's URL: [https://github.com/jaindy/waph-jaindy.git](https://github.com/jaindy/waph-jaindy.git)

This is a private repository for divyani Jain to store all code from the course. The organization of this repository is as follows.

### Lab3 overview

Task 1: 


Part a: Tested session in php with different browser such as chrome, firefox. 

1. When tested session without session_start() method in php at the time of page refresh it did not count the times when you refresh the page.  

![Session without start!](Images/sessionWithoutStart.png)

2. When tested session with session_start() method in php at the time of page refresh it did count the times when you refresh the page.  

![Session start!](Images/SessionTest.png)

Part b. Tested the Cookie information in the http request/response usig wireshark tool.

1. Cleared the browser history in firefox browser and hit the localhost/waph-jaindy-session.php. In first request there is no cookie information in http request. but, response contains the cookie information.

![Wireshark first request/response!](Images/wiresharkFirstRequest.png)

2. Refresh the URL "localhost/waph-jaindy-session.php". In second request there is cookie information in http request. but, in response cookie information is not present.

![Wireshark Second request/response!](Images/WiresharkSecondRequest.png)

Part c. Performed the session hijacking attack using cookie information.

1. Stealing a cookie information:
Open the chrome browser and hit the URL "localhost/waph-jaindy-session.php". Open console in browser and type document.cookie to get a cookie details.

2. Performing a hijacking attack: Open another browser firefox and hit the URL "localhost/waph-jaindy-session.php" multiple times and enter the copied cookie information in console and hit the url again.

![Session hijacking!](Images/sessionHijacking.png)
![Session hijacking attack!](Images/hijackingAttack.png)


