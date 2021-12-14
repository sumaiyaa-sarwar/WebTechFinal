<html>

<body>

<table border="1">

<tr>
<td>OfferID</td>
<td>Headline</td>
<td>Catagory</td>
<td>Grade</td>
<td>City</td>
<td>Subjects</td>
<td>Timing</td>
<td>Area</td>
<td>Salary</td>
<td>StudentName</td>
<td>StudentPhone</td>
<td>StudentUsername</td>
<td>GenderPreference</td>
<td>MediaUsername</td>
<td>OfferStatus</td>
</tr>


<?php 

$data = file_get_contents("Offer.json");
$mydata = json_decode($data);

$count=0;
foreach($mydata as $myobject)
{
    $count++;
    
}

for($i=0;$i<$count;$i++)
{
    
    echo "<tr><td>".$mydata[$i]->OfferID."</td>";
    echo "<td> ".$mydata[$i]->Headline."</td>";
    echo "<td>".$mydata[$i]->Catagory."</td>";
    echo "<td>".$mydata[$i]->Grade."</td>";
    echo "<td>".$mydata[$i]->City."</td>";
    echo "<td>".$mydata[$i]->Subjects."</td>";
    echo "<td>".$mydata[$i]->Timing."</td>";
    echo "<td>".$mydata[$i]->Area."</td>";
    echo "<td>".$mydata[$i]->Salary."</td>";
    echo "<td>".$mydata[$i]->StudentName."</td>";
    echo "<td>".$mydata[$i]->StudentPhone."</td>";
    echo "<td>".$mydata[$i]->StudentUsername."</td>";
    echo "<td>".$mydata[$i]->GenderPreference."</td>";
    echo "<td>".$mydata[$i]->MediaUsername."</td>";
    echo "<td>".$mydata[$i]->OfferStatus."</td></tr>";

}


?>
</table>

</body>



</html>

