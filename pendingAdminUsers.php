<?php
include_once('head.php');
include_once('head2.php');
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
                                    <a class="nav-link" href="pendingAdmins.php">Manage Admin User</a>
                                    <a class="nav-link" href="pendingDogs.php">Approve/Reject New Dog</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Add Dogs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="register.html">Register New Dog</a>
                                </nav>
                            </div>
                           
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
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
                                            <th>Admin Id</th>
                                            <th>Email</th>
                                            <th>Admin Name</th>
                                            <th>Phone Number</th>
                                            <th>Kennel Name</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Admin Id</th>
                                            <th>Email</th>
                                            <th>Admin Name</th>
                                            <th>Phone Number</th>
                                            <th>Kennel Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                       
			                        <?php
					                    $query ="Select * from users";
				                         $request = exec_query(DBNAME,$query);
				                        while($row=mysqli_fetch_array($request)){
					                        Print "<tr>";
				                                Print '<td >'. $row['id'] . "</td>";
				                                Print '<td>'. $row['email'] ."</td>";
				                                Print '<td>'. $row['fname'] ."  ". $row['lname'] ."</td>";
				                                Print '<td>'. $row['mobilenumber'] . "</td>";
				                                Print '<td>'. $row['kname'] . "</td>";
                                                Print '<td> Edit </td>';
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