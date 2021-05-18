<?php

if(isset($_POST['submit']))
{        
       $name = $_POST['name'];

        $url = "http://localhost/webservices/api.php?name=".$name;

        $ch = curl_init($url);        // CURL session starts
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch); // CURL session closes

	//	 if($result = 404)
    //{
    //    echo "404,Product Not Found", NULL;
   // }
   // else if ($result = 200) 
  //  {
  //      echo "200,Success. Product Found", $price;
  //  }
    


//else if ($result = 400)
//{
 //   echo "400,Invalid Request",NULL;
//}
		
        $result = json_decode($response);
		        

         echo " <br/> Price = ".         $result->data->price;
         echo "<br/> Year = ".          $result->data->year;
         echo "<br/> Make = ".        $result->data->make;
         echo "<br/> Model = ".      $result->data->model;


       echo "Price of $name = $". $result->data;
}
?>