## View input and validations

#### Example UserPicker

write from beginning

### Input validation and filtration
Abstract: View as a layer against the user

When to use $_GET? 
Bookmarks, shares, 

But GET is easy to manipulate

What about $_POST?
Large uploads, which we do not want to resubmit.
For user benefit-hidden input (you do not need to know)

What about $_COOKIE?
 * http://php.net/manual/en/features.cookies.php 

What about $_FILES?

### Session and state on the web

Session on multiple servers?

###How to send stuff that is not simple text...
 * To place something in an URL: http://se.php.net/manual/en/function.urlencode.php
 * To decode the same... http://se.php.net/manual/en/function.urldecode.php
 * To transfer safe: http://se.php.net/manual/en/function.base64-encode.php
 * To decode the same... http://se.php.net/manual/en/function.base64-decode.php
 * To encode to json http://php.net/manual/en/function.json-encode.php
 * To decode the same... http://php.net/manual/en/function.json-decode.php

####General problem
Wrong input leads to erroneus states
Erroneous wrong state leads to faults

Why wrong input?
Swedish social security numbers may be written in many ways
 * 19801212-1234
 * 198012121234
 * 801212-1234 <- standard
 * 8012121234

But did you know that the following is a correct format
 * 011212+1234

Filters help people do the right thing.
 * Negative filtration (remove [';=])
 * Positive filtration (allow [a-z][A-Z][0-9]
 * Perl Compatible Regular Expressions (PCRE): http://se.php.net/manual/en/ref.pcre.php
 * PHP also has some ready made filters: http://se.php.net/manual/en/function.filter-var.php
 
What about Javascript validation & filters?
Moving validation closer to the user results in quicker feedback and better input!

BUT client data can be manipulated, since clients can be replaced. So all input must be validated.


####Deliberate attacks
 * SQL-injections 
  * What is SQL-injections: http://www.w3schools.com/sql/sql_injection.asp 
  * Do use parameterized questions: https://en.wikipedia.org/wiki/SQL_injection#Using_Parameterized_Statements
  * MySQLi supports parameterized questions: http://php.net/manual/en/book.mysqli.php
  * Bind param in PDO: http://php.net/manual/en/pdostatement.bindparam.php
  * Filter using regular expressions: http://php.net/manual/en/function.preg-match.php
  * Several db users with different rights (maybe one for write, and another one for read, and no DROP TABLE)
   

Javascript injections
 * HTML-code 
  * http://se.php.net/htmlentities%20
  * http://se.php.net/manual/en/function.addslashes.php 
  * http://se.php.net/manual/en/function.stripslashes.php
 * Bots




http://se.php.net/manual/en/function.urlencode.php 