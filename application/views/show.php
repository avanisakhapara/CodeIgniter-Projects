<table border="1">
<tr>
<th>Sr no</th>
<th>name</th>
<th> id</th>

<?php
foreach($data as $p)
{?>
<tr>
<td><?php
	echo $p->sr_no;?></td>
<td><?php
	echo $p->name;?></td>
<td><?php
	echo $p->id;?></td>

</tr>
<?php
}
?>
