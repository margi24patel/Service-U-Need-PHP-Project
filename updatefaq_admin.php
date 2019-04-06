<?php


echo " <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
    
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";

echo "<!-- Font Awesome -->
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>";
     //Jetal - Custom files
echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
echo "<link rel='stylesheet' href='styles/faqstyle.css'>";

    require_once 'database/Database.php';
    require_once 'database/faq/FAQ.php';
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];

       $db = Database:: getdb();
       $faq = new FAQ();
       $faqs =  $faq->getFAQById($id, $db);

       $question = $faqs->questions;
       $answer = $faqs->answers;
    }

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
     } else {
        echo "problem in updating";
     }



  }

?>
<body>
<!-- header.php -->

  <?php require_once 'body/header.php' ?>



<main id="faq_section">
  <h3>Edit FAQ </h3>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
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
  <?php require_once 'body/footer.php' ?>
</footer>
</body>