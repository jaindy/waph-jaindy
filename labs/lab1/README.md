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
2. Established a connection to port 80 on a serve using command telnet example.com 80.
3. Send a HTTP request from terminal and press enter. The very first line is called the start-line of the HTTP request where GET is a method and 1.0 is a HTTP version. Next line is a header which tells send host to specific server example.com.
   
Type below command->
GET / HTTP/1.0
Host: example.com

Press enter key and look for success response in terminal. There are 3 parts to a response start-line which says status is Ok, headers then the body which is html data format. 

4. Stop the wireshark tool and look for http request and response.
   
### Part a. Terminal showing HTTP request and response.

![Telnet HTTP Request/Response!](/Images/TelnetRequest.png)


### Part b. Based on compariosn between HTTP request in telnet and in browser in task 1.

Telnet request contains status line and one header Host field. Browser request contains status line and multiple header fields. 

![Telnet Wireshark HTTP Request!](/Images/TelnetWiresharkHttpreq.png)


### Part c. Based on compariosn between HTTP response in telnet and in browser in task 1.

Telnet response contain html data in body and have additional header field like connection close. In browser, body part is missing.

![Telnet Wireshark HTTP Response!](/Images/TelnetWiresharkHttpRes.png)


Check the HTTP stream message in wireshark tool.
 
![Telnet Wireshark HTTP Stream!](/Images/TelnetWiresharkHTTPstream.png)
 

## Part II - Basic Web Application Programming

### Task 1: Part a. Build CGI Web applications in C

Common gateway interface is a standard protocol that communicate web servers with external applications by executing console programs. It can be written in any programming lanuage that can be executed by server. First CGI application was developed in C.

1. Create a new file helloworld.c and write code to print helloworld in browser.

2. Install GCC compliler and run GCC command to run the helloworld program.
3. Need to enable CGI for apache2 on Ubuntu ($ sudo a2enmod cgid) and then restart apache server ($ sudo systemctl restart apache2).
4. To deploy the CGI programs place the copy of your pragram file in path-> /usr/lib/cgi-bin

![CGI Helloworld application!](/Images/FirstCGIApp.png)


### Part b. Build CGI application to pring HTML content

1. Created Index.c file in lab1 folder.
2. Write HTML code that has title, body and paragraph and print instuctor, student details.

![HTML code!](/Images/htmlcode.png)

3. Complile and deploy the code to see output in browser.
   
![CGI with HTML application!](/Images/CGIwithHTML.png)
 
### Task 2: A simple PHP Web Application with user input
### Part a.
Personal Home Page is a scripting language used to develop server-side web applications. PHP programs are written in PHP with HTML. These programs are executed by interpreter inside webserver. It is open source and support MYSQL database.
Install PHP using command $ sudo apt-get install php libapache2-mod-php -y

1. Create a new php file inside lab1 folder.
2. Write code to print the string in the browser.

![PHP code](/Images/PHPCode.png)

3. Deploy the code to the webserver Root directory using command-> $ sudo cp helloworld.php /var/www/html

![PHP Application](/Images/FirstPHP.png)

### Part b. 

Created new echo.php file to read request data. Using $_REQUEST is not secure because requested data is visible in URL.

![PHP echo application](/Images/EchoApp.png)

### Task 3: Understanding HTTP GET and POST requests

### Part a. Examine HTTP Get and POST data in wireshark for echo.php.

Below steps are follow to check Get and Post data in wireshark. 
1. Deploy and run the echo.php file in apache server.
2. Start the wireshark to capture the request and response.
3. Check the output in google chrome using http://localhost/echo.php.
4. Stop the wireshark tool.
5. Look for http data.
    
![Wireshark GET](/Images/GetData.png)
![Wireshark POST](/Images/PostData.png)
![Wireshark Stream](/Images/StreamData.png)

### Part b. Using curl sending post request.

Using $_REQUEST is not secure because requested data is visible in URL. To send input request with http post, We will use curl command and send data from terminal.
 
![Wireshark Curl post](/Images/Curlpost.png)

### Part c. Similarity/difference between HTTP POST Request and HTTP GET Request

When sending data, the GET method adds the data to the URL. When sending data from Post request input data is not visible in URL.
Only required headers are visible in http stream when sending data through post request. Curl provide more security from hacking.

