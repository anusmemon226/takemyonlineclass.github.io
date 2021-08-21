<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap4.min.css">
    <link rel="stylesheet" href="css/bootstrap5.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>takemyonlineclass.com</title>
</head>

<body onscroll="show()" onload="load()">
    <!-- <div id="loader">
    </div> -->
    <div id="here"></div>
    <?php include('component/navbar.php') ?>

    <div class="container form_cont">
        <div class="form_div">
            <div class="form_header">
                <h2>Contact Us</h2>
                <h3>We will get back to you asap!</h3>
            </div>
            <div class="form_details py-4">
                <form action="" id="form" method="$_POST">
                    <div class="form-group">
                        <span class="fa fa-user"></span>
                        <input type="text" name="c_name" id="name" class="form-control" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <span class="fa fa-envelope" style="left:1%;font-size:26px;top:18%;"></span>
                        <input type="email" name="c_email" id="email" class="form-control" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <span class="fa fa-phone"></span>
                        <input type="number" name="c_num" id="number" class="form-control" placeholder="Enter Your Number" required>
                    </div>
                    <div class="form-group">
                        <textarea id="" name="c_msg" placeholder="Message"></textarea>
                    </div>
                    <div class="sub_btn">
                        <button type="button" onclick="form_submit(this.form.id)" class="sub_btn1"><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>












    <?php include('component/footer.php') ?>






    <script>
        window.addEventListener('load', function() {
            nav_active(4)
        })
    </script>
</body>

</html>