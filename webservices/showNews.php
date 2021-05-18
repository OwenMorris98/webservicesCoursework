<?php
   // headlines indexed news. Create your own apiKey on https://newsapi.org and replace it with mine
   $string = file_get_contents('https://newsapi.org/v2/top-headlines?country=GB&apiKey=5709f3b23b0f47d1bc5dc977905bbdda');
 // show news from United States only.  You can change country=GB for Great Britain or others
  
	//print_r($string);exit;
	
  $data = json_decode($string, true);   
   foreach($data['articles'] as $article)
   {
	   
	 //  echo "<hr>";
	 //  foreach($article as $key=>$array){
		   //echo "<br> $key <br>"; // source
          echo $article['title']; // display news title
          $url = $article['url'];
          echo "<br> <a href=$url>$url</a>"; // display news url
          if($article['urlToImage']){
          $img = $article['urlToImage'];
           echo " <br> <img src=\"$img\" width=\"300\" height=\"200\">";  // display news image
          }
		  echo $article['description'];
      echo"<hr />";
   }
?>
