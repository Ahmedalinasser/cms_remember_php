<?php 


$queryTodbConnection = mysqli_query($connect, $query);
/*
this function is connecting the query to the database so it can perform it's dute
*/

$outPuts = mysqli_fetch_assoc($queryTodbConnection);
// 'mysqli_fetch_assoc' will fetich only the first row inside the database so it needs 
// to be perfomed according to the number of row that match the DB 
// so it needs the  while loop becasue it will loop till the last row in DB
// not like foreach it will take the output and will put is in the $value after "as"
// it will return the value in assoc array. 





?>