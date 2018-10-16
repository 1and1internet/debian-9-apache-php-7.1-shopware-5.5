<?php
$ver = phpversion();
if ( preg_match("/^7\.1\..*$/", $ver))
{
  echo "Success";
} else {
  echo "Failure";
}

?>
