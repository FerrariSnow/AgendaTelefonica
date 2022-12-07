<?php 
  include_once("templates/header.php");
  include_once("config/connection.php");
  include_once("config/process.php");

?>

<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  
  <h1 id="main-title">Edit Contact</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="update">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Type the name." value="<?= $contact['name'] ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Type the phone." value="<?= $contact['phone'] ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Type the email." value="<?= $contact['email'] ?>" required>
    </div>
    <div class="form-group">
      <label for="observation">Obervation:(Optional)</label>
      <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Type the observation." rows="3"><?= $contact['observation'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<?php 
  include_once("templates/footer.php");
?>