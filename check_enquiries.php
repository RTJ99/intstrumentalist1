<!-- ==========Header-Section========== -->
<?php include './includes/header.php' ?>

<?php
if (isset($_SESSION['error'])) {
    echo '<font color="red">' . $_SESSION['error'] . '</font>';
    unset($_SESSION['error']);
}
if (isset($_SESSION['done'])) {
    echo '<font color="green">' . $_SESSION['done'] . '</font>';
    unset($_SESSION['done']);
}
?>

<?php
$sql = "select * from enquiries";
$res = mysqli_query($con, $sql);
?>

<!-- ==========Enquiries========== -->

<section>
    <div class="container">

        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <div class="pt-5">
                <h3 class="title card-header"><?php echo $row['user_name']; ?></h3>
                <div class="card-body">
                    <p class="pt-3 text-justify">
                        <?php {
                            echo $row['enquiry'];
                        }
                        ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </div>

    </div>
</section>

<!-- ==========Enquiries========== -->

<!-- ==========Footer-Section========== -->
<?php include './includes/footer.php' ?>