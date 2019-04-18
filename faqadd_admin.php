<?php

    require_once 'database/Database.php';
    require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/FAQ.php');
  //Get information from the form when form submitted
  if(isset($_POST['submit']))
  {
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $db = Database:: getdb();
    $faq = new FAQ();
    $addedfaq = $faq->addFAQ($question,$answer,$db);
    
    if($addedfaq){
      header('Location:listfaqs_admin.php');// Go to the list of faq page.
    }
    else{
      echo "problem adding a student";
    }

  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>FAQ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/styleAdmin.css">
  <script src="javascript/script.js"></script>
  <script src="javascript/scriptAdmin.js"></script>
  <link rel='stylesheet' type='text/css' href='styles/faqstyle.css'>
</head>

<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
<!-- header.php -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>

<main id="faq_section">
  <h3>Add FAQ question answer</h3>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="" method="post">
          <div class="form-group">
            <label>FAQ Question</label>
            <input type="text" class="form-control" id="faqquestion" name="question" required>
            <label>FAQ Answer</label>
            <input type="text" class="form-control" id="faqanswer" name="answer" required>
            <button class="btn btn-primary" name="submit">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<footer>
  <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/footer.php'); ?>

</footer>
</body>
</html>