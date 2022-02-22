<?php

// for single select 
// function displayOptions($options)
// {

//   foreach ($options as $option) {
//     printf("<option value='%s'>%s</option>", strtolower($option), ucwords($option));
//   }
// }

// for multiple select
function displayOptions($options, $selectValue)
{
  foreach ($options as $option) {
    $option = strtolower($option);
    $selected = '';
    if (in_array($option, $selectValue)) {
      $selected = 'selected';
    }

    printf("<option value='%s' %s>%s</option>", strtolower($option), $selected, ucwords($option));
  }
}
