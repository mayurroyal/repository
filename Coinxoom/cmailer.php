<?php 
/***
**
** A simple script to send mails through php with validation.
** @Author: Amit Siddhu
** @Version: 1.0
**
***/

class Cmailer
{

	private $to;
	private $from;
	private $subject;
	private $message;
	private $headers;

	private $errors = array();
	
	private $amount;
	private $UserName;
	private $Email;
	private $Link;
	
	private $query;
	
	function __construct($postdata,$to)
	{
		extract($postdata);
	

		$this->fname = stripslashes(trim($amount));
		
		$this->lname = stripslashes(trim($UserName));
		
		$this->city = stripslashes(trim($Email));
		
		$this->state = stripslashes(trim($Link));
		
		
		if($this->validateInput())
		{

			$this->setTo($to);

			$this->setFrom("webmaster@".preg_replace('/(www.)/','',$_SERVER[SERVER_NAME]));

			$this->setSubject("$this->fname $this->lname submitted contact form on $_SERVER[HTTP_HOST]");

			$this->setheader('MIME-Version: 1.0' . "\r\n".'Content-type: text/html; charset=iso-8859-1' . "\r\n"."From: $this->fname $this->lname <$this->from>\r\n");

			$this->setMessage($this->generateMessage());

			

			$this->sendMail();	

		}

	}

	

	private function setTo($to)

	{

		$this->to = $to;	

	}

	

	private function setFrom($from)

	{

		$this->from = $from;	

	}

	

	private function setSubject($subject)

	{

		$this->subject = $subject;	

	}

	

	private function setMessage($message)

	{

		$this->message = $message;	

	}

	

	private function setHeader($header)

	{

		$this->headers = $header;	

	}

	
  /*
	private function validateInput()
	{

		if (!preg_match('/^[a-zA-Z]{3,15}$/', $this->fname) || $this->fname == '') {

      		$this->errors['First Name'] = "Invalid First Name.";

    	}

		if (!preg_match('/^[a-zA-Z]{3,15}$/', $this->lname) || $this->lname == '') {

      		$this->errors['Last Name'] = "Invalid Last Name.";

    	}
		
		if (!preg_match('/^[a-zA-Z\s]{2,25}$/', $this->city) || $this->city == '') {

      		$this->errors['City'] = "Invalid City.";

    	}
		
		if (!preg_match('/^[a-zA-Z\s]{2,25}$/', $this->state) || $this->state == '') {

      		$this->errors['State'] = "Invalid State.";

    	}

		if (!preg_match('/^[A-Za-z0-9\s(\&amp;)\&\-\_\\+\#]{1,12}$/', $this->pin) || $this->pin == '') {

      		$this->errors['Zip'] = "Invalid Zip Code.";

    	}
				

		if (!preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $this->email)) {

      		$this->errors['Email'] = "Invalid email address.";

    	}


		if (!preg_match('/[0-9\s\-\+]{6,15}/', $this->btr) || $this->btr == '') {

      		$this->errors['Phone'] = "Invalid Phone Number.";

    	}


		if (!preg_match('/[\w\s]{3,50}/', $this->btc) || $this->btc == '') {

      		$this->errors['Best Time'] = "Invalid Input.";

    	}

		if (!preg_match('/[\w\s]{3,50}/', $this->query) || $this->query == '') {

      		$this->errors['Message'] = "Invalid Input (Max 50 alphabets).";

    	}

		

		if (!$this->errors) {

	  		return true;

		} else {

	  		return false;

		}

				

	}  */

	
	

	private function sendMail()

	{

		mail($this->to,$this->subject,$this->message,$this->headers);

	}

	

}



?>
