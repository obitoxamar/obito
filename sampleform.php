<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" action="new.php">
<p>
<label for="Name">Name </label>
<input type="text" name="name" id="name">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="email" id="email">
</p>
<p>
<label for="phone">Phone</label>
<input type="text" name="phone" id="phone">
</p>
<p>
<label for="message">Message</label>
<textarea name="text" id="text"></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>