<?php
    require_once 'database/Database.php';
    require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/class/FAQ.php');
    //get information from submitted form
    if(isset($_POST['id']))
    {
       $id = $_POST['id'];

       $db = Database:: getdb();
       $faq = new FAQ();
       $faqs =  $faq->getFAQById($id, $db);

       $question = $faqs->questions;
       $answer = $faqs->answers;
    }
   //get information from submitted update form
  if(isset($_POST['editfaq']))
   {
     $id = $_POST['faqid'];
     $editquestion = $_POST['question'];
     $editanswer = $_POST['answer'];

     $db = Database::getdb();
     $editfaq = new FAQ();
     $editfaqs =  $editfaq->updateFAQ($id,$editquestion,$editanswer, $db);

     if($editfaqs){
       header('Location:listfaqs_admin.php');
      } 
     else {
        echo "problem in updating";
       }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Update FAQ</title>
  <meta charset="utf-8">
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
  <link rel='stylesheet' href='styles/faqstyle.css'>
</head>
<body class="container" style="padding-left: 0px;
padding-right: 0px; margin: 0 auto; width: 1200px;">
<!-- header.php -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/project-merj-2019/body/header.php'); ?>

<main id="faq_section">
  <h3>Edit FAQ </h3>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="" method="post">
          <div class="form-group">
            <input type="hidden" name="faqid" value="<?= $id; ?>" />
            <label>FAQ Question</label>
            <input type="text" class="form-control" id="faqquestion" name="question" value="<?=$question?>">
            <label>FAQ Answer</label>
            <input type="text" class="form-control" id="faqanswer" name="answer" value="<?=$answer?>">
            <button class="btn btn-primary" name="editfaq">SUBMIT</button>
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