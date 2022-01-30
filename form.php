<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h3 class="row justify-content-md-center">Contact Form</h3>
                <hr>
                <form action="db/insert.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" name="email"  class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Contact No</span>
                        <input type="text" name="contact"  class="form-control" placeholder="Contact" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Address</span>
                        <input type="text" name="address"  class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Course Enroll</span>
                        <input type="text" name="course_enroll"  class="form-control" placeholder="Course Enroll" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                    <?php
                        if(isset($_GET['msg'])){ 
                             echo '<script>alert("'. $_GET['msg'] .'")</script>';
                            } 
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>