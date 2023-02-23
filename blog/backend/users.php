<?php   
    include "layouts/nav.php";
    require "../QueryBuilder.php";
    require "../dbconnect.php";

    $users=select('users','*',null,null,'id DESC',$conn);

?>
                <main>
                    <div class="container-fluid px-4">
                        <div class="card my-4">
                            <div class="card-header">
                                <p class="d-inline">Users List</p>
                                <a href="user_create.php" class="btn btn-sm btn-primary float-end">Create User</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($users as $user): ?>
                                        <tr>
                                            <td><?php echo $user['id'];  ?></td>
                                            <td><?php echo $user['name'];  ?></td>
                                            <td><?php echo $user['email'];  ?></td>
                                            <td><?php echo $user['password'];  ?></td>
                                            <td><?php echo $user['role'];  ?></td>
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
                