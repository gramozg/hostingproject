<?php 
	require '../inc/connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM userat WHERE id = :id';
    $query = $conn->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();
	
	if(isset($_POST['submit'])){
			$name = $_POST['name'];
            $Username = $_POST['Username'];
            $email = $_POST['email'];

        $sql = 'UPDATE userat SET  name = :name, Username = :Username, email = :email WHERE id = :id ';
        $query = $conn->prepare($sql);
        $query->bindParam('name', $name);
		$query->bindParam('Username', $Username);
        $query->bindParam('email', $email);
        $query->bindParam('id', $id);

        $query->execute();
		

		
        header("Location: tables.php");
    }
?>

<div class="mt-2">
    <div class="container">
        <form method="post">
			<input type="text" name="name" value="<?php echo $user['name']; ?>" placeholder="Enter your name"><br>
            <input type="text" name="Username" value="<?php echo $user['Username']; ?>" placeholder="Enter your surname"><br>
            <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="Enter your email"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
