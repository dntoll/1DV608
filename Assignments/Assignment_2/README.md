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

For grade ( >= E) are the following requirements:
 * Code should be available on a public git repository.
 * Code must be object oriented.
 * No code is copied from others
 * Application is submitted before deadline.
 * No external code except the code given in task
 * No javascript
 * HTML follows [web standards](https://validator.w3.org/)
 * The code must be deployed on a public web server
 * Code has been tested with the automated test application.
 * All mandatory test-cases should be manually successful for the assignment to be approved.
 * Examiner sets the degree

For higher grades (>= D) :
 * All the requirements from above...
 * Some (or all) of the extra test-cases should be fullfilled. (the more the better)
 * The application is well tested even outside of the explicit tests
 * Code looks good
  * Good Understandable identifier naming   
  * [Code is well commented and selfexplanatory](https://www.youtube.com/watch?v=d2nqNtzLEIg)
  * Avoid arrays when dealing with something that is a class.
  * Errors are handled well 
 

For even higher grades >= C
 * All of the extra test-cases should be fullfilled. 
 * Code is separated into Model View Controller components
  * No dependencies from Model to Controller or View
  * No dependencies from View to Controller 
  * Only use $_GET, $_POST, $_COOKIES etc in View-classes
  * No output generation in Model or Controller
  * Avoids string dependencies, uses strategies to avoid them
  * Avoid complexity (like several nested if-statements)
 * Code is presented well on git (eg. README.md )
 
For the grade A
 * All the above 
 * Code and presentation is of very good quality
 * No View responsibilities in Model or Controller
 * No Model responsibilities in View or Controller
 * No Controller responsibilities in View or Model
