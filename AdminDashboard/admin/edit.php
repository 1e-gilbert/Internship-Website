<?php include('includes/header.php'); ?>

<?php include('dbconfig/dbconfig.php') ?>

<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">


            <div class="card ">
                <div class="card-header">
                    <h4>
                        Edit data in PHP
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <?php
                $id = $_GET['id'];

                $fetch_query = "SELECT * FROM users WHERE id='$id'";
                $fetch_query_run = mysqli_query($connection, $fetch_query);

                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {
                        /* echo $row['firstName']; */
                ?>
                        <div class="card-body">
                            <form action="update.php" method="POST">
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputName1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['firstName']; ?>" name="firstName" id="exampleInputName1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputName1" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['lastName']; ?>" name="lastName" id="exampleInputName1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="text" class="form-control" value="<?php echo $row['password']; ?>" name="password" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputRole1" class="form-label">Role</label>
                                    <input type="text" class="form-control" value="<?php echo $row['role']; ?>" name="role" id="exampleInputRole1" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_btn" class="btn btn-primary">Update Data</button>
                                </div>
                            </form>
                        </div>
                <?php
                    }
                } else {
                    echo "no record found";
                }
                ?>

            </div>

        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>