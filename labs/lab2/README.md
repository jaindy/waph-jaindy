# WAPH-jaindy Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Divyani Jain

**Email**: jaindy@mail.uc.edu

**Short-bio**: Work experience of more than 6 years in IT Industry. Specialize in Analysis, Development, Design, Testing, Debugging and Implementation of Web Applications. 

![Divyani Headshot!](/labs/lab2/Images/Divyani_Jain.jpg)

## Repository Information

Respository's URL: [https://github.com/jaindy/waph-jaindy.git](https://github.com/jaindy/waph-jaindy.git)

This is a private repository for divyani Jain to store all code from the course. The organization of this repository is as follows.

# Lab 2 - Front-end Web Development 

## The lab's overview

Lab2 folder link: [https://github.com/jaindy/waph-jaindy/tree/main/labs/lab2](https://github.com/jaindy/waph-jaindy/tree/main/labs/lab2).

## Task 1: Basic HTML with forms, and JavaScript

Part a. HTML

1. Craeted a html file under lab2/waph-jaindy.html.
2. Used basic html tags like heading tags, paragraph tags, input tag to get user data, image tag for displaying image of headshot, form tag to send data using get and post method.

![HTML with Basic tags!](/labs/lab2/Images/Task1_Part_a.png)
![Form with Get Request!](/labs/lab2/Images/GetReq.png)
![Form with Get Response!](/labs/lab2/Images/GetRes.png)
![Form with Post Request!](/labs/lab2/Images/PostReq.png)
![Form with Post Response!](/labs/lab2/Images/PostRes.png)


 
Part b. Javascript

1. Inline JavaScript code in HTML tags to display the current date/time when clicked (2 pts) and to log when a key is pressed (2 pts).

![Current Date!](/labs/lab2/Images/DateDisplay.png)
![Current Date!](/labs/lab2/Images/ShowDateFunction.png)

![Press Key!](/labs/lab2/Images/PressKey.png)

2. Internal JavaScript code to display a digital clock

![Digital clock!](/labs/lab2/Images/DigitalClock.png)

3. JavaScript code to show/hide your email when clicked

![Show Email!](/labs/lab2/Images/ShowEmail.png)

![Hide Email!](/labs/lab2/Images/HideEmail.png)

4. Display an analog clock using an external JavaScript

![Analog Clock!](/labs/lab2/Images/AnalogClock.png)

## Task 2: Ajax, CSS, jQuery, and Web API integration
a. Ajax
![Ajax Code!](/labs/lab2/Images/AjaxCodewithUI.png)
![Ajax request/response!](/labs/lab2/Images/Ajax_bowser.png)

b. CSS (Cascading Style Sheets):
CSS is used to style and layout web pages. CSS can be added to HTML elements in 3 ways Inline, Internal and External.
Inline CSS: style attribute is used in HTML elements.

![Inline CSS!](/labs/lab2/Images/InlineCSS.png)

Internal CSS: style Tag is used in head section. you can access class using dot and id using #.

![Internal CSS!](/labs/lab2/Images/InternalCSS.png)

External CSS: Using external css file. link tag is used to apply external CSS.

![External CSS!](/labs/lab2/Images/ExternalCSS.png)

c. jQuery 
1. When the button is clicked, send an Ajax GET request to the echo.php web application and display the response content.
   
![Jquery Get request!](/labs/lab2/Images/JqueryGet.png)

2. when the corresponding button is clicked, send an Ajax POST request to the echo.php web application and display the response content.
   
![Jquery Post request!](/labs/lab2/Images/JqueryPost.png)

d. Web API integration

1. Integrating WEBAPI to a webpage and displaying the response using AJAX. JSON object values can be accessed using dot (.) or bracket ([]) notation. Used Ajax to send a request and print out the result from the server in the console.
   
API: https://v2.jokeapi.dev/joke/Programming?type=single

![Joke API code!](/labs/lab2/Images/jokeApi.png)
![Joke API code!](/labs/lab2/Images/JokeAPIRequest.png)
![Joke API code!](/labs/lab2/Images/JokeAPIResponse.png)


2. Integrating with a third-party Web API with user input using fetch()
   
The global fetch() method starts the process of fetching a resource from the network, returning a promise that is fulfilled once the response is available. It is an asynchronous function. await must be used within an asynchronous function.
Web API return response in Json format which is easy to read.

Used existing user input field and call a function when user click on button.

![Fetch API Code!](/labs/lab2/Images/GuessAgeFetchAPI.png)

Inspect the network tab in the browser to examine the request and response.

![Fetch API Request!](/labs/lab2/Images/FetchRequest.png)
![Fetch API Response!](/labs/lab2/Images/FetchResponse.png)
