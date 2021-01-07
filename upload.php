<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>

 <link rel="stylesheet" href="./search.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	   
</head>
<body>  

    <div id="fixed-header">
            <div class="in-bg"></div>
             <section class="container" id="con-width">
                <input class="light-table-filter" data-table="order-table" placeholder="Search by artist,year......." type="text">
                <table class="order-table">
	    <thread>
		   <th>MOVIE</th>
		   <th>ARTIST</th>
		   <th>MOVIE DESCRIPTION</th>
		   <th>YEAR</th>
		   <th>POSTER</th>
		   <th>TRAILER</th>
		</thread>
		
	    <tbody>
		<?php
		
		$con = mysqli_connect('localhost','root','','flicks');
        
		
		  if (isset($_POST['submit'])) {
			  echo "<br>";
			  echo "<br>";
			  
			$artist = $_POST['artist'];  
			 print_r($artist);
			 echo "<br>";
			 
			$description = $_POST['description']; 
			 print_r($description);
			 echo "<br>";
			
			$year = $_POST['year']; 
			 print_r($year);
			 echo "<br>";
			 
			 $url = $_POST['url']; 
			 print_r($url);
			 echo "<br>";
			 
			$movie = $_POST['movie'];  
			 print_r($movie);
			 echo "<br>";
			 
			$genre = $_POST['genre'];  
			 print_r($genre);
			 echo "<br>";
			 
			$director = $_POST['director']; 
			 print_r($director);
			 echo "<br>"; 
			 
			$rating = $_POST['rating'];
                         print_r($rating);
			 echo "<br>";
  
			
			$files = $_FILES['file'];
			 
			 print_r($files);
			
			  $filename = $files['name'];
			  $filerror = $files['error'];
			  $filetmp = $files['tmp_name'];
			  
			  $target = 'upload/'.$filename;
			  
			  $q = " INSERT INTO images(artist, description, year, poster) VALUES  ('$artist','$description','$year','$target')";
			 
			  $query =  mysqli_query($con,$q);
			  
			  $u = "INSERT INTO videourl (url) VALUES ('$url')";
			  
			  $v = mysqli_query($con,$u);
			  
			  /*if (!$check1_res) {
               printf("Error: %s\n", mysqli_error($con));
                    exit();
                   }*/
				
               $r ="INSERT INTO movie ( movie ) VALUES ('$movie')";
               				 
			   $r =  mysqli_query($con,$r);
			  
			  
			   $qt = "INSERT INTO genres ( genre,director) VALUES ('$genre','$director')";
			   
			  
			  
		       $queryt =  mysqli_query($con,$qt);
			   
			    
                $sa = "INSERT INTO ratee (rate) VALUES ('$rating')";				
				
				$sa =  mysqli_query($con, $sa);
			
			   $msg = "";
		
			  
			  
			  
			  
			  if (move_uploaded_file($filetmp,$target))
			     {
				  $msg = "Image uploaded successfully";
                   	}else{
  		              $msg = "Failed to upload image";
  	                      }
		  
				     
			           $row = mysqli_query($con,"SELECT v.url,i.artist,m.movie,i.description,i.year,i.poster from genres g inner join images i on g.id=i.id inner join movie m on  g.id=m.id inner join videourl v on  g.id=v.id");
				       
					  
					   
				       while($result = mysqli_fetch_array($row)){
						   
						    ?>
				
				            <tr>
							<td> <?php echo $result['movie']; ?> </td>
							<td> <?php echo $result['artist']; ?> </td>
				            <td> <?php echo $result['description']; ?> </td>
					        <td> <?php echo $result['year']; ?> </td>
		                    <td> <img src=" <?php echo $result['poster']; ?>"></td>
							<td> <?php echo $result['url']; ?> </td>
				            </tr>
                      				  
				             <?php
					   }
							 
				}
		?>
		</tbody>
	   
	    </table>
		
		</table>
		</section>
        </div>
		
       </div>
   <script src="./search.js"></script>
   
</body>
</html>






