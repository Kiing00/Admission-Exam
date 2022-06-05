<?php
include_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="css/email.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form >
    <div class="d-flex justify-content-center p-3 my-3 bg-success text-dark" >
        <div class="col-6">
            <p class=" d-flex justify-content-center"><h1> Get your Email Here</h1> </p>
            </div>
        </div>
     </div>
     <div class="d-flex justify-content-start">
        <input type="submit" value="Submit"></div>
    <div class="d-flex justify-content-md-around">
        <input type="submit" value="Back" href = "logout.php?q=account.php"></div>
      
          
        </form>
</body>
</html>