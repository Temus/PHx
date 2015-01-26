<?php
$output = trim($output);
if (!empty($output)) {
  if ($pos = strpos($options, " ")) { // assign and check $pos found
    $closetag = substr($options, 0, $pos);
  } else {
    $closetag = $options;
  }
  $output = "<{$options}>{$output}</{$closetag}>";
}
return $output;