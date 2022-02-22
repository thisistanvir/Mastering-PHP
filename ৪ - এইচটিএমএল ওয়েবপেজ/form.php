<?php
include_once "function.php";
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
        <h2>Hello World</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
          quidem ut enim labore similique quisquam eveniet provident, nihil
          explicabo dignissimos.
        </p>

        <p>
          <?php
          $fname = '';
          $lname = '';
          $checked = '';

          if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
            $checked = " checked ";
          }
          ?>
          <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) :
            // $fname = htmlspecialchars($_REQUEST['fname']);
            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          endif;
          if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) :
            // $lname = htmlspecialchars($_REQUEST['lname']);
            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          endif; ?>
        </p>
        <p>
          First Name: <?php echo $fname; ?> <br>
          Last Name: <?php echo $lname; ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="column column-60 column-offset-20">
        <form method="POST">
          <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

          <label for="lname">Last Name</label>
          <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

          <div>
            <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
            <label for="cb1" class="label-inline">Some Checkbox</label>
          </div>

          <label class="label">Select Some Fruits</label>

          <input type="checkbox" name="fruits[]" value="orange" <?php isFruitsChecked('orange'); ?>>
          <label class="label-inline">Orange</label><br>
          <input type="checkbox" name="fruits[]" value="mango" <?php isFruitsChecked('mango'); ?>>
          <label class="label-inline">Mango</label><br>
          <input type="checkbox" name="fruits[]" value="banana" <?php isFruitsChecked('banana'); ?>>
          <label class="label-inline">Banana</label><br>
          <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitsChecked('lemon'); ?>>
          <label class="label-inline">Lemon</label><br>

          <button type="submit">submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>