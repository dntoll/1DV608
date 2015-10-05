## Assignment 2 Extra task for reexamination of A2

This task is for those students who failed to complete A2 in time or did not get approved.

The task is in many ways not the same as A2, no manual tests or automatic tests are available.

The requirements of A2 is not by themselves included in this task but a login solution must be used. 
You may for that use the teachers solution.

### Requirement specification 
Implement "the sticks-game" in PHP-MVC. 

To access the game, players needs to login. You can use the login solution provided by the teacher or your own login solution. Registration of users is not required.
Example application: http://echobase.freeiz.com/

#### Sticks Game rules
 * The game starts with 22 sticks
 * The human-player starts and draws 1-3 sticks
 * The computer-player draws 1-3 sticks 
 * The player who is forced to draw the last stick looses.
 * The computer player should do an optimal play.

## Rules
Examiner sets the degree using the following:
 * Minimum requirements must all be fulfilled
 * Code quality
 * MVC implementation


###The set of minimum requirements for approved is:
* The output is as the example application, except with the registration that is not included.
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
 * Application works as the example implementation

###Code Quality
 * Code MUST be object oriented.
 * Code looks good
  * Good Understandable identifier naming   
  * [Code is well commented and selfexplanatory](https://www.youtube.com/watch?v=d2nqNtzLEIg)
  * Avoid arrays when dealing with something that is a class.
  * Code follows proper indentation
 * Errors are handled well (assert and exceptions)
 * Code Repository is presented well on git (eg. README.md )
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
