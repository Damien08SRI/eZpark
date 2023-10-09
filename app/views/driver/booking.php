<?php require APPROOT.'/views/inc/header.php'; ?>
<!--  TOP NAVIGATION  -->
<?php require APPROOT.'/views/inc/components/topnavbar.php'; ?>

<!--  SIDE NAVIGATION  -->
<?php
$section = 'booking';
require APPROOT.'/views/inc/components/sidenavbar.php';
?>

<main class="page-container">
    <section class="section" id="main">
        <div class="container">
            <h1>Bookings</h1>

            <br><br>
            <a href="#" style="font-weight: 1000; font-size: 20px">+</a>

            <div class="emptyVehicle">You have no any bookings</div>
        </div>
    </section>
</main>
<script>
    function confirmSubmit() {
        return confirm("Are you sure you want to delete this booking?");
    }
</script>
<?php require APPROOT.'/views/inc/footer.php'; ?>
