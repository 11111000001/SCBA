<?php
include_once('head.php');
include_once('head2.php');

$id = $_GET['id']
?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="main.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Actions</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Admin Actions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registerAdminUsers.php">Register Admin User</a>
                                    <a class="nav-link" href="pendingAdminUsers.php">Manage Admin User</a>
                                    <a class="nav-link" href="pendingDogs.php">Approve/Reject New Dog</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Add Dogs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="register.php">Register New Dog</a>
                                </nav>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php  $_SESSION['user'] ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Daniel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dogs Data</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Microchip Number</th>
											<th>Name</th>
											<th>Date of Birth</th>
											<th>Registration Number</th>
											<th>Gender</th>
											<th>Father</th>
											<th>Mother</th>
											<th>Coat</th>
											<th>Color</th>
											<th>Show Titles</th>
											<th>HD</th>
											<th>ED</th>
											<th>DNA</th>
											<th>Tattoo</th>
											<th>Working Titles</th>
											<th>KKL</th>
											<th>Owner</th>
											<th>Address</th>
											<th>Breeder(s)</th>
											<th>Address</th>
											<th>Added By</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Microchip Number</th>
											<th>Name</th>
											<th>Date of Birth</th>
											<th>Registration Number</th>
											<th>Gender</th>
											<th>Father</th>
											<th>Mother</th>
											<th>Coat</th>
											<th>Color</th>
											<th>Show Titles</th>
											<th>HD</th>
											<th>ED</th>
											<th>DNA</th>
											<th>Tattoo</th>
											<th>Working Titles</th>
											<th>KKL</th>
											<th>Owner</th>
											<th>Address</th>
											<th>Breeder(s)</th>
											<th>Address</th>
											<th>Added By</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                       
			                        <?php
					                    if(!empty($_GET['id'])){
											$id = $_GET['id'];
											$id_exists = true;
											
											$query = "Select * from dogs WHERE id =".$id;
											 $request = exec_query(DBNAME,$query);
											while($row=mysqli_fetch_array($request)){
												Print "<tr>";
												Print '<td>'.$row['mn']."</td>";
												Print '<td>'.$row['dn']."</td>";
												Print '<td>'.$row['dob']."</td>";
												Print '<td>'.$row['drn']."</td>";
												Print '<td>'.$row['dg']."</td>";
												Print '<td>'.$row['df']."</td>";
												Print '<td>'.$row['dm']."</td>";
												Print '<td>'.$row['dc']."</td>";
												Print '<td>'.$row['hc']."</td>";
												Print '<td>'.$row['st']."</td>";
												Print '<td>'.$row['hd']."</td>";
												Print '<td>'.$row['ed']."</td>";
												Print '<td>'.$row['dna']."</td>";
												Print '<td>'.$row['tat']."</td>";
												Print '<td>'.$row['wt']."</td>";
												Print '<td>'.$row['kkl']."</td>";
												Print '<td>'.$row['owner']."</td>";
												Print '<td>'.$row['oadd']."</td>";
												Print '<td>'.$row['db']."</td>";
												Print '<td>'.$row['badd']."</td>";
												Print '<td>'.$row['addedby']."</td>";
												Print "</tr>";
				                        }
												Print "<tr>";
												Print "<th colspan='21'><a href =\"pedigree.php?fromPage=pedigree&id=".$id."\">View Pedigree</a></th>";
												Print "</tr>";

									}
			                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include_once('footer.php');
?>