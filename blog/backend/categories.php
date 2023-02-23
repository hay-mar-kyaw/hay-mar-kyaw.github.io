<?php
    include "layouts/nav.php";
    require "../dbconnect.php";
    require "../QueryBuilder.php";

    $categories=select('categories','*',null,null,'id DESC',$conn);
?>

<main>
                    <div class="container-fluid px-4">
                        <div class="card my-4">
                            <div class="card-header">
                                <p class="d-inline">Categories List</p>
                                <a href="category_create.php" class="btn btn-sm btn-primary float-end">Category Create</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Created_by</th>
                                            <th>Updated_by</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id</th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Created_by</th>
                                            <th>Updated_by</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($categories as $category): ?>
                                        <tr>
                                            <td><?php echo $category['id'];  ?></td>
                                            <td><?php echo $category['name'];  ?></td>
                                            <td><?php echo $category['created_by'];  ?></td>
                                            <td><?php echo $category['updated_by'];  ?></td>
                                          
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