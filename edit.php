<?php
	include_once('includePedigree/head.php');
?>
	<?php
			if(!empty($_GET['id'])){
				$id = $_GET['id'];
				$id_exists = true;
				$query = "Select * from dogs WHERE id =".$id;
				$request = exec_query(DBNAME,$query);
                $count = mysqli_num_rows($request);
				if($count > 0){
					 $row=mysqli_fetch_array($request);	
	?>
	
	 <script>
   $(document).ready(function() {
         replaceClass("mainDiv", "banner-container", "banner-container2");
    }); 
  $( function() {
    $( "#dob" ).datepicker();
    $("#dp").datepicker().datepicker("setDate", new Date()).attr('readonly','readonly');
	<?php if($row['dg']=='Male'){
	?>	$('#dgMale').prop('checked','true');
	<?php
	}else{
	?>	
	$('#dgFemale').prop('checked','true');
	<?php
	}
	?>
  } );
    </script>
<?php 
print ("<h2>Edit Dog</h2>");
print ("<center><a href=\"home.php\">Back</a></center><br/><br/>");
print ("                <div class=\"card-body\">");
print ("                    <h2 class=\"title\">Registration Form</h2>");
print ("        <form action=\"edit.php\" method=\"post\">");
print ("            <input type='hidden' name='id' value = '".$row['id']."'/>");
print ("			<div class=\"row row-space\">");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Microchip Number</label>");
print ("                        <input class=\"input--style-4\" type=\"text\" name=\"mn\" id=\"mn\"  value='".$row['mn']."' >");
print ("                    </div>");
print ("                </div>");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Dog's Name</label>");
print ("                        <input class=\"input--style-4\" type=\"text\" name=\"dn\" id=\"dn\" value='".$row['dn']."' readonly >");
print ("                    </div>");
print ("                </div>");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Date of Birth</label>");
print ("                        <div class=\"input-group-icon\">");
print ("                            <input class=\"input--style-4 js-datepicker\" type=\"text\" name=\"dob\" id=\"dob\" value='". $row['dob']."'  >");
print ("                        </div>");
print ("                    </div>");
print ("                </div>");
if("Male"==$row['dg']){
  print ("              <div class=\"col-3\">");
  print ("                  <div class=\"input-group\">");
  print ("                      <label class=\"label\">Gender</label>");
  print ("                      <div class=\"p-t-10\">");
  print ("                          <label class=\"radio-container m-r-45\">Male");
  print ("                              <input type=\"radio\" name=\"dgmMale\" id=\"dgMale\" checked onclick=\"setGenderVal('male')\">");
  print ("                              <span class=\"checkmark\"></span>");
  print ("                          </label>");
  print ("                          <label class=\"radio-container\">Female");
  print ("                              <input type=\"radio\" name=\"dgFemale\" id=\"dgFemale\" onclick=\"setGenderVal('female')\">");
  print ("                              <span class=\"checkmark\"></span>");
  print ("                          </label>");
  print ("                      </div>");
  print ("                       <input type=\"hidden\" name=\"dg\" id=\"dg\" value=\"Male\">");
  print ("                  </div>");
  print ("              </div>");
}
else{
  print ("              <div class=\"col-3\">");
  print ("                  <div class=\"input-group\">");
  print ("                      <label class=\"label\">Gender</label>");
  print ("                      <div class=\"p-t-10\">");
  print ("                          <label class=\"radio-container m-r-45\">Male");
  print ("                              <input type=\"radio\" name=\"dgmMale\" id=\"dgMale\"  onclick=\"setGenderVal('male')\">");
  print ("                              <span class=\"checkmark\"></span>");
  print ("                          </label>");
  print ("                          <label class=\"radio-container\">Female");
  print ("                              <input type=\"radio\" name=\"dgFemale\" id=\"dgFemale\" checked onclick=\"setGenderVal('female')\">");
  print ("                              <span class=\"checkmark\"></span>");
  print ("                          </label>");
  print ("                      </div>");
  print ("                       <input type=\"hidden\" name=\"dg\" id=\"dg\" value=\"Male\">");
  print ("                  </div>");
  print ("              </div>");
}
print ("			<div class=\"row row-space\">");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Registration Number</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"drn\" id=\"drn\" value='".$row['drn']."'  >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Father</label>");
print ("                        <input class=\"input--style-4\" type=\"text\" name=\"df\" id=\"df\" value='".$row['df']."'  onkeyup=\"getFather(this.value)\" >");
print ("                    </div>");
print ("                </div>		");	
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Mother</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"dm\" id=\"dm\" value='".$row['dm']."'  >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Coat</label>");
print ("                     <select name=\"dc\" id=\"dc\" >");
if("LONG HAIR"==$row['dc']){
	print ("                            <option selected=\"selected\">LONG HAIR</option>");
	print ("                            <option>STOCK HAIR</option>");
}
else {
	print ("                            <option >LONG HAIR</option>");
	print ("                            <option selected=\"selected\">STOCK HAIR</option>");
}
print ("                        </select>");
print ("                    </div>");
print ("                </div>			");
print ("			</div>");
print ("			<div class=\"row row-space\">");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\"> Please selet color  </label>");
print ("								<select name=\"hc\" id=\"hc\">");
print ("									<option disabled=\"disabled\" selected=\"selected\">Choose option</option>");
if("Black & Tan"==$row['hc']){
	print ("							<option selected=\"selected\">Black & Tan</option>");
	print ("							<option>Black</option>");
	print ("							<option>Grey</option>");
	print ("							<option>Sable</option>");
}
else if("Grey"==$row['hc']){
	print ("							<option>Black & Tan</option>");
	print ("							<option>Black</option>");
	print ("							<option selected=\"selected\" >Grey</option>");
	print ("							<option>Sable</option>");
}
else if("Sable"==$row['hc']){
	print ("							<option>Black & Tan</option>");
	print ("							<option>Black</option>");
	print ("							<option>Grey</option>");
	print ("							<option selected=\"selected\" >Sable</option>");
}
else{
	print ("							<option>Black & Tan</option>");
	print ("							<option  selected=\"selected\" >Black</option>");
	print ("							<option>Grey</option>");
	print ("							<option>Sable</option>");
}
print ("								</select>");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Show Titles</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"st\" id=\"st\" value='".$row['st']."' >");
print ("                    </div>");
print ("                </div>		");	
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">HD</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"hd\" id=\"hd\" value='".$row['hd']."'>");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">ED</label>");
print ("                        <input class=\"input--style-4\"type=\"text\" name=\"ed\" id=\"ed\" value='".$row['ed']."' >");
print ("                    </div>");
print ("                </div>		");	
print ("			</div>");
print ("			<div class=\"row row-space\">");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">DNA</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"dna\" id=\"dna\" value='".$row['dna']."' >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Tattoo</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"tat\" id=\"tat\" value='".$row['tat']."' >");
print ("                    </div>");
print ("                </div>		");	
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Working Titles</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"wt\" id=\"wt\" value='".$row['wt']."' >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"input-group col-3\">");
print ("                    <div class=\"rs-select2 js-select-simple select--no-search\">");
print ("                     <label class=\"label\">KKL</label>");
print ("                     <select name=\"kkl\" id=\"kkl\">");
if(""==$row['kkl']){
	print ("                            <option disabled=\"disabled\" selected=\"selected\">Choose option</option>");
	print ("                            <option >KKL1</option>");
	print ("                            <option>Lebenszeit (lbz.)</option>");
}else if("KKL1"==$row['kkl']){
	print ("                            <option selected=\"selected\">KKL1</option>");
	print ("                            <option>Lebenszeit (lbz.)</option>");
}
else {
	print ("                            <option>KKL1</option>");
	print ("                            <option selected=\"selected\">Lebenszeit (lbz.)</option>");
}
print ("                        </select>");
print ("                        <div class=\"select-dropdown\"></div>");
print ("                    </div>");
print ("                </div>    ");
print ("			</div>");
print ("            <div class=\"row row-space\">");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Owner</label>");
print ("                        <input class=\"input--style-4\"type=\"text\" name=\"owner\" id=\"owner\" value='".$row['owner']."'  >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Address</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"oadd\" id=\"oadd\" value='".$row['oadd']."'   >");
print ("                    </div>");
print ("                </div>		");	
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Breeder(s) </label>");
print ("                        <input class=\"input--style-4\"type=\"text\" name=\"db\" id=\"db\" value='".$row['db']."' >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Address</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"badd\" id=\"badd\" value='".$row['badd']."'  >");
print ("                    </div>");
print ("                </div>		");	
print ("			</div>");
print ("            <div class=\"row row-space\">");
print ("                <div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Date Posted</label>");
print ("                        <input class=\"input--style-4\"type=\"text\" name=\"dp\" id=\"dp\" value='".$row['dp']."'  >");
print ("                    </div>");
print ("                </div>");
print ("				<div class=\"col-3\">");
print ("                    <div class=\"input-group\">");
print ("                        <label class=\"label\">Edited By</label>");
print ("                        <input class=\"input--style-4\"type=\"text\"name=\"addedby\" id=\"addedby\" readonly value='".$row['addedby']."'   >");
print ("                    </div>");
print ("                </div>		");	
print ("			</div>");
			
