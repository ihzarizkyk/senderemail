<!DOCTYPE html>
<html>
<head>
	<title>Send Email - ihzarizkyk</title>
</head>
<body>

<h1>Send Email Gmail - ihzarizkyk</h1>
<br>

<form action="<?= base_url().'Send_Email/send'; ?>" method="post">

	<label>
		Subject :
	</label>
	<br>
	<input type="text" name="subject" required>
	<br><br>
	<label>
		Message :
	</label>
	<br>
	<textarea name="message" required></textarea>
	<br><br>
	<label>
		To :
	</label>
	<br>
	<input type="text" name="to" required>
	<br><br>
	<input type="submit" name="kirim" required>
	
</form>

</body>
</html>