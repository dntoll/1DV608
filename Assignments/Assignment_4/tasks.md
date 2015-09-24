
## Task 1. Explore requirements, example application, and test-cases.

The requirements of the application is written below and consists of four use-cases.

[Use Cases from A2](https://github.com/dntoll/1DV608/blob/master/Assignments/Assignment_2/Assignment2_Use_Cases.md "Assignment 2 use-cases")
[New Use Cases](https://github.com/dntoll/1DV608/blob/master/Assignments/Assignment_4/UC4.md "Assignment 4 use-cases")

For each of the use-cases there are a number of test-cases. The test cases are given in the following format. 
 * Input, steps to do. In some cases another test-case, if so do the input steps of that test-case.
 * Output, things you should observe or not observe if the test-case is successful.
 * Image, an image of the result after Input steps are done.
 
Testing of the application requires two different browsers, and a tool to manipulate cookies, like "firebug".

[Mandatory Test Cases](https://github.com/dntoll/1DV608/blob/master/Assignments/Assignment_4/TestCases.md "Mandatory Test-Cases"), These are the requirements everyones solutions must fullfill all of.
[Mandatory Test Cases from A2](https://github.com/dntoll/1DV608/blob/master/Assignments/Assignment_2/Assignment2_Test_Cases_Mandatory.md "Mandatory Test-Cases from A2"), Your solution must still fulfill the TC from A2!.

[Extra Test Cases for higher grades](https://github.com/dntoll/1DV608/blob/master/Assignments/Assignment_2/Assignment2_Extra_Test_cases.md "Extra Test-Cases for higher grade") The extra TCs for higher grades still applies from A2.

[Test Application](http://csquiz.lnu.se:81/ "Application To test requirements on"). This is an example solution for assignment 4. It fulfills all the test-cases above.

[Automated tests Application](http://csquiz.lnu.se:83/ "Application To test your on"). This is an automated acceptance test system to speed up the testing process. 

## Task 2. Copy the code and get your servers set up.

Now its time to implement the requirements using use-cases and test-cases.



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

###Task 3. Implement the requirements.

 * while (you have requirements to implement)
  * Implement a requirement
  * Test locally using the manual test-cases
  * Commit and push to repository
 * Release code to server
  * Go to http://csquiz.lnu.se:82/ and enter your server adress with your user-id
  * Fix problems locally, then release to server and retest

## Assignment submission

 * Commit and push to GitHub
 * Upload latest version on public server
 * Run http://csquiz.lnu.se:82/ against your public server
 * Fill in the submission form here: http://goo.gl/forms/VaDElVp4x5
