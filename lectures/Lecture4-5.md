##Documentation

The @tags I use is from http://www.phpdoc.org/ phpDocumentor allows us to tag inportant information like return values and parameters in comments

##Controllers

* Handle high-level input from the views (logical input in the form of model object and booleans), NOT $_GET, $_POST.
* Controller makes state-changing calls to model.
* Selects views for rendering according to use-case

##Views 

* Produce HTML output from model objects
* Translate from low level input to high level input. Reads in $_GET and returns model objects or booleans.
* May have read-only access of model (no state-changes).
* May create model objects that do not change the state of the application.
* May have view state (messages that persist between calls)

##Model classes

* Encapulate domain rules.
* Validation happens in model constructors, throws exceptions if error is going to be handled. assert if it is a "programmers error".
* Handle state and state-changes.
* May not create HTML, output or read from $_COOKIES, $_GET, $_COOKIE etc...
* May interact with $_SESSION, files, databases etc to enable state
* May read from $_SERVER but that is a border case... some information in $_SERVER could be handled by view instead...
