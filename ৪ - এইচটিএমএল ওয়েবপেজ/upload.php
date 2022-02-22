<?php
$allowTypes = [
  'image/png',
  'image/jpeg',
  'image/jpg'
];
if ($_FILES['photo']) {
  $totalFils = count($_FILES['photo']['name']);
  for ($i = 0; $i < $totalFils; $i++) {
    if (in_array($_FILES['photo']['type'][$i], $allowTypes) !== false && $_FILES['photo']['size'][$i] < 5 * 1024 * 1024) {
      move_uploaded_file($_FILES['photo']['tmp_name'][$i], 'files/' . $_FILES['photo']['name'][$i]);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>এইচটিএমএল ওয়েবপেজ</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />

  <!-- CSS Reset -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />

  <!-- Milligram CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />

  <style>
    body {
      margin-top: 40px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="column column-60 column-offset-20">
        <h1>Welcome</h1>
        <h2>Select/Dropdown</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
          quidem ut enim labore similique quisquam eveniet provident, nihil
          explicabo dignissimos.
        </p>

        <?php if (isset($_POST)) : ?>
          <pre>
        <p>
          <?php
          print_r($_POST);
          print_r($_FILES);
          ?>
        </p>
        </pre>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="column column-60 column-offset-20">
        <form method="POST" enctype="multipart/form-data">
          <label for="fname">First name</label>
          <input type="text" name="fname" id="fname">

          <label for="lname">Last Name</label>
          <input type="text" name="lname" id="lname">

          <label for="photo">Photo</label>
          <input type="file" name="photo[]" id="photo"> <br>
          <input type="file" name="photo[]" id="photo"> <br>
          <input type="file" name="photo[]" id="photo"> <br>

          <button type="submit">submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>