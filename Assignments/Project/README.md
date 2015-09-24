##Goal
Student creates their own object oriented MVC project from requirements to release.

It can be a component(Like the A4) or an application that solves a problem for someone.

##Rules

All projects must fulfill the minimum requirements.

Grade is set by the examiner by judging:
 * Requirement fulfillment
 * Code quality
 * MVC implementation
 * Presentation, on GitHub and Oral presentation

###The set of minimum requirements for approved is:
* Solution has been submitted before the deadline
* Code should be available on a public git repository. 
* The application must be deployed on a public web server, the server must be available to the examiner for the rest of the course.
* The Assignment is done individually! You are not allowed to copy or take solutions from others.
* No code is copied from others, student has worked alone
* No external code except the code given in task, no libraries are used
* No javascript is used
* HTML follows [web standards](https://validator.w3.org/)
* Code has one single page (index.php) 
* Your solution will/may be shared with other students after the deadline.

###Requirement fulfillment
 * Requirements are described in vision and Use-Cases
  * Bigger Project -> better grade
  * Complexity -> better grade
  * Solves Users Problem -> better grade
 * The project has tests and fulfills them
 * The application is well tested even outside of the explicit tests
 * Security is considered
 
###Code Quality
 * Code MUST be object oriented.
 * Code looks good
  * Good Understandable identifier naming   
  * [Code is well commented and selfexplanatory](https://www.youtube.com/watch?v=d2nqNtzLEIg)
  * Avoid arrays when dealing with something that is a class.
  * Code follows proper indentation
 * Errors are handled well (assert and exceptions)
 * Code Repository is presented well on git (eg. README.md )
  * Dependencies and described
  * Installation instructions
 * Dependencies are explicit or encapsulated
  * No string dependencies, uses strategies to avoid them
 * Avoid complexity

###MVC implementation
 * Code is separated into Model View Controller components
  * No dependencies from Model to Controller or View
  * No dependencies from View to Controller 
  * Only use $_GET, $_POST, $_COOKIES etc in View-classes
  * No output generation in Model or Controller
  * No View responsibilities in Model or Controller
  * No Model responsibilities in View or Controller
  * No Controller responsibilities in View or Model
  
###Presentation
 * An oral presentation has been done.
