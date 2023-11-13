<?php require APPROOT.'/views/inc/header.php'; ?>
    <!--  TOP NAVIGATION  -->
<?php require APPROOT.'/views/inc/components/topnavbar.php'; ?>

    <!--  SIDE NAVIGATION  -->
<?php
$section = 'dashboard';
require APPROOT.'/views/inc/components/sidenavbar.php';
?>

    <main class="page-container">
        <section class="section" id="main">
            <div class="container">
                <h1><?php echo $data['name'] ?> Dashboard</h1>

                <div class="dropdown">
                    <button class="dropbtn">Select Parking</button>
                    <div class="dropdown-content">
                        <?php for ($i = 0; $i < sizeof($other_data); $i++) {?>     
                            <a href="<?php echo URLROOT ?>/parkingOwner/gotoLand/<?php echo $other_data[$i]->id ?>/<?php echo $other_data[$i]->name ?>"><?php echo $other_data[$i]->name ?></a>  
                        <?php } ?>
                    </div>
                </div>

                <div class="cards">
                    <!-- Card 1 -->
                    <div class="card">
                        <a href="#">
                            <table>
                                <tr>
                                    <th>
                                        <img src="<?php echo URLROOT ?>/images/vehicle.svg" alt="">
                                    </th>
                                    <td>
                                        <p>0</p>
                                        <p>Today's Vehicle Entries</p>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="card">
                        <a href="#">
                            <table>
                                <tr>
                                    <th>
                                        <img src="<?php echo URLROOT ?>/images/vehicle.svg" alt="">
                                    </th>
                                    <td>
                                        <p>0</p>
                                        <p>Yesterday's Vehicle Entries</p>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="card">
                        <a href="#">
                            <table>
                                <tr>
                                    <th>
                                        <img src="<?php echo URLROOT ?>/images/vehicle.svg" alt="">
                                    </th>
                                    <td>
                                        <p>3</p>
                                        <p>Last 7 days Vehicle Entries</p>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>

                    <!-- Card 4 -->
                    <div class="card">
                        <a href="#">
                            <table>
                                <tr>
                                    <th>
                                        <img src="<?php echo URLROOT ?>/images/vehicle.svg" alt="">
                                    </th>
                                    <td>
                                        <p>8</p>
                                        <p>Total Vehicle Entries</p>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>

                    <!-- Card 5 -->
                    <div class="card">
                        <a href="#">
                            <table>
                                <tr>
                                    <th>
                                        <img src="<?php echo URLROOT ?>/images/useridenty.png" alt="">
                                    </th>
                                    <td>
                                        <p>3</p>
                                        <p>Total Registered Users</p>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>

                    <!-- Card 6 -->
                    <div class="card">
                        <a href="<?php echo URLROOT ?>/parkingOwner/packages/<?php echo $data['id'] ?>/<?php echo $data['name'] ?>">
                            <table>
                                <tr>
                                    <th>
                                        <img src="<?php echo URLROOT ?>/images/package.svg" alt="">
                                    </th>
                                    <td>
                                        <p>3</p>
                                        <p>Total Registered Users</p>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require APPROOT.'/views/inc/footer.php'; ?>