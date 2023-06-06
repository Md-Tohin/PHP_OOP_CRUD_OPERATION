<?php 

    // require_once "vendor/autoload.php";

    require_once "app/classes/Student.php";

    // use App\classes\Student;
    $stu = new Student();

    if (isset($_GET['id'])) {
        $stu->delete($_GET['id']);
    }

?>
<?php include "pages/includes/header.php" ?>

<div class="container">
    <?php if (isset($_SESSION['message'])) { ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-<?= $_SESSION['type'] ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['message'] ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>      
        
    <?php unset($_SESSION['message']); } ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="row py-3">
                <div class="col-md-12 "
                    style="display: inline-flex; justify-content: space-between; align-items: center">
                    <h2 class="text-danger text-center py-3" style="flex-basis: 85%;">All Students </h2>
                    <a href="add.php" class="btn btn-success" style="height: 40px; flex-basis: 15%;">Add Student</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $stu->show();
                            $i = 1;
                         while($row = mysqli_fetch_assoc($data)) { ?>
                            <tr>
                                <th scope="row"><?php echo $i++?></th>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['phone']?></td>
                                <td><?php echo date("d M Y", strtotime($row['dob'])) ?></td>
                                <td>
                                    <?php 
                                        if ($row['gender'] == 1 ) {
                                            echo "<span class='badge rounded-pill bg-success'>Male</span>";
                                        } else {
                                            echo "<span class='badge rounded-pill bg-danger'>Female</span>";
                                        }                                        
                                    ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>"
                                        class="btn btn-info btn-sm text-white"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm text-white"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>

<?php include "pages/includes/footer.php" ?>