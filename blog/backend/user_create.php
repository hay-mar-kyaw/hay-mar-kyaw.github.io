<?php

    
    require "../dbconnect.php";
    require "../QueryBuilder.php";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        $role=$_POST['role'];


        $sql="INSERT INTO users(name,email,password,role) VALUES(:name,:email,:password,:role)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':role',$role);
        $stmt->execute();
        header('Location:users.php');
        

    }else{
    include "layouts/nav.php";
?>

<main>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <p class="d-inline">Create User</p>
                <a href="users.php" class="btn btn-sm btn-danger float-end">Cancel</a>
            </div>
            <div class="card-body">
                
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="*********">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="number" class="form-control" id="role" name="role" placeholder="role">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>


<?php
    include "layouts/footer.php";
    }
?>