This task should be done by students who did not complete A4 or did not get approved on examination of A4.

## A persistent log-system
Being able to understand what happens when code runs on a public webserver is vital to monitor and debug an application.

A log-library collects log events from code. For example a log could show that someone attempts to brute force login or that customers starts but never completes a purchase. Or that some error occured that we cannot handle.

For example in code below an exception is thrown but since this happens to a customer we do not get any information that it happened.
public function buyItemsInCart($shoppingCart) {
'''	$order = new \model\Order($shoppingCart);
	try {
$this->orderDAL->saveOrder($order);
return true;
	} catch (Exception $e) {
		logThis("An order failed ", $e);
		return false;
}
}'''
If the log is saved persistently we can inspect that log later and find out why the orders was not saved..

The current version of the code library only collects information about the last request.
https://github.com/dntoll/phpLoggerLib

### Task 1. Add a persistent storage to store messages on the server for the following log library. 

### Task 2. Add a log manager (controller) to a log library that allows a site administrator to view, and navigate to code log traces.

The traces should be categorized by ip address and session and ordered by time.

#### UC0. Add a log item 
Programmer wants to add a log message to the code
 * System presents a simple interface for logging
 * Programmer uses a method in the interface to log a message.
 * System stores the message in a log item each time the method is called.

#### UC1. View all ip-addresses
Administrator wants to see all logs by ip-address
 * System presents a list of ip-addresses and how many sessions each ip-address has had sorted by time of last trace for that IP-address.

#### UC2. View all sessions from an ip-address
Administrator wants to see all HTTP-sessions from an ip-address.
 * UC1. 
 * Administrator selects an IP-address from the list
 * System presents all recorded sessions from that log-trace ordered by time

#### UC3. View all traces from a session
Administrator wants to see all traces from a specific session.
 * UC2. 
 * Administrator selects a session from the list
 * System presents a list of all log items in each requests in that session ordered by time
