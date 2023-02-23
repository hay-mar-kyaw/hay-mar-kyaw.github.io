<?php 

    require "../dbconnect.php";
    require "../QueryBuilder.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $category_title=$_POST['name'];
       // echo $category_title;
        
        $created_by=1;
        $updated_by=1;

        $sql="INSERT INTO categories(name,created_by,updated_by) VALUES(:name,:created_by,:updated_by)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':name',$category_title);
        $stmt->bindParam(':created_by',$created_by);
        $stmt->bindParam(':updated_by',$updated_by);
        $stmt->execute();

        header('Location:categories.php');
    }else{

    include "layouts/nav.php"

?>

<<main>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <p class="d-inline">Category Create</p>
                <a href="categories.php" class="btn btn-sm btn-danger float-end">Cancel</a>
            </div>
            <div class="card-body">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Category Title</label>
                        <input type="text" class="form-control" id="category_title" name="name" placeholder="title">
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