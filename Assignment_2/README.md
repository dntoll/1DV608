#Assignment 2, Login

##Goals

Assignment 2 aims to let you work with real tools, requirements, tests and release a web application on a public server.

After completing the assignment the student should have...
 * ...worked with tools and servers
 * ...read and successfully implemented requirements with PHP
 * ...tested those requirements carefully.
 * ...created an application with functionality similar to the example application.
 
## Rules
The Assignment is done individually! You are not allowed to copy or take solutions from others.

Your solution will/may be shared with other students after the deadline.

For approval are the following requirements:
 * Code should be available on a public git repository.
 * Code must be object oriented.
 * The code must be deployed on a public web server
 * All mandatory test-cases should be successful for the assignment to be approved.
 * No code is copied from others
 * Application is submitted before deadline.

For higher grades (> E) :
 * All the requirements from approved...
 * Some or all of the extra test-cases should be fullfilled.
 * The application is well tested even outside of the explicit tests
 * Code looks good
  * Code is well commented
  * Avoid complexity (like several nested if-statements)
  * Avoid string dependencies
  * Avoid arrays when dealing with something that is a class.
  * Good Understandable identifier naming 
  * Errors are handled well 
 * Code is separated into Model View Controller components
  * No dependencies from Model to Controller or View
  * No dependencies from View to Controller 
  * Only use $_GET, $_POST, $_COOKIES etc in View-classes
  * No output generation in Model or Controller
 * Code is presented well on git (eg. README.md )
 
## Task 1. Explore requirements, example application, and test-cases.

The requirements of the application is written below and consists of three use-cases.

[Use Cases](Assignment2_Use_Cases.md, "Assignment 2 use-cases")

For each of the use-cases there are a number of test-cases. The test cases are given in the following format. 
 * Input, steps to do. In some cases another test-case, if so do the input steps of that test-case.
 * Output, things you should observe or not observe if the test-case is successful.
 * Image, an image of the result after Input steps are done.
 
Testing of the application requires two different browsers, and a tool to manipulate cookies, like "firebug".

[Mandatory Test Cases](Assignment2_Test_Cases_Mandatory.md "Mandatory Test-Cases")

[Extra Test Cases for higher grades](Assignment2_Extra_Test_cases.md "Extra Test-Cases for higher grade")

[Test Application](http://csquiz.lnu.se:81/ "Application To test requirements on")

[Automated tests Application](http://csquiz.lnu.se:82/ "Application To test your on")

## Task 2. Copy the code and get your servers set up.

Now its time to implement the requirements using use-cases and test-cases.


### Get the startup code
The assignment will be tested using a Automated unit test application. To allow this we will first copy the interface application for that project on GitHub. 

 * Download https://github.com/dntoll/Login_1DV608/archive/master.zip (We do NOT fork since, forks will be public)
 * On your GitHub account, create a new repository
 * Clone that repository 
 * Add the content of the zip file to your repository, commit and push to origin master
  * Unzip the files into your repository 
  * git add -A .
  * git commit -m "first commit"
  * git push origin master
 * Browse your files on github You should now have a similar content as https://github.com/dntoll/Login_1DV608/

### Get the startup code running locally

You are going to develop locally and make "releases" to a public server. This means you need to setup both a local server and a public server.

 * Startup your local server and configure it to use your copy of Login_1DV608
 * browse to local server(For example http://localhost:8080/ ) and check that you see the correct output with a header of "Assignment 2".

### Make a release to a public web server

In order to hand in this project you must have a public web-server that is online 24-7. There are many possible solutions
 * you could host yourself if you have a public IP-adress and wants to keep a server up and running
 * you could buy hosting from a web-hotel
 * you could use a free hosting such as http://www.000webhost.com/ (PHP 5.2)

Test your release
 * Transfer your files to the server, for example by FTP, SFTP, or git.
 * Browse to the server and make sure you see the output of the PHP-scripts
 * Go to http://csquiz.lnu.se:82/ and enter your server adress with your user-id
  * press Check
  * you should get a "Estimated score on assignment: 5%." and a LOT of errors




## Assignment submission


