<?php

function isChecked($inputName, $value)
{
  if (isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName])) {
    echo 'checked';
  }
}

function isFruitsChecked($value)
{
  if (isset($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])) {
    echo 'checked';
  }
}
