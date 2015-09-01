##Lecture 1. HTTP, PHP, Tools, Dev

###HTTP

Pipes, Sockets, Ports, Protocols, HTTP

![](http://www.consumerwatchdog.org/sites/default/files/images/keystonepipeline.jpg)


####HTTP Request
http://www.jmarshall.com/easy/http/
----------------------------------
GET index.php HTTP/1.0
User-Agent: HTTPTool/1.0

----------------------------------

####HTTP Response
----------------------------------
HTTP/1.0 200 OK
Date: Fri, 31 Dec 1999 23:59:59 GM
Content-Length: 14
Content-Type: Text/HTML

<html></html>
----------------------------------

#### Cookies and the header
Session PHPSESSID

### Input & View

####Server(PHP) to browser
HTML, Javascript, Images, CSS, URL, setcookie-headers, status code(200 OK)

####Browser to server(PHP)
url, post, cookies, file-upload

ajax

### Input validation and filtration
View as a layer against 