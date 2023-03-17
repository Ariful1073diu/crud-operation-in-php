<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 border border-info p-3 rounded">
            <?php
                include 'classess.php';
                $clsObj = new Student;
                $id = $_GET['id'];
                $obj= $clsObj->findforupdate($id);
                $allData = $obj->fetch_assoc();
                if(isset($_POST['btn'])){
                    $clsObj->update($_POST, $id);
                }
                    
                ?>
                <form method="post">
                <div class="form-group my-3">
                    <label for="name">Employe Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $allData["name"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="reg">Employe Registration</label>
                    <input type="text" id="reg" name="reg" class="form-control" value="<?php echo $allData["reg"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="position">Employe Position</label>
                    <input type="text" id="position" name="position" class="form-control" value="<?php echo $allData["position"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="email">Employe Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $allData["email"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $allData["phone"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="salary">Employe Salary</label>
                    <input type="text" id="salary" name="salary" class="form-control" value="<?php echo $allData["salary"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="joining_month">Joining Month</label>
                    <input type="text" id="joining_month" name="joining_month" class="form-control" value="<?php echo $allData["joining_month"];?>"><br>
                </div>
                <div class="form-group my-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option valu="<?php echo $allData["status"]; ?>">
                        <?php if($allData["status"] == 1){
                            echo "Active";
                        }
                        else{
                            echo "Inactive";
                        }
                        ?>
                        </option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <button name="btn" class="btn btn-info form-control">Update Information</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</body>
</html>