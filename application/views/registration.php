<?php
$m=new MongoClient();
$db=$m->mydatabase;
         $collection=$db->sinfo;
         $name=$_POST['Name'];
         $Phno=$_POST['Ph_no'];
         $add=$_POST['Address'];
         $email=$_POST['eid'];
          $DOB=$_POST['date'];
          $Dtype=$_POST['dance_type']; 
          $disp = $collection->find();
	foreach($disp as $doc)
	{
		if($email===$doc['email']){
		$f=1;
}
		else{
		$f=0;	
		}
		}
	if($f===1){
	echo"Email already exists";
	}
	else{
$dc=array("name"=>$name,"phno"=>$Phno,"add"=>$add,"email"=>$email,"dob"=>$DOB,"dtype"=>$Dtype);
	$inse=$collection->insert($dc); echo "<center>";
echo "<h1>REGISTERED SUCCESSFULLY!!!!</h1><br/>";
	echo "document inserted successfully";
echo "<br /><br />";
	echo "<h2><u><b><a href='http://localhost/stud_info.html'>BACK</a></u></b></h2>";
echo "</center>";  } ?>

