<?php
include_once('head.php');
include_once('head2.php');

$user = $_SESSION['user'];
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
                                            <th  >Dog's Name</th>
											<th  > Dog's Registration Number</th>
											<th  > Dog's Gender</th>
											<th  > Dog's Father</th>
											<th  > Dog's Mother</th>
											<th  > Added By</th>
											<th  >View</th>
											<th  >Edit</th>
											<th  >Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th  >Dog's Name</th>
											<th  > Dog's Registration Number</th>
											<th  > Dog's Gender</th>
											<th  > Dog's Father</th>
											<th  > Dog's Mother</th>
											<th  > Added By</th>
											<th  >View</th>
											<th  >Edit</th>
											<th  >Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                       
			                        <?php
					                    $query ="Select * from dogs";
				                         $request = exec_query(DBNAME,$query);
				                        while($row=mysqli_fetch_array($request)){
					                        Print "<tr>";
				                                Print '<td >'. $row['dn'] . "</td>";
				                                Print '<td>'. $row['drn'] ." -- ".$row['drn Others']."</td>";
				                                Print '<td>'. $row['dg'] ."</td>";
				                                Print '<td>'. $row['df'] . "</td>";
				                                Print '<td>'. $row['dm'] . "</td>";
				                                Print '<td>'. $row['addedby'] ."</td>"; 
												Print '<td align="center"><a href="view.php?fromPage=home&id='.$row['id'].'">view</a> </td>';
												Print '<td align="center"><a href="edit.php?id='.$row['id'].'&user='.$user.'">edit</a> </td>';
												Print '<td align="center"><a href="#" onclick = "deleteRow('.$row['id'].')">delete</a> </td>';
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