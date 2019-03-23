<!DOCTYPE html>
<html>
<head>
	<title>Service U Need</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="styles/chatstyle.css">	
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
<!-- header.php -->

	<?php require_once 'body/header.php' ?>

<!-- main.php -->
<main>
	<!-- <button class="open-button" onclick="openForm()">Chat</button> -->
	<input type="image" src="images/chaticon.gif" class="chat-button" alt="Submit" onclick="openForm()">

	<div class="chat-popup" id="myForm">
	  <form action="" class="form-container">
	    <h1>Chat</h1>

	    <label for="msg"><b>Message</b></label>
	    <textarea placeholder="Type message.." name="msg" required></textarea>

	    <button type="submit" class="btn">Send</button>
	    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	  </form>
	</div>
</main>
<!-- footer.php -->
<footer>
	<?php require_once 'body/footer.php' ?>
</footer>
<script type="text/javascript" src="script/chat.js"></script>
</body>
</html>