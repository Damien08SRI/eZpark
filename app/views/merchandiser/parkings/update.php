<?php require APPROOT.'/views/inc/header.php'; ?>
<!--  TOP NAVIGATION  -->
<?php require APPROOT.'/views/inc/components/topnavbar.php'; ?>

<!--  SIDE NAVIGATION  -->
<?php
$section = 'parkings';
require APPROOT.'/views/inc/components/sidenavbar.php';
?>

<div class="form-container">
    <h1>Update Parking</h1>
    <?php if (!empty($data['err'])){?>
        <div class="error-msg">
            <span class="form-invalid"><?php echo $data["err"] ?></span>
        </div>
    <?php } ?>

    <form action="<?php echo URLROOT ?>/merchandiser/parkingUpdate" method="post">
        <!-- Name -->
        <div class="form-input-title">Name:</div>
        <input type="text" name="name" id="name" required value="<?php echo $data['name'] ?>" />
        <input type="text" name="old_name" id="old_name" required value="<?php echo $data['name'] ?>"  disable hidden />

        <br><br>
        <!-- City -->
        <div class="form-input-title">City:</div>
        <input type="text" name="city" id="city" required value="<?php echo $data['city'] ?>" />
        <input type="text" name="old_city" id="old_city" required value="<?php echo $data['city'] ?>"  disable hidden />

        <br><br>

        <!-- Submit -->
        <input type="submit" value="Update">
    </form>
</div>

<!-- <script>
    const userSelectionList = document.querySelector('.user-selection-list');

    userSelectionList.addEventListener('click', function(event) {
        if (event.target.tagName === 'LI') {
            document.getElementById('vehicle_type').value = event.target.getAttribute('data-user-type');
        }
    });
</script> -->
<?php require APPROOT.'/views/inc/footer.php'; ?>