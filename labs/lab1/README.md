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

# Lab 1 - Foundations of the Web 

## The lab's overview

The goal of Lab 1 is to use Wireshark and telnet to study the HTTP protocol. We set up the most widely used network protocol analyzer in the world, Wireshark, to examine real-time HTTP traffic, record packet data, and monitor network traffic. Application layer protocols like HTTP are used to move files from web servers to web browsers. Explored the telnet client/server protocol for interacting with a distant server. Understand the common gateway interface protocol, which is used to run console programs to communicate with external applications. Installed and explored the PHP programming language, which is used specifically for server-side web development.

Lab1 folder link: [https://github.com/jaindy/waph-jaindy/tree/main/labs/lab1](https://github.com/jaindy/waph-jaindy/tree/main/labs/lab1).


## Part I - The Web and HTTP Protocol

### Task 1. Familiar with the Wireshark tool and HTTP protocol
Wireshark is a network protocol analyzer that captures HTTP request and response from a network connection.
1. Installed Wireshark using $ sudo apt install wireshark-qt
  
![Wireshark Installation!](/Images/WiresharkInstallation.png)

2. After installation verify the version using $ wireshark --version and run the applicaton using $ sudo wireshark &.

![Wireshark Version!](/Images/WiresharkVersion.png)

3. After running the Wireshark application select the interface type "any" and click on start button.

![Wireshark Interface!](/Images/WiresharkInterface.png)

4. Select the first icon to start the live traffic.
5. Open google chrome and hit https://example.com.
6. Once the website loaded, go back to wirestark tool and stop the live traffice.
7. To check only HTTP request and response data, apply filter as "http" in wireshark tool.
   
8. Click on the GET /index.html to check the HTTP Request message and similarly verify the HTTP response message.

![HTTP Request!](/Images/HTTPRequest.png)
![HTTP Response!](/Images/HTTPResponse.png)

9. To check message sent and receive section, right click on packet and select follow-> HTTP stream.

![HTTP Stream!](/Images/HTTPStream.png)


### Task 2. Understanding HTTP using telnet and Wireshark

Telnet is a network protocol that provide a command line interface for communication with server.

1. Start the wireshark network analyzer tool.
2. Send a HTTP request from terminal using command telnet example.com 80.
GET / HTTP/1.0
Host: example.com

3. Press enter key and look for success response in terminal.

![Telnet HTTP Request/Response!](/Images/TelnetRequest.png)

4. Stop the wireshark tool and look for http request and response.c

![Telnet Wireshark HTTP Request!](/Images/TelnetWiresharkHttpReq.png)

![Telnet Wireshark HTTP Response!](/Images/TelnetWiresharkHttpRes.png)


5. Check the HTTP stream message in wireshark tool.
 
![Telnet Wireshark HTTP Stream!](/Images/TelnetWiresharkHTTPstream.png)
 


## Part II - Basic Web Application Programming

### Task 1: Build CGI Web applications in C

 
### Task 2: A simple PHP Web Application with user input

### Task 3: Understanding HTTP GET and POST requests

