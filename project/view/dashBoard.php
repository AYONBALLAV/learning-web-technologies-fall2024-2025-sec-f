<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <div style="padding: 30px;">
        <div style="float:left;">
            <!-- For logo -->
            <h1>Welcome Home! <?php echo $_SESSION['username']?></h1>
        </div>
        <div style="float:right;">
            <a href="signIn.html">Sign In </a>&nbsp;&nbsp;&nbsp;
            <a href="signup.html">Sign Up</a>
        </div>
        <br>
    </div>
    <br>
    <a href="dashBoard.html">Dashboard</a><br><br>
    <a href="profileManagement.html">Profile</a><br><br>
    <a href="notification.html">Notification</a><br><br>
    <a href="userlist.php">Users</a><br><br>
    <a href="productList.html">Products</a><br><br>
    <a href="orderManagement.html">Orders</a><br><br>
    <a href="wishList.html">Wish List</a><br><br>
    <a href="settings.html">Settings</a><br><br>
    <a href="../controller/logout.php">Logout</a>
</body>
</html>

<?php
    }else{
        header('location: signIn.html'); 
    }
?>