<?php

  if(!empty($_POST['url_name'])){
    $url = $_POST['url_name'];
    function getTitle($url) {
      $data = file_get_contents($url);
      $title = preg_match('/<title[^>]*>(.*?)<\/title>/', $data, $matches) ? $matches[1] : null;
      if (empty($title) || $title == null){
        $tag = get_meta_tags($url);
        $page=file_get_contents($url);
        $titleStart=strpos($page,'<title>')+7;
        $titleLength=strpos($page,'</title>')-$titleStart;
        $tag['title']=substr($page,$titleStart,$titleLength);
        $title = $tags;

      }

        return $title;
    }

   if (!empty(getTitle($url))){
     $titles =  getTitle($url);
     echo "<span class='status-available'> $titles </span>";
   } else {
     echo "<span class='status-not-available'> $url.: Title is not available. </span>";
   }
  }
?>
