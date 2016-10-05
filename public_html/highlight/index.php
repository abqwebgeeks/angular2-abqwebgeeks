<?php
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");
require_once(dirname(__DIR__, 2) . "/php/lib/xsrf.php");

// start the session and create a XSRF token
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

// prepare an empty reply
$reply = new stdClass();
$reply->status = 200;
$reply->data = null;

try {
	// determine which HTTP method was used
	$method = array_key_exists("HTTP_X_HTTP_METHOD", $_SERVER) ? $_SERVER["HTTP_X_HTTP_METHOD"] : $_SERVER["REQUEST_METHOD"];
	// sanitize the file name
	$filename = filter_input(INPUT_GET, "filename", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($filename) === true) {
		throw(new RuntimeException("file name is required"));
	}
	if(preg_match("/^[a-z\-]+\.[jt]s$/", $filename) !== 1) {
		throw(new RuntimeException("file not found", 404));
	}
	$filename = dirname(__DIR__, 2) . "/code-samples/$filename";
	if(file_exists($filename) === false) {
		throw(new RuntimeException("file not found", 404));
	}

	if($method === "GET") {
		// set an XSRF cookie on GET requests
		setXsrfCookie("/");
		$content = file_get_contents($filename);

		$highlighter = new Highlight\Highlighter();
		$highlighter->setAutodetectLanguages(["apache", "css", "javascript", "php", "sql", "typescript", "xml"]);
		$highlighted = $highlighter->highlightAuto($content);

		$output = "<pre><code class=\"hljs " . $highlighted->language . "\">" . $highlighted->value . "</code></pre>";
		$reply->data = $output;
	} else {
		throw(new RuntimeException("only GET is supported", 405));
	}
// create an exception to pass back to the RESTful caller
} catch(Exception $exception) {
	$reply->status = $exception->getCode();
	$reply->message = $exception->getMessage();
}
header("Content-type: application/json");
if($reply->data === null) {
	unset($reply->data);
}
echo json_encode($reply);
