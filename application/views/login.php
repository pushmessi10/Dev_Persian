<?php
$m=new MongoClient();
$db=$m->mydatabase;
$collection=$db->minfo;
$user=$_POST['Username'];
$pswd=$_POST['password'];
$disp = $collection->find();
foreach($disp as $doc)
	{
	if($pswd===$doc['pswd']){
		$f=1;
		}
		else{
		$f=0;	
		}
	}
if($f===1){
echo '<br><br><br><br><h1><b><center><a href="managing.html">Click here </a></center></b></h1>';
	}
else{
	echo "<br><br><br><br><h1><b><center>wrong username or password!!!!</center></b></h1>";  }?>

