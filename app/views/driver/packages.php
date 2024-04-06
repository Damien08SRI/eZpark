<?php require APPROOT.'/views/inc/header.php'; ?>
<!--  TOP NAVIGATION  -->
<?php require APPROOT.'/views/inc/components/topnavbar.php'; ?>

<!--  SIDE NAVIGATION  -->
<?php
$section = 'packages';
require APPROOT.'/views/inc/components/sidenavbar.php';
?>

<main class="page-container">
    <section class="section" id="main">
        <div class="container">
            <h1>Packages</h1>
            <?php if (sizeof($data) == 0){?>
                <div class="emptyVehicle">You have no any package</div>
            <?php } ?>
        </div>
    </section>
</main>
<?php require APPROOT.'/views/inc/footer.php'; ?>
