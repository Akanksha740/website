<!DOCTYPE html>
<html>
<head>
<title>new movie entry</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

</head>
<body>

    <div class ="container">
	    <br>
	    <h1 class="text-white bg-dark text-center">
	          create new entry  
	    </h1>
		<div class="col-lg-8">
        <form action="upload.php" method="post"  enctype="multipart/form-data">
		    
			 
			 <div class="form-group">
		    <label for="user"> MOVIE </label>
			<input type="text" name="movie" id="user" class="form-control">
            </div>
			

		   
			
			<div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>

			 <div class="form-group">
		    <label for="user"> EMBED CODE </label>
			<input type="text" name="url" id="user" class="form-control">
            </div>
			 
			 <div class="form-group">
		    <label for="user"> MOVIE DESCRIPTION </label>
			<input type="text" name="description" id="user" class="form-control">
            </div>
			
			
			
			<div class="form-group">
		    <label for="user"> YEAR </label>
			<input type="text" name="year" id="user" class="form-control">
            </div>
			
			
		    <div class="form-group">
		    <label for="user"> GENRE </label>
			<input type="text" name="genre" id="user" class="form-control">
            </div>
			
			 <div class="form-group">
		    <label for="user"> ACTOR </label>
			<input type="text" name="actor" id="user" class="form-control">
            </div>
			
			<div class="form-group">
		    <label for="user"> GENDER</label>
			<input type="text" name="gender" id="user" class="form-control">
            </div>
			
			<div class="form-group">
		    <label for="user"> AGE </label>
			<input type="text" name="age" id="user" class="form-control">
            </div>
			
			 <div class="form-group">
		    <label for="user"> DIRECTOR </label>
			<input type="text" name="director" id="user" class="form-control">
            </div>

			 
			
			<div class="form-group">
		    <label for="file"> IMAGE </label>
			<input type="file" name="file" id="file" class="form-control">

			</div>
			<input type="submit" name="submit" value="submit" class="btn-btn-success">
			
			
			
			
			
	    </form>
    </div>
	</div>
</body>
</html>
