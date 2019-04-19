
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript" src="script/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="styles/chatstyle.css">	
  <link rel="stylesheet" href="styles/style.css">

</head>

<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
<!-- header.php -->

<!-- header -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>


<!-- main -->
<main>
	<!-- <button class="open-button" onclick="openForm()">Chat</button> -->
	
	<input type="image" src="images/chaticon.gif" class="chat-button" alt="Submit" onclick="openForm()">

	<div class="chat-popup" id="myForm">
	  <form action="" class="form-container">
	    <h1>Chat</h1>

	    <label for="msg"><b>Message</b></label>
	    <div class="log" name="msg">
	    	<div class="panelContainer"><!-- 1ST PANEL-->
				<?php
		          require_once 'database/Database.php';
		          require_once 'database/faq/FAQ.php';

		          $db = Database:: getdb();
		          $faq = new FAQ();
		          $faqs =  $faq->getAllFAQs($db);


		          foreach($faqs as $addedfaq)
		           {//print question and answer.
		             echo  '<h3>'.  $addedfaq->questions.'</h3>'."<p class='contentBox'>". $addedfaq->answers .'</li>' ;
		            }
		        ?>
			</div>

	    </div>

	    <!--button type="submit" class="btn">Send</button-->
	    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	  </form>
	</div>
</main>

<!-- footer -->
<footer>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>
</footer>
<script type="text/javascript" src="script/chat.js"></script>
</body>
</html>