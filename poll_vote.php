

<?php


	$vote=@$_REQUEST['vote'];
	if(isset($_POST['pollquestion']))
{
	$pollquestion=@$_REQUEST['pollquestion'];
}
if(isset($_POST['first']))
{
	$first=$_POST['first'];
}

if(isset($_POST['second']))
{
	$second=$_POST['second'];
}
if(isset($_POST['third']))
{
	$third=$_POST['third'];
}
if(isset($_POST['fourth']))
{
	$fourth=$_POST['fourth'];
	
}




//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$first = $array[0];
$second= $array[1];
$third= $array[2];
$fourth= $array[3];

if ($vote == 0) {
  $first = $first + 1;
}
if ($vote == 1) {
  $second = $second + 1;
}
if ($vote == 0) {
  $third= $third + 1;
}
if ($vote == 0) {
  $fourth = $fourth + 1;
}

//insert votes to txt file
$insertvote = $first."||".$second."||".$third."||".$fourth;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>



<h2><i>Thank you for your Feedback:</i></h2>
<h3>Results</h3>
<table>

<tr>
<td>First Choice:</td>
	
<td>
	

<?php echo(100*round((int)$first/((int)$first+(int)$second+(int)$third+(int)$fourth),2)); ?>%
</td>
</tr>
<tr>
<td>Second Choice:</td>';
	
<td>

<?php echo(100*round((int)$second/((int)$first+(int)$second+(int)$third+(int)$fourth),2)); ?>%
</td>
</tr>
<tr>

<td>Third Choice:</td>
	
<td>

<?php echo(100*round((int)$third/((int)$first+(int)$second+(int)$third+(int)$fourth),2)); ?>%
</td>
</tr>
<tr>
<td>Fourth Choice:</td>
	
<td>

<?php echo(100*round((int)$fourth/((int)$first+(int)$second+(int)$third+(int)$fourth),2)); ?>%
</td>
</tr>
	
	
</table>
