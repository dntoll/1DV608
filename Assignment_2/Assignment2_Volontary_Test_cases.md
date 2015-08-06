#Testcases

##Test case 3.1, Login with "Keep me logged in" 
Normal navigation to page, page is shown.


###Input:
 * Clear existing cookies
 * Navigate to site.
 * Test case 1.1 Navigate to page
 * Enter Username "Admin"
 * Enter Password "Password"
 * Select "Keep me logged in"
 
###Output:
 * The text "Logged in", is shown.
 * The feedback "Welcome and you will be remembered" is shown
 * A logout button is shown
 * Client has cookies for username and password, username is "Admin", password is a random string, unreadable
 
![After Input](loginwithkeep.png)
![After Input](cookies.png)

##Test case 3.2, Reload removes feedback

###Input:
 * Test case 3.1
 * Reload page
 
###Output:
 * The text "Logged in", is shown.
 * No feedback is shown
 * A logout button is shown
 * Client has cookies for username and password, username is "Admin", password is a random string, unreadable
 
![After Input](StillLoggedIn.png)
![After Input](cookies.png)
