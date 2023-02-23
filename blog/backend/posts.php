<?php   
    include "layouts/nav.php";
    require "../QueryBuilder.php";
    require "../dbconnect.php";

  //    $posts=select('posts','*',$conn);
  $table = 'posts';
  $cols ='posts.*,categories.name as c_name,users.name as u_name';
  $join = 'INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON posts.created_by = users.id';
  $where = null;
  $order = 'posts.id DESC';

  $posts = select($table,$cols,$join,$where,$order,$conn);// 6 parameters

  

  //$posts=select('posts','posts.*, categories.name as c_name, users.name as u_name','INNER JOIN categories ON posts.category_id=categories.id INNER JOIN users ON posts.created_by=users.id',null,'posts.id DESC',$conn);
  //$sql = "SELECT posts.*, categories.name as c_name, users.name as u_name FROM posts INNER JOIN categories ON posts.category_id=categories.id INNER JOIN users ON posts.created_by=users.id";
  //$stmt=$conn->prepare($sql);
  //$stmt->execute();
  //$posts=$stmt->fetchAll();
 // var_dump($posts);
    
?>
                <main>
                    <div class="container-fluid px-4">
                        <div class="card my-4">
                            <div class="card-header">
                                <p class="d-inline">Posts List</p>
                                <a href="post_create.php" class="btn btn-sm btn-primary float-end">Post Create</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Created By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Created By</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            $j=1;
                                        foreach($posts as $post): ?>
                                        <tr>
                                            <td><?= $j++; ?></td>
                                            <td><?=  $post['title'];  ?></td>
                                            <td><?=  $post['c_name'];  ?></td>
                                            <td><?=  $post['u_name'];  ?></td>
                                           <td>
                                                <a href="post_edit.php?id=<?= $post['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="posts_delete.php?id=<?=$post['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                                
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

<?php
    include "layouts/footer.php";

?>
                