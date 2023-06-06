<?php

    require_once "app/classes/Student.php";

    // use App\classes\Student;
    $stu = new Student();

    if (isset($_POST['submit'])) {
        $stu->store($_POST);
}
?>

<?php include "pages/includes/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 Regular shadow py-3 mx-auto">     
            <h2 class="text-danger text-center pb-3">Add New Student</h2>       
            <form action="" method="POST">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="0">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Add Student</button>
                </form>
        </div>
    </div>
</div>

<?php include "pages/includes/footer.php" ?>