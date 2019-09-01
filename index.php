<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form validacija</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron text-center">
      <h2>Form validacija</h2>
    </div>
    <div class="container">
      <div class="row">
         <div class="col-6 offset-3">
           <form action="validate.php" method="post">
             <input type="text" name="username" placeholder="username" class="form-control" required><br>
              <input type="email" name="email" placeholder="email" class="form-control" required><br>
            <select name="year">
              <?php for ($i = 1965; $i < 2005; $i++): ?>
               <option value="<?php echo $i; ?>">Year of birth <?php echo $i; ?></option>
              <?php endfor ?>
            </select>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female"> Female <br><br>
            <p>Programming languages</p>
            <input type="checkbox" name="languages[]" value="php"> php
            <input type="checkbox" name="languages[]" value="js"> js
            <input type="checkbox" name="languages[]" value="java"> java
            <button type="submit" name="subBtn" class="btn btn-info form-control">Save</button>
           </form>
         </div>
      </div>
    </div>
  </body>
</html>
