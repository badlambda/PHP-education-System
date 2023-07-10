<?php
    include 'utils/connect.php';
    include 'utils/session_start.php';
    include 'utils/sessionnull.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div id="profile-container">
        <!-- add profilenav.php to profilestudent.php -->
        <?php include 'pageContent/nav.php'; ?>
        <div class="grid-container">
            <div class="grid">
                <!-- add profilegrid.php to profilestudent.php -->
                <?php include 'pageContent/profile_edit.php'; ?>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>


</body>

</html>