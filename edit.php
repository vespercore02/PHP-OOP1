<?php 

include_once "autoload.php";
if (isset($_GET['edit'])) {
    $emp_info = new Employee();
    $emps = $emp_info->getEmp($_GET);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>
<body>

    <?php 
    
    include_once "template/nav.php";

    ?>
    
    
    <div class="container">
    <div class="row justify-content-md-center">
            <div class="col-6">
            
                <div class="my-3 p-3 bg-white rounded shadow-lg">
                    
                    <h6 class="border-bottom pb-2 mb-3">Edit Member</h6>
                    <form action="view.php" method="post">
                        
                        <input id="lname" class="form-control" type="hidden" name="emp_id" value="<?php echo $emps['emp_id']; ?>">
                        <div class="form-group mb-3">
                            <label for="lname">Last Name</label>
                            <input id="lname" class="form-control" type="text" name="last_name" value="<?php echo $emps['last_name']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fname">First Name</label>
                            <input id="fname" class="form-control" type="text" name="first_name" value="<?php echo $emps['first_name']; ?>">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary" >Save</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    

</body>
</html>