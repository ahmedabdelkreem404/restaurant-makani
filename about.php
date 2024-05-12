<?php 
    include 'Includes/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php"; 
?>
<!-- Custom CSS for About Page -->
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Makani Restaurant</title>
    <link rel="stylesheet" href="">
    <style>
        /* Custom CSS for About Page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            border-radius: 15px 15px 0 0;
            padding: 20px;
            text-align: center;
        }
        .card-body {
            padding: 20px;
        }
        .card-body p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>About Makani Restaurant</h2>
                </div>
                <div class="card-body">
                    <p>Welcome to Makani Restaurant, where taste meets tradition. Our restaurant is dedicated to providing you with an unforgettable dining experience.</p>
                    <p>At Makani, we pride ourselves on using only the freshest ingredients to create delicious and authentic dishes from around the world.</p>
                    <p>Whether you're looking for a casual lunch or a special dinner, Makani is the perfect destination for food lovers of all ages.</p>
                    <p>Visit us today and indulge in our diverse menu, friendly service, and inviting atmosphere.</p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

<?php include "Includes/templates/footer.php"; ?>


