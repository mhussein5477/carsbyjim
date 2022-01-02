<?php
include '../helpers/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Admin Page</title>
</head>
<body>
<div style="width: 70%;  margin-left:5%; margin-top:5%">
<h3 style="color:orange">Admin Page</h3>

<form action="fileupload.php" method="post" enctype="multipart/form-data">
<h6>Add a New Car</h6>
			
			<div class="form-group">
			    <label for="Username">Car Image:</label>
			    <input type="file"  name="image" id="fileToUpload" class="form-control" > <br>

				<input type="file"  name="image1" id="fileToUpload" class="form-control" ><br>
				<input type="file"  name="image2" id="fileToUpload" class="form-control" ><br>
				<input type="file"  name="image3" id="fileToUpload" class="form-control" ><br>
				<input type="file"  name="image4" id="fileToUpload" class="form-control" ><br>
			       
			  </div>

			  <div class="form-group">
			    <label for="Username">Car Model:</label>
			    <input type="text" class="form-control" placeholder="Car Name" name="carname">
			  </div>

			  <div class="form-group">
			    <label for="pwd">Price:</label>
			    <input type="text" class="form-control" placeholder="Price" name="price">
			  </div>

			  <div class="form-group">
			    <label for="Username">Status:</label>
			    <select name="status" id="" class="form-control">
					<option value="New">New</option>
					<option value="Used">Used</option>
				</select>
			  </div>

			  <div class="form-group">
			    <label for="pwd">Year:</label>
			    <input type="text" class="form-control" placeholder="Year" name="year">
			  </div>

			  

			  <div class="form-group">
			    <label for="Username">Gear System:</label>
			    <select name="gearsystem" id="" class="form-control">
					<option value="Automatic">Automatic</option>
					<option value="Manual">Manual</option>
				</select>
			  </div>

			  <div class="form-group">
			    <label for="pwd">Oil type:</label>
			    <input type="text" class="form-control" placeholder="Disel , Petrol" name="oil">
			  </div>

			  <div class="form-group">
			    <label for="Username">Brand:</label>
			    <select name="brand" id="" class="form-control">
					<option value="Toyota">Toyota</option>
					<option value="Nissan">Nissan</option>
					<option value="Subaru">Subaru</option>
					<option value="ISUZU">ISUZU</option>
					<option value="Jeep">Jeep</option>
					<option value="Mazda">Mazda</option>
					<option value="Honda">Honda</option>
					<option value="Mitsubishi">Mitsubishi</option>
					<option value="Mercedes-Benz">Mercedes-Benz</option>
					<option value="Jaguar">Jaguar</option>
					<option value="Volkswagen">Volkswagen</option>
					<option value="Audi">Audi</option>
					<option value="Daihatsu">Daihatsu</option>
					<option value="Others">Others</option>
					
				</select>
			  </div>


        
       		 <div class="form-group">
			    <label for="pwd">Description:</label>
			    <input type="text" class="form-control" placeholder="Description / Specs" name="description">
			  </div>

			  <div class="form-group">
			    <label for="Username">Slider to be Displayed :</label>
			    <select name="slider" id="" class="form-control">
					<option value="Popular">Popular</option>
					<option value="Featured">Featured</option>
				</select>
			  </div>
			 <br>
			 	 <button type="submit" class="btn btn-warning  " >Post</button>
			 
			 
		</form> 
		<br>
		<br>
	 <a href="../index.php" style="margin-top:5%; margin-bottom:5%" >	<button class="btn btn-danger">Logout</button></a> <br>

</div>
<?php
    $sql = $db->query("SELECT * FROM cars   ");
   
?>

<table class="table table-striped" style="width:70%; margin-left:5%; margin-top:1%; margin-bottom:5%">
  <thead>
    <tr> 
      <th scope="col">Car Name</th>
      <th scope="col">Price</th>
      <th scope="col">Year</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php  while ($car = mysqli_fetch_assoc($sql)): ?> 
    <tr>
    
      <td><?= $car['carname'] ?></td>
      <td><?= $car['price'] ?></td>
      <td><?= $car['year'] ?></td>
	  <td><a href="delete.php?info=<?= $car['id'] ?>"  title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this car ?')" style="color: red"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a> </td>
    </tr>
	<?php endwhile; ?>
  </tbody>
</table>

<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>    
  
  
</body>
</html>