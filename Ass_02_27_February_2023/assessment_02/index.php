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
                include 'Classess.php';
                $clsObj = new Student;
                if(isset($_POST['btn'])){
                        

                echo '<div class="alert alert-success">'.$clsObj->insert($_POST).'</div>';
                }
                if(isset($_GET['active'])){
                    $id =$_GET['active'];
                    $clsObj->active($id);
                    
                }
                if(isset($_GET['inactive'])){
                    $id =$_GET['inactive'];
                    $clsObj->inactive($id);
                }
                if(isset($_GET['delete'])){
                    $id =$_GET['delete'];
                    $clsObj->Delete($id);
                }
    ?>
                <form action="index.php" method="post">
                <div class="form-group my-3">
                    <label for="name">Employe Name</label>
                    <input type="text" id="name" name="name" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="reg">Employe Registration</label>
                    <input type="text" id="reg" name="reg" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="position">Employe Position</label>
                    <input type="text" id="position" name="position" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="email">Employe Email</label>
                    <input type="text" id="email" name="email" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="salary">Employe Salary</label>
                    <input type="text" id="salary" name="salary" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="joining_month">Joining Month</label>
                    <input type="text" id="joining_month" name="joining_month" class="form-control"><br>
                </div>
                <div class="form-group my-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">------Select Status-----------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <button name="btn" class="btn btn-info form-control">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Registration</th>
                            <th>Posistion</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Salary</th>
                            <th>joining</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $all = $clsObj->show();    
                        while($data = $all->fetch_assoc()){
                            if($data["status"] == 1){
                                $status ='<a href="index.php?active='.$data["id"].'" class="btn btn-info btn-ms">Active</a>';
                            }
                            else{
                                $status ='<a href="index.php?inactive='.$data["id"].'" class="btn btn-warning btn-ms">Inactive</a>';
                            }
                            echo '<tr>
                            <td>'.$data["id"].'</td>
                            <td>'.$data["name"].'</td>
                            <td>'.$data["reg"].'</td>
                            <td>'.$data["position"].'</td>
                            <td>'.$data["email"].'</td>
                            <td>'.$data["phone"].'</td>
                            <td>'.$data["salary"].'</td> 
                            <td>'.$data["joining_month"].'</td> 
                            <td>'.$status.'<td>
                            <td><a href="edit.php?id='.$data["id"].'" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a><a href="index.php?  delete='.$data["id"].'" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a><td>
    
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
               
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</body>
</html>