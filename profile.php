<?php require('config.php'); include_once 'inc/header.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>

</head>
<section class="profile"> 
<body class="loggedin">

    </nav>
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Full name :</td>
                    <td><?php echo $_SESSION["username"] ?></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><?php echo $_SESSION["useruid"] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $_SESSION["useremail"] ?></td>
                    <div><span id="load_test">Loading Overlay Test (lasts 3 sec)</span></div>
				<?php if ( isAdmin() ) : ?>
					<div>
						<a class="a-default" href="adminpanel.php">Admin Panel</a>
					</div>
				<?php endif; ?>
				<div>
					<a class="a-default" href="myaccount.php">My Account</a>
				</div>
				<div id="logout_link" class="a-default">Logout</div>
                </tr>
            </table>
        </div>
    </div>
</body>
</section>
</html>
<?php
include_once 'inc/footer.php';
?>