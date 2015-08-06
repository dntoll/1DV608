#Testcases

##Test case 1.1, Navigate to Page 
Normal navigation to page, page is shown.

Todays date is shown as: [Day of week], the [day of month numeric]th of [Month as text] [year 4 digits]. The time is [Hour]:[minutes]:[Seconds].
Example: "Monday, the 8th of July 2015, The time is 10:59:21".

###Input:
 * Clear existing cookies
 * Navigate to site.
 
###Output:
 * The text "Not logged in", is shown.
 * A form for login is shown
 * Todays date and time is shown in correct format.

##Test case 1.2: Failed login without any entered fields
Make sure login cannot happen without entering any fields

###Input:
 * Testcase 1.1
 * Make sure both username and password is empty
 * Press "login" button
 
###Output:
 * The text "Not logged in", is shown.
 * Feedback: “Username is missing” is shown
 * A form for login is shown

![After Input](notLoggedIn.png)

##Test case 1.2: Failed login without any entered fields
Make sure login cannot happen without entering any fields

###Input:
 * Testcase 1.1
 * Make sure both username and password is empty
 * Press "login" button
 
###Output:
 * The text "Not logged in", is shown.
 * Feedback: “Username is missing” is shown
 * A form for login is shown.

![After Input](usernameIsMissing.png)
