<?php

if(!empty($_POST['url_name']){

  $url = $_POST['url_name'];

  function isValidURL_reg($url) {
    return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
  }

  function isValidURL($url) {
    if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED)) return true;
    else return false;
  }



  if (isValidURL_reg($url) && (isValidURL($url))) {
    echo "<span class='status-available'>URL is valid</span>";
  } else {
    echo "<span class='status-not-available'>URL is invalid. Please enter a valid URL.</span>";
  }


}



?>
