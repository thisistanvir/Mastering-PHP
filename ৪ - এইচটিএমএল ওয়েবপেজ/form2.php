<?php
include_once "form2-functions.php";

$fruits = ['mango', 'Banana', 'apple', 'orange', 'pineapple'];
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

        <p>
          <?php
          // for single select
          // $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_SPECIAL_CHARS);
          // if (isset($sfruits) && !empty($sfruits)) {
          //   printf("You have selected: %s", ucwords($sfruits));
          // }

          // multiple select
          // $sfruits = isset($_REQUEST['fruits']) ? $_REQUEST['fruits'] : [];
          // $sfruits = $_REQUEST['fruits'] ?? [];
          $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
          if (count($sfruits) > 0) {
            printf("You have selected: %s", ucwords(join(', ', $sfruits)));
          }
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="column column-60 column-offset-20">
        <form method="POST">
          <label for="fruits">Select Some Fruits</label>
          <select name="fruits[]" id="fruits" multiple>
            <option value="" disabled selected>Select Some Fruits</option>
            <?php displayOptions($fruits, $sfruits); ?>
          </select>

          <button type="submit">submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>