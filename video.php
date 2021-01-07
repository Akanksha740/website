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
		   <th>video</th>
		   <th>MOVIE DESCRIPTION</th>
		   <th>YEAR</th>
		   <th>POSTER</th>
		</thread>
	
		
	    <tbody>
		<?php
		
		$con = mysqli_connect('localhost','root','','flicks');
        
		
				    
			           $row = mysqli_query($con,"select * from videourl");
				       
					   
					   
				       while($result = mysqli_fetch_array($row)){
						   
						    ?>
				
				            <tr>
							<td> <?php echo $result['movie']; ?> </td>
							<td> <?php echo $result['url']; ?> </td>
				            <td> <?php echo $result['description']; ?> </td>
					        <td> <?php echo $result['year']; ?> </td>
		                    <td> <img src=" <?php echo $result['poster']; ?>"></td>
				            </tr>
                      				  
				             <?php
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

