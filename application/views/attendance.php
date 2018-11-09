<html>
<body align="center"><br><br><br><br>
<h1> ATTENDANCE CHECKED!!!!</h1>
<?php
$m=new MongoClient();
echo "connected";
$db=$m->mydatabase;
echo"mydb database selected";
$collection=$db->sattendance;
$stud_id1=$_POST['11'];
$Batch_no1=$_POST['12'];
$Date1=$_POST['13'];
$Status1=$_POST['14'];
$dc=array("id1"=>$stud_id1,"batch1"=>$Batch_no1,"date1"=>$Date1,"status1"=>$Status1);
$inse=$collection->insert($dc);
$stud_id2=$_POST['21'];
$Batch_no2=$_POST['22'];
$Date2=$_POST['23'];
$Status2=$_POST['24'];
$dc1=array("id2"=>$stud_id2,"batch2"=>$Batch_no2,"date2"=>$Date2,"status2"=>$Status2);
$inse=$collection->insert($dc1);
$stud_id3=$_POST['31'];
$Batch_no3=$_POST['32'];
$Date3=$_POST['33'];
$Status3=$_POST['34'];
$dc2=array("id3"=>$stud_id3,"batch3"=>$Batch_no3,"date3"=>$Date3,"status3"=>$Status3);
$inse=$collection->insert($dc2);
$stud_id4=$_POST['41'];
$Batch_no4=$_POST['42'];
$Status4=$_POST['44'];
$Date4=$_POST['43']; 
$dc3=array("id4"=>$stud_id4,"batch4"=>$Batch_no4,"date4"=>$Date4,"status4"=>$Status4);
$inse=$collection->insert($dc3);
echo"document inserted successfully";  ?></body></html>

