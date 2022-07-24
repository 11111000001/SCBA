<?php

function echoheader() 
	{
		$returnlogo=getlogo();
		$row=mysqli_fetch_array($returnlogo);
		
		$resulttext=gethead();
		
		 echo "<form method='POST'>
					<div class='greycolor cmsheadform'> 
						<p>Logo:&nbsp;</p>
						<div class='center'><img class='center' src='../assets/".$row['logo']."'></div>
						<div class='mrgntop'>
						Select image to upload:
						<input type='file' name='Upload' id='Upload'>
						<input type='submit' value='Upload Image' name='submit'>
						</div>
					</div>
					<div class='clrbth'></div>
					<div  class='cmsheadform goldcolor'>
					";
					while($rowindex=mysqli_fetch_array($resulttext)){	
						echo"
							<div class='mrgntop'>Text ".$rowindex['headid'].":&nbsp;
						<input type='text' name='text".$rowindex['headid']."' class='center' value='".$rowindex['p']."'>
						
						<input type='button' name='save".$rowindex['headid']."' value='save'>&nbsp;
						<input type='button' name='delete' value='delete'></div>
						<br>
					";
					}
					echo "<input type='text' name='addtext' class='center margin' value=''>
							<input type='button' name='addtxt' value='add'>
					</div></form>";
	}
function echoindex2()
	{
		
		$resultindex2=getindex_2();
		$rowindex2=mysqli_fetch_array($resultindex2);
		
		echo "
		<form method='POST' enctype='multipart/form-data' action='upload.php'>
				<div class='cmsdiv '>
				<p >Raiya word:<p>
				<img src='../assets/".$rowindex2['img']."' alt=''>				
				</div>
				<div>
				Select image to upload:
				<input type='file' name='upload-image'>
				</div>
				<DIV class='center'>
				<p>Text 1:</p>
				<textarea  rows='20' cols='80' name='up_text1'>".$rowindex2['p']."</textarea>
				<p>Text 2:</p>
				<textarea  rows='20' cols='80' name='up_text2'>".$rowindex2['p2']."</textarea>
				<p>Button Content:</p>
				<textarea  rows='20' cols='80' name='up_btn_content'>".$rowindex2['p3']."</textarea>
				</DIV>
				
			";
	
	}

	function echoindex1()
	{
		$resultindex1=getindex_1();
		while($rowindex1=mysqli_fetch_array($resultindex1)){ 	
					echo" 
				<DIV  class='center margin'>
				<p>".$rowindex1['classes']."</p>
				<textarea  rows='20' cols='80' name='down_text".$rowindex1['div_id']."'>".$rowindex1['news_text']."</textarea>
				</DIV>
				";
				  }
		
	}
	
function echobackgoundimg()
	{
		$background=getlogo2();
		$rowbackground=mysqli_fetch_array($background);
		
		echo "<form mathod=POST enctype='multipart/form-data' action='upload.php'>
				<div class='cmsdiv'>
				<p >Raiya word:<p>
				<img src='../assets/".$rowbackground['logo']."'  style='height:220px;' alt=''>				
				</div>
				<div>
				Select image to upload:
				<input type='file' name='Upload-background' >
				</div>
				";
	}	
	
function echocmstrophy()
	{		
	$resulttrophy=echotrophy();
		while($rowtrophy=mysqli_fetch_array($resulttrophy))
				{
					echo "<form mathod=POST enctype='multipart/form-data' action='upload.php'>
						  <div class='cmsdiv'><img src='../assets/".$rowtrophy['image']."'></div>
						  <div>Select image to upload: <input type='file' name='pic-trophy".$rowtrophy['trophy_id']."'></div>
						  <div><input type='text' name='type' class='cmsheadform' value=".$rowtrophy['type'].">
						  </div>
						  <div class='cmsdiv'><img class='transformY' src='../assets/".$rowtrophy['logo']."'></div>
						   <div>Select image to upload: <input type='file' name='log-trophy".$rowtrophy['trophy_id']."'></div>
							<div><input type='text' name='txt' class='cmsheadform' value=".$rowtrophy['txt'].">
							</div>";}
					echo"
						  <div class='center'><input class='selectoption' type='submit' name='updatetrophy' value='update'></div>
						  </form>";
	}
	

function echoconditionresult()
	{
	$resultconditions=echoconditions();
	$rowconditions=mysqli_fetch_array($resultconditions);
		echo "<div class='center'><textarea rows='20' cols='80'>".$rowconditions['condition_text']."</textarea>
				<div class='center'><input class='selectoption'type='submit' name='submit' value='Save'></div>
				</div>";
	}	

function echoresultorganizers()
	{
		echo "<div class='center'>";
		
		$resultorganizers=echo_organizers();
		while($roworganizers=mysqli_fetch_array($resultorganizers))
			{
				echo  "
						<div>Want to update??
						<br><textarea rows='20' cols='80'>".$roworganizers['div_txt']."</textarea></div>
						<br>
						<div class='mrgntop'><img src='../assets/".$roworganizers['div_photo']."'></div>
						<div class='margin'>
						Select image to upload:
						<input type='file' name='Upload' id='Upload'>
						<input type='submit' value='Upload Image' name='submit'>
						</div>
					   ";
			}
		echo  "<div class='center'><input class='selectoption' type='submit' name='submit' value='Save'></div>
			   </div>";
			
	}	

	
function updateindex($up_text1,$up_text2,$up_btn,$down_text1,$down_text2,$down_text3)
{
	
		$update_index2="update index_2 set p='".$up_text1."' ,p2='".$up_text2."' ,p3='".$up_btn."'";
		$result_update_index2=exec_query(DBNAME,$update_index2);

		$update_index1="update index_1 set news_text='".$down_text1."' where news_id=1";
		$result_update_index1=exec_query(DBNAME,$update_index1);

		$update_index1="update index_1 set news_text='".$down_text2."' where news_id=2";
		$result_update_index1=exec_query(DBNAME,$update_index1);
		
		$update_index1="update index_1 set news_text='".$down_text3."' where news_id=3";
		$result_update_index1=exec_query(DBNAME,$update_index1);
		
	
}		
	
function upload_image($img,$type)
{
	if(!empty($img['name']))
	{
		$file_name=$img['name'];
		if(stripos($img['name'],'.jpg')!==false||stripos($img['name'],'.jpeg')!==false||stripos($img['name'],'.png')!==false
			||stripos($img['name'],'.svg')!==false)
			{
			switch($type){
				
				case 'logo':
							$old_file="../assets/ra3iya.svg";
							$new_file="../assets/uploaded/logo ".date('d-m-y (H_i_s)').".svg";
							copy($old_file,$new_file);
							
							$tmp=$img['tmp_name'];
							if(move_uploaded_file($tmp,$old_file))
								header("location:CMS.php");		
							break;
				
				case 'bg':	
							$old_file="../assets/background.svg";
							$new_file="../assets/uploaded/bg ".date('d-m-y (H_i_s)').".svg";
							copy($old_file,$new_file);
							
							$tmp=$img['tmp_name'];
							if(move_uploaded_file($tmp,$old_file))
								header("location:CMS.php");		
							break;
							
			}	
											}
			else{
			echo "Uploaded file not an image!";
				}
	}
	
}
	
?>