<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Add Employee</title>
</head>
<body>

<form method="post" action="process.php">
<label>Name</label>
<input type="text" name="name" />
<br />
<label>DESCRIPTION</label>
<input type="text" name="description" />
<br />
<label>PRICE</label>
<input type="text" name="price" />
<br />
<label>Email</label>
<input type="text" name="email" />

<br />
<input type="submit" value="Add Employee">
</form>



</body>
</html>