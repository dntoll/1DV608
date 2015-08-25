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

***

##Test case 4.4: Register with empty passwords should fail

###Input:
 * Test case 4.1. Show Register Form
 * Enter a valid name with at least 3 characters not entered before like "admina"
 * Click "Register" button 

###Output:
 * Message: "Password has too few characters, at least 6 characters."
 * The text "Not logged in", is shown.
 * Shows the register form with the name filled in.

![After Input](http://goo.gl/oYGvtO) 


***

##Test case 4.5: Register with a short username should fail

###Input:
 * Test case 4.1. Show Register Form
 * Enter an invalid name with 2 characters like "ad"
 * Enter a valid password like "Password"
 * Enter the same repeat password like "Password"
 * Click "Register" button 

###Output:
 * Message: "Username has too few characters, at least 3 characters."
 * The text "Not logged in", is shown.
 * Shows the register form with the name filled in, like "ad".
  
![After Input](http://goo.gl/uB1yNe) 

***

##Test case 4.6: Register with a short password should fail

###Input:
 * Test case 4.1. Show Register Form
 * Enter a valid name with at least 3 characters not entered before like "admina"
 * Enter a invalid password like "Passw"
 * Enter the same repeat password like "Passw"
 * Click "Register" button 

###Output:
 * Message: "Password has too few characters, at least 6 characters."
 * The text "Not logged in", is shown.
 * Shows the register form with the name filled in, like "admina".

![After Input](http://goo.gl/hr1p04) 

***

##Test case 4.7: Register with a different passwords should fail

###Input:
 * Test case 4.1. Show Register Form
 * Enter a valid name with at least 3 characters not entered before like "admina"
 * Enter a valid password like "Password"
 * Enter another valid repeat password like "Losenord"
 * Click "Register" button 

###Output:
 * Message: "Passwords do not match."
 * The text "Not logged in", is shown.
 * Shows the register form with the name filled in, like "admina".

![After Input](http://goo.gl/p1Wt8G) 

***

##Test case 4.8: Register with an existing user fails

###Input:
 * Test case 4.1. Show Register Form
 * Enter a valid name with at least 3 characters that is already registered like "Admin"
 * Enter a valid password like "Password"
 * Enter the same valid repeat password like "Password"
 * Click "Register" button 

###Output:
 * Message: "User exists, pick another username."
 * The text "Not logged in", is shown.
 * Shows the register form with the name filled in, like "Admin".

![After Input](http://goo.gl/3gQoTV) 

***

##Test case 4.9: Register with not allowed characters fails

###Input:
 * Test case 4.1. Show Register Form
 * Enter a username with at least 3 characters and add a html tag around it like, <a>abc</a>
 * Enter a valid password like "Password"
 * Enter the same valid repeat password like "Password"
 * Click "Register" button 

###Output:
 * Message: "Username contains invalid characters."
 * The text "Not logged in", is shown.
 * Shows the register form with the name filled in but without the tag, like "abc".

![After Input](http://goo.gl/3gQoTV) 
 

