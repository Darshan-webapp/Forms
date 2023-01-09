<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>
    <!--Navbar section-->
    <?php require_once('navbar.php'); ?>

    <div class="container">
        <div class="col-md-4 offset-4 mt-3">
            <h1>Forms</h1>
            <form action="server/form-handle.php" method="post" id="form">
                <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" id="userName" name="user_name" class="form-control" required>
                    <p id="errMsgUserName" class="text-danger"></p>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Email Id</label>
                    <input type="text" id="emailId" name="Email_Id" class="form-control" required>
                    <p id="errMsgEmailId" class="text-danger"></p>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Contact No</label>
                    <input type="number" id="contact" name="contact_no" class="form-control" required>
                    <p id="errMsgContactNo" class="text-danger"></p>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Qty</label>
                    <input type="number" id="qty" name="qty" min="1" max="10" class="form-control">
                    <p id="errMsgQty" class="text-danger"></p>
                    <br>
                 </div>
                
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" id="price" name="price" min="1" max="10000" class="form-control" 
                    required>
                    <p id="errMsgPrice" class="text-danger"></p>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Brand Name</label>
                    <input type="text" id="brandName" name="brand_name" class="form-control" required>
                    <p id="errMsgBrandName" class="text-danger"></p>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Client Name</label>
                    <input type="text" id="clientName" name="client_name" class="form-control" required>
                    <p id="errMsgClientName" class="text-danger"></p>
                    <br>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" id="save" type="button">Save</button>
                </div>
            </form>

        </div>
    </div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="scripts/index.js"></script>
</body>
</html>