<?php 
  include_once("templates/header.php");
  include_once("config/connection.php");
  include_once("config/process.php");

?>

<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  
  <h1 id="main-title">Create Contact</h1>
  <form id="create-form" action="config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
      <label for="name">Contact name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Type the name." required>
    </div>
    <div class="form-group">
      <label for="phone">Contact phone:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Type the phone." required>
    </div>
    <div class="form-group">
      <label for="email">Contact email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Type the email." required>
    </div>
    <div class="form-group">
      <label for="observation">Any obervation ?(Optional)</label>
      <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Type the observation." rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

<?php 
  include_once("templates/footer.php");
?>