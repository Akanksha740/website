   <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "flick");  
 
 
 if(isset($_POST["add_to_watchlist"]))  
 {  
      if(isset($_SESSION["watch_list"]))  
      {  
           $item_array_id = array_column($_SESSION["watch_list"], "item_id");  
           if(!in_array($_POST["hidden_movie_id"], $item_array_id))  
           {  
                $count = count($_SESSION["watch_list"]);  
                $item_array = array(  
                      'item_id' => $_POST['hidden_movie_id'],  
                     'item_name' =>    $_POST['hidden_movie_name'],  
                     'item_rating' =>   $_POST['hidden_rating'] 
                      
                );  
                $_SESSION["watch_list"][$count] = $item_array;  
           }  
           else  
           {  
              echo "<script>alert('movie is already added in the watchlist..!')</script>";
              echo "<script>window.location = 'customize.php'</script>";   
           }  
      }  
      else  
      {  
           $item_array = array(  
                       'item_id' =>  $_POST['hidden_movie_id'],  
                     'item_name'  =>   $_POST['hidden_movie_name'],  
                     'item_rating'   =>  $_POST['hidden_rating']
                 
           );  
           $_SESSION["watch_list"][0] = $item_array;  
      }  
 }  
 if(isset($_POST["remove"])){
     print_r($_POST["item_id"]);
   
      if($_GET["action"] == "remove") 
      {  
           foreach($_SESSION["watch_list"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["watch_list"][$keys]);  
                      echo "<script>alert('item removed')</script>";
                      echo "<script>window.location = 'customize.php'</script>";
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> customize</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">YOUR WATCHLIST...!</h3><br />  
                <?php  
				
					
                $query = "select m.movie_id,m.movie_name,m.rating,g.genre,r.poster from movie m inner join mov_review r on m.movie_review_id=r.movie_review_id 
				 inner join genre g on g.genre_id=r.genre_id "; 
				 
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
				    
                     while($row = mysqli_fetch_assoc($result))  
                     {  
                ?>  
                     <div class="col-md-4">
                     <form method="POST" action="customize.php?action=add&id=<?php echo $row["movie_id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center"> 
                              						  
                               <img src="<?php echo $row["poster"]; ?>" class="img-responsive" /><br />  
							   <h4 class="text-info"><?php echo $row["movie_name"]; ?></h4> 
                               <h4 class="text-info"><?php echo $row["genre"]; ?></h4>  
                               <h4 class="text-danger"><?php echo $row["rating"]; ?></h4>  
                              
                               <input type="hidden" name="hidden_movie_name" value="<?php echo $row["movie_name"]; ?>" />  
                               <input type="hidden" name="hidden_rating" value="<?php echo $row["rating"]; ?>" />  
                               <input type="submit" name="add_to_watchlist" style="margin-top:5px;" class="btn btn-success" value="add_to_watchlist" /> 
                               <input type="hidden" name="hidden_movie_id" value="<?php echo $row["movie_id"]; ?>" />  							   
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>your watchlist</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
						       <th width="10%">movie_id</th>
                               <th width="40%">movie Name</th>  
                               <th width="20%">rating</th>  
                               <!-- <th width="20%">remove movie</th> 							    -->
                            
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["watch_list"]))  
                          {  
                             
                               foreach($_SESSION["watch_list"] as $keys => $values)  
                               {  
                          ?>  
                          <tr> 
                               <td><?php echo $values['item_id']; ?></td> 						  
                               <td><?php echo $values['item_name']; ?></td>  
                               <td><?php echo $values['item_rating']; ?></td>  
							  
                                    
									
                                <!-- <td><a href="customize.php?action=delete&id=<?php echo $values['item_id']; ?>"><span class="text-danger"></span></a></td>  -->
							  
							       
                          </tr>  
                          <?php  
                                    
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
   