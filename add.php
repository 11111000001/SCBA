<?php
	include_once('head.php');
    
   if(isset($_SESSION['POST'])){
    $post = unserialize($_SESSION['POST']);
   } $mn = '';
    $dn = '';$dob = '';$drn = '';$drnOthers =''; $dg ='';
	$df ='' ;$dm ='' ; $dc = ''; $hc = '';$st = '';$hd ='';
    $ed =''; $dna ='';$tat ='';$wt ='';$kkl = '';
	$owner ='';$oadd ='';$db ='';$badd ='';
	$dp ='';$addedby ='';$drnNum ='';
        
     if($_POST != null){
        $mn =$_POST['mn'];
		$dn =$_POST['dn'];
		$dob =$_POST['dob'];
		$drn =$_POST['drn'];
        $drnOthers =$_POST['drnOthers'];
		$dg =$_POST['dg'];
		$df =$_POST['df'];
		$dm =$_POST['dm'];
		$dc =$_POST['dc'];
		$hc =$_POST['hc'];
		$st =$_POST['st'];
		$hd =$_POST['hd'];
        $ed =$_POST['ed'];
		$dna =$_POST['dna'];
		$tat =$_POST['tat'];
		$wt =$_POST['wt'];
		$kkl = $_POST['kkl'];
		$owner =$_POST['owner'];
		$oadd =$_POST['oadd'];
		$db =$_POST['db'];
		$badd =$_POST['badd'];
		$dp =$_POST['dp'];
		$addedby =$_POST['addedby'];
		$drnNum =$_POST['drnNum'];
    }
