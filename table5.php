<?php 
    $con=new mysqli("localhost","root","","kinjal");
    $select="SELECT * FROM `reg`";
    $res=$con->query($select);
    while($a=$res->fetch_array())
    {
?>
<tr>
        <td><?php echo $a['name']; ?></td>
        <td><?php echo $a['email']; ?></td>
</tr>
<?php }?>

