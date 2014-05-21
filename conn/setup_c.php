<?php
$sql = "create table ". TABLE_CAFE ." ("
			."tableid int auto_increment primary key,"
			." tablepass varchar(32),"
			." usersid text )";
mysql_query($sql);//建立tb_cafe表




$i = 1;
while($i<=NUM_TABLE){
$sql = "insert into ".TABLE_CAFE." (tableid,usersid) values('".$i."','')";
mysql_query($sql);
$i++;
}//初始化tb_cafe表    



$sql = "create table ".TABLE_WISH." ("
			."userid int,"
			."content text,"
			."time datetime )";
$con = mysql_query($sql);//创建tb_wish表


echo "db setup complete!<br>";

?>