?>
   <script>
   $(document).ready(function() {
         replaceClass("mainDiv", "banner-container", "banner-container2");
    }); 
  $( function() {
    $( "#dob" ).datepicker();
    $("#dp").datepicker().datepicker("setDate", new Date()).attr('readonly','readonly');
  } );
    </script>
		<div style="display:inline-block;float:left;margin-left:15px;" class="label"><h2>Register Dog</h2></div>
	    <div style="display:inline-block;float:right;margin-right:15px;" class="label"><a href="home.php">Back</a></div>
        <br/><br/><br/><br/>
        <div class="addDivStyle">
        <form action="add.php" method="post">
			<div class="row row-space">
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Microchip Number</label>
                        <input class="input--style-4" type="text" name="mn" id="mn" value="<?php $mn ?>">
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Dog's Name</label>
                     <?php
                        if (!empty($_GET['dogName'])) {
                            $dogName = $_GET['dogName'];
                            print "<input class=\"input--style-4\" type=\"text\" name=\"dn\" id=\"dn\" value='".$dogName."' readonly required=\"required\">";
                        }
                        else{
                            print "<input class=\"input--style-4\" type=\"text\" name=\"dn\" id=\"dn\" required=\"required\" value=".$dn.">";
                        }
                        ?>
                     </div>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Date of Birth</label>
                        <div class="input-group-icon">
                            <input class="input--style-4 js-datepicker" type="text" name="dob" id="dob" value="<?php $dob ?>">
                        </div>
                    </div>
                </div>
            </div>
			<div class="row row-space">
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Gender</label>
                        <div class="p-t-10">
                            <label class="radio-container m-r-45">Male
                                <input type="radio" name-"dgmMale" id="dgMale" checked onclick="setGenderVal('male')">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container">Female
                                <input type="radio" name="dgFemale" id="dgFemale" onclick="setGenderVal('female')">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                         <input type="hidden" name="dg" id="dg" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <div class="form-group form-check" id="scbaCheckBox">
                            <input type="checkbox" class="form-check-input" id="scba" onclick="getSCBACounter();">
                            <label class="form-check-label" for="scba">SCBA DOG?</label>
                            <input type="hidden" name="drnNum" id="drnNum" value="<?php $drnNum ?>">
                        </div>
                    </div>
                </div>
					<div class="col-4">
                    <div class="input-group" id="drnRo">
                        <label class="label">Registration Number</label>
                        <input class="input--style-4" type="text"name="drn" id="drn"  value="<?php $drn ?>"readonly>
                    </div>
                </div>    			
			</div>
			<div class="row row-space">
               <div class="col-4" id="othersDRN">
                    <div class="input-group">
                        <label class="label">Others Number</label>
                        <input class="input--style-4" type="text" name="drnOther_0" id="drnOther_0" readonly>
                        <button class="btn btn--radius-2 btn--blue" onclick="addOthers()">+</button>
                        <input type="hidden"  name="drnOthers" id="drnOthers">
                        <input type="hidden"  name="othersCounter" id="othersCounter" value="0">
                    </div>
                </div>
				<div class="col-4">
                    <div class="input-group" id="dfSelectRo">
                        <label class="label">Father</label>
                         <select name="dfSelect" id="dfSelect" onchange="setdfValue('fromSelect');">
                         <option disabled="disabled" selected="selected">Choose Father</option>
                         <?php 
                            $query = "Select dn from dogs WHERE dg = 'Male'";
				            $request = exec_query(DBNAME,$query);
                           while($row = mysqli_fetch_array($request)){
                                 print "<option>".$row['dn']."</option>";
                            }
                        ?>
                        </select>
                    </div>
                     <div class="form-group form-check" id="scbaCheckBox">
                            <input type="checkbox" class="form-check-input" id="newFatherChckbox" onclick="showInput('father');">
                            <label class="form-check-label" for="newFather">New Father</label>
                            <input type="hidden" name="newFather" id="newFather">
                        </div>
                        <div class="input-group" id="dfTxtRo">
                        <label class="label">Father</label>
                        <input class="input--style-4" type="text"name="dfText" id="dfText" onchange="setdfValue('fromText');">
                    </div>
                    <input class="input--style-4" type="hidden"name="df" id="df"  value="<?php $df ?>" >
                </div> <div class="col-4">
                    <div class="input-group" id="dmSelectRo">
                        <label class="label">Mother</label>
                         <select name="dmSelect" id="dmSelect" onchange="setdmValue('fromSelect');">
                         <option disabled="disabled" selected="selected">Choose Mother</option>
                         <?php 
                            $query = "Select dn from dogs WHERE dg = 'Female'";
				            $request = exec_query(DBNAME,$query);
                           while($row = mysqli_fetch_array($request)){
                                 print "<option>".$row['dn']."</option>";
                            }
                        ?>
                        </select>
                    </div>
                     <div class="form-group form-check" id="scbaCheckBoxM">
                            <input type="checkbox" class="form-check-input" id="newMotherChckbox" onclick="showInput('mother');">
                            <label class="form-check-label" for="newFather">New Mother</label>
                            <input type="hidden" name="newMother" id="newMother">
                        </div>
                        <div class="input-group" id="dmTxtRo">
                        <label class="label">Mother</label>
                        <input class="input--style-4" type="text"name="dmText" id="dmText" onchange="setdmValue('fromText');">
                    </div>
                    <input class="input--style-4" type="hidden"name="dm" id="dm"   value="<?php $dm ?>">
                </div>			
			</div>
			<div class="row row-space">
				<div class="col-4">
                    <div class="rs-select2 js-select-simple select--no-search">
                     <label class="label">Coat</label>
                     <select name="dc" id="dc">
                            <option disabled="disabled" selected="selected">Choose option</option>
                            <option>Long Hair</option>
                            <option>Stock Hair</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                </div>			
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Color</label>
                        <select name="hc" id="hc">
                            <option disabled="disabled" selected="selected">Choose option</option>
                            <option>Black & Tan</option>
                            <option>Black</option>
                            <option>Grey</option>
                            <option>Sable</option>
                        </select>
                    </div>
                </div>
				<div class="col-4">
                    <div class="input-group">
                        <label class="label">Show Titles</label>
                        <textarea class="input--style-4" name="st" id="st"  value="<?php $st ?>"></textarea>
                    </div>
                </div>			
			</div>
			<div class="row row-space">
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">HD</label>
                        <input class="input--style-4" type="text"name="hd" id="hd" value="<?php $hd ?>">
                    </div>
                </div>
				<div class="col-4">
                    <div class="input-group">
                        <label class="label">ED</label>
                        <input class="input--style-4" type="text"name="ed" id="ed" value="<?php $ed ?>" >
                    </div>
                </div>			
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">DNA</label>
                        <input class="input--style-4" type="text"name="dna" id="dna" value="<?php $dna ?>">
                    </div>
                </div>		
			</div>
			<div class="row row-space">
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Tattoo</label>
                        <input class="input--style-4" type="text"name="tat" id="tat" value="<?php $tat ?>" >
                    </div>
                </div>	
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Working Titles</label>
                        <textarea class="input--style-4" name="wt" id="wt" value="<?php $wt ?>" ></textarea>
                    </div>
                </div>
				<div class="input-group col-4">
                    <div class="rs-select2 js-select-simple select--no-search">
                     <label class="label">KKL</label>
                     <select name="kkl" id="kkl">
                            <option disabled="disabled" selected="selected">Choose option</option>
                            <option>KKL1</option>
                            <option>Lebenszeit (lbz.)</option>
                        </select>
                        <div class="select-dropdown"></div>
                    </div>
                </div>  		
			</div>
            <div class="row row-space">
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Owner</label>
                        <input class="input--style-4" type="text" name="owner" id="owner" value="<?php $owner ?>">
                    </div>
                </div>
				<div class="col-4">
                    <div class="input-group">
                        <label class="label">Address</label>
                        <input class="input--style-4" type="text" name="oadd" id="oadd"  value="<?php $oadd ?>" >
                    </div>
                </div>	
                <div class="col-4">
                    <div class="input-group">
                        <label class="label">Breeder(s) </label>
                        <input class="input--style-4" type="text" name="db" id="db"  value="<?php $db ?>"  >
                    </div>
                </div>
            </div>
            <div class="row row-space">
				<div class="col-3">
                    <div class="input-group">
                        <label class="label">Address</label>
                        <input class="input--style-4" type="text" name="badd" id="badd"   value="<?php $badd ?>"  >
                    </div>
                </div>			
                <div class="col-3">
                    <div class="input-group">
                        <label class="label">Date Posted</label>
                        <input class="input--style-4" type="text" readonly name="dp" id="dp"  value="<?php $dp ?>"  >
                    </div>
                </div>
				<div class="col-3">
                    <div class="input-group">
                        <label class="label">Added By</label>
                        <input class="input--style-4" type="text" readonly name="addedby" id="addedby"  value="<?php print $_GET['user'] ?>">
                    </div>
                </div>			
			</div>
			<div class="p-t-15" style="text-align:center">
                <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
            </div>		
		</form>
        </div>
