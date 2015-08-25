##Mandatory Testcases

##Test case 4.1, Show Register Form
When user wants to register a registration form should be shown.

###Input:
 * Test Case 1.1 Navigate to site.
 * Press "Register a new user"
 
###Output:
 * The text "Not logged in", is shown.
 * A form for Registration of a new user is shown
 * A button/link with text "Back to login" is shown.

![After Input](http://goo.gl/yKkHn0)

***


##Test case 4.2 Back to login

###Input:
 * Test case 4.1. Show Register Form
 * Click "Back to login"

###Output:
 * No feedback message
 * The text "Not logged in", is shown.
 * Form for login is shown

![After Input](http://goo.gl/B4o438)

***

##Testfall 4.3: Registrera utan uppgifter misslyckas

###Input:
 * Test case 4.1. Show Register Form
 * Click "Register" button without filling in any fields

###Output:
 * Message "Username has too few characters, at least 3 characters. Password has too few characters, at least 6 characters."
 * The text "Not logged in", is shown.
 * Still shows the register form

![After Input](http://goo.gl/8Qo3HX)