print ("			<div class=\"p-t-15\">");
print ("                <button class=\"btn btn--radius-2 btn--blue\" type=\"submit\">Submit</button>");
print ("           </div>		");
print ("		</form>");
print ("        </div>");
print ("        </div>");
print ("            </div>");
print ("                </div>");

				}
			}
		?>
<?php
	include_once('includePedigree/foot.php');
?>
<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST['id'];
		$mn = $_POST['mn'];
		$dn = $_POST['dn'];
		$dob = $_POST['dob'];
		$drn = $_POST['drn'];
		$dg = $_POST['dg'];
		$df = $_POST['df'];
		$dm = $_POST['dm'];
		$dc = $_POST['dc'];
		$hc = $_POST['hc'];
		$st = $_POST['st'];
		$hd = $_POST['hd'];
		$ed = $_POST['ed'];
		$dna = $_POST['dna'];
		$tat = $_POST['tat'];
		$wt = $_POST['wt'];
		$kkl = $_POST['kkl'];
		$owner = $_POST['owner'];
		$oadd = $_POST['oadd'];
		$db = $_POST['db'];
		$badd = $_POST['badd'];
		$dp = $_POST['dp'];
		$addedby = $_POST['addedby'];
		
        $query2 = "UPDATE IGNORE `pendingDogs` SET `mn`='".$mn."', `dn`='".$dn."', `dob`='".$dob."', `drn`='".$drn."', `dg`='".$dg."', `df`='".$df."', `dm`='".$dm."', `dc`='".$dc."', `hc`='".$hc."', `st`='".$st."', `hd`='".$hd."', `ed`='".$ed."', `dna`='".$dna."', `tat`='".$tat."', `wt`='".$wt."', `kkl`='".$kkl."', `owner`='".$owner."', `oadd`='".$oadd."', `db`='".$db."', `badd`='".$badd."',`dp`='".$dp."', `addedby`='".$addedby."' WHERE id ='".$id."'";

		$request2 = exec_query(DBNAME,$query2);

		$query3 = "DELETE FROM `dogs` WHERE `id` ='".$id."'";
		$request3 = exec_query(DBNAME,$query3);
			Print'<script>alert("Dog Updated Successfully!");</script>';
			Print '<script>window.location.assign("main.php");</script>';
	}
?>