<?php
	include_once('foot.php');
?>

<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$mn =$_POST['mn'];
		$dn =$_POST['dn'];
		$dob =$_POST['dob'];
		$drn =$_POST['drn'];
        $drnOthers =$_POST['drnOthers'];
		$dg =$_POST['dg'];
		$df =$_POST['df'];
		$dm =$_POST['dm'];
		$dc =$_POST['dc'];
		$hc =$_POST['hc'];
		$st =$_POST['st'];
		$hd =$_POST['hd'];
        $ed =$_POST['ed'];
		$dna =$_POST['dna'];
		$tat =$_POST['tat'];
		$wt =$_POST['wt'];
		$kkl = $_POST['kkl'];
		$owner =$_POST['owner'];
		$oadd =$_POST['oadd'];
		$db =$_POST['db'];
		$badd =$_POST['badd'];
		$dp =$_POST['dp'];
		$addedby =$_POST['addedby'];
		$drnNum =$_POST['drnNum'];
		$bool = true;

		
            $query1 ="SELECT drn FROM `dogs` where drn='".$drn."'";
            $request1 = exec_query(DBNAME,$query1);
            $row=mysqli_fetch_array($request1);
            if($row['drn'] == $drn){
                alert('Registration NUmber already exist!!');
    			$_SESSION['POST'] = serialize($_POST);                    
                Print '<script>window.location.assign("home.php");</script>';
                $bool = false;
            }
       
        if($bool){
            $query2 ="INSERT INTO `pendingDogs`(`mn`, `dn`, `dob`, `drn`, `drn Others`, `dg`, `df`, `dm`, `dc`, `hc`, `st`, `hd`, `ed`, `dna`, `tat`, `wt`, `kkl`, `owner`, `oadd`, `badd`, `db`, `dp`, `addedby`)
                      VALUES ('".$mn."','".$dn."','".$dob."','".$drn."','".$drnOthers."','".$dg."','".$df."','".$dm."','".$dc."','".$hc."','".$st."','".$hd."','".$ed."','".$dna."','".$tat."','".$wt."','".$kkl."','".$owner."','".$oadd."','".$badd."','".$db."','".$dp."','".$addedby."')";

            $request2 = exec_query(DBNAME,$query2);

 
			$double = (double)$drnNum;
			$nxtCounter = $double + 1;
            $query2 = "UPDATE `scbacounter` SET `Counter`=".$nxtCounter;
			$request2 = exec_query(DBNAME,$query2);	

			Print'<script>alert("Dog Registered Successfully!");</script>';
			Print '<script>window.location.assign("home.php");</script>';
            }
		}
?>
