<?php

session_start();

// namespace App\classes;

require_once "config/Connection.php";

class Student extends Connection{

    //  show all student
    public function show(){
        return $result = $this->con->query("SELECT * FROM `students`");
    }

    //  store 
    public function store($request){        
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $dob = $request['dob'];
        $gender = $request['gender'];
        $sql = "INSERT INTO `students`(`id`, `name`, `email`, `phone`, `dob`, `gender`) VALUES (NULL,'$name','$email','$phone','$dob','$gender')";
        // $result = $this->con->query($sql);
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            $_SESSION['message'] = "Student inserted successfully!";
            $_SESSION['type'] = "success";
        }
        else{
            $_SESSION['message'] = "Something is wrong! Try again later.";
            $_SESSION['type'] = "danger";
        }
        return header("location: index.php");
    }

    //  delete 
    public function delete($id){
        
        $result = $this->con->query("DELETE FROM `students` WHERE id=100");
        if ($result) {
            echo "Student deleted successfully";
            return header("location: add.php");
        }

        // echo "Student deleted successfully";
        // $_SESSION['message'] = "Student Deleted successfully!";
        // $_SESSION['type'] = "success";
        // return header("location: index.php");
        
    }

    //  edit
    public function edit($id){
        $result = $this->con->query("SELECT * FROM `students` WHERE  id={$id}");
        return $result->fetch_assoc();
    }

    //  update 
    public function update($request){
        // echo "<pre>";
        // print_r($request);
        $id = $request['id'];
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $dob = $request['dob'];
        $gender = $request['gender'];

        $sql = "UPDATE `students` SET `name`='$name',`email`='$email',`phone`='$phone',`dob`='$dob',`gender`='$gender' WHERE id={$id}";
        // $result = $this->con->query($sql);
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            echo "Student updated successfully!";
        }
        return header("location: index.php");
    }

}