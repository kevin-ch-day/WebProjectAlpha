<?php
$page_title = 'About Page';
include('../include/public_header.php');
?>

<div id="content">
    <div id="main-menu">
    <h1>User Login</h1>
    <form action="welcome.php" method="post">
        Username: <input type="text" name="uname"><br>
        Password: <input type="password" name="passwd"><br>
        <input type="submit">
    </form>
    </div>
</div>


<?php
include('../include/public_footer.php');
?>