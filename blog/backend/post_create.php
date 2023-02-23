<?php
    
    require "../dbconnect.php";
    require "../QueryBuilder.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=$_POST['title'];
        $photo_arr=$_FILES['photo'];
        $category_id=$_POST['category_id'];
        $description=$_POST['description'];

        //echo $title,$category_id,$description;
        //print_r($photo_arr);

        if(isset($photo_arr) && $photo_arr['size']>0){
           $dir='images/';
           $photo=$dir.$photo_arr['name'];
           $tmp_name=$photo_arr['tmp_name'];
           move_uploaded_file($tmp_name,$photo); 
        }
       $post_date=date('Y-m-d');
       $created_by=2;
       $updated_by=2;

      // $sql="INSERT INTO posts(title,photo,description,category_id,post_date,created_by,updated_by) VALUES(:title,:photo,:description,:category_id,:post_date,:created_by,:updated_by)";
      // $stmt=$conn->prepare($sql);
     //  $stmt->bindParam(':title',$title);
    //   $stmt->bindParam(':photo',$photo);
    //   $stmt->bindParam(':description',$description);
    //   $stmt->bindParam(':category_id',$category_id);
    //   $stmt->bindParam(':post_date',$post_date);
    //   $stmt->bindParam(':created_by',$created_by);
    //   $stmt->bindParam(':updated_by',$updated_by);
    //   $stmt->execute();
    //   header("Location:posts.php");

        $datas=[
              "title" => $title,
              "photo" => $photo,
              "description" => $description,
              "category_id"=>$category_id,
              "post_date"=>$post_date,
              "created_by"=>2,
              "updated_by"=>2,
            ];
        //var_dump($datas);
        store('posts',$datas,$conn);
        header("Location:posts.php");
    }else {
        include "layouts/nav.php";
?>
<main>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <p class="d-inline">Post Create</p>
                <a href="posts.php" class="btn btn-sm btn-danger float-end">Cancel</a>
            </div>
            <div class="card-body">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="title">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <option selected>Select Category</option>
                            <?php 
                                $categories = select('categories','*',null,null,'id DESC',$conn);
                                foreach($categories as $category):
                            ?>
                            <option value="<?php  echo $category['id']?>"><?php echo $category['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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