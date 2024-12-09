<?php
include('includes/header.php');
?>

<?php include('dbconfig/dbconfig.php') ?>


<div class="card mt-5">
    <div class="card-header">
        <h4>
            Insert data into database in PHP

            <a href="insert.php" class="btn btn-primary float-end">Insert Data</a>
        </h4>
    </div>
    <div class="card-body">
    </div>

    <!--  Fetching data from the database -->
    <div class="card mt-5">
        <div class="card-header">
            <h4>
                Fetch data from the database in PHP
                <a href="insert.php" class="btn btn-primary float-end">Fetch Data</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fetch_query = "SELECT * FROM users";
                    $fetch_query_run = mysqli_query($connection, $fetch_query);

                    if (mysqli_num_rows($fetch_query_run) > 0) {
                        foreach ($fetch_query_run as $row) {
                    ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstName']; ?></td>
                                <td><?php echo $row['lastName']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="delete.php" method="post">
                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="6">No record found</td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>


    </div>
</div>
</div>



<?php include('includes/footer.php'); ?>