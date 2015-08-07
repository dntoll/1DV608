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

For higher grades (> E) :
 * All the requirements from approved...
 * Some or all of the volontary test-cases should be fullfilled.
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
 
## Task 1. Explore requirements and test-cases.

The requirements of the application is written below and consists of three use-cases.

[Use Cases](Assignment2_Use_Cases.md)

For each of the use-cases there are a number of test-cases. The test cases are given in the following format. 
 * Input, steps to do. In some cases another test-case, if so do the input steps of that test-case.
 * Output, things you should observe or not observe if the test-case is successful.
 * Image, an image of the result after Input steps are done.
 
Testing of the application requires two different browsers, and a tool to manipulate cookies, like "firebug".

[Mandatory Test Cases](Assignment2_Test_Cases_Mandatory.md "Mandatory Test-Cases")

[Volontary Test Cases for higher grades](Assignment2_Volontary_Test_cases.md "Volontary Test-Cases for higher grade")

[Test Application](http://csquiz.lnu.se:81/ "Application To test requirements on")

## Task 2. Implement the requirements using interface


