<!doctype html>
<?php
    require "./connect_db.php";
    $sql = " SELECT * FROM `signup`";
    $result = mysqli_query($connect,$sql);
  ?>

<html>

<head>

</head>

<body>

    <table border = "2">
        <tr>
            <th> user </th>
            <th> pass </th>
            <th> name </th>
            <th> lname </th>
            <th> id </th>
            <th> faculty </th>
            <th> department </th>
            <th> tel </th>
            <th> email </th>
            <th> facebook </th>
            <th> lineid </th>
            <th> address </th>

        </tr>
        <?php
        //ส่วนที่ดึงข้อมูลมาแสดงในแถว while loop
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>
        
        <tr>
             <td>  <?php echo $row['user']; ?>  </td>
             <td>  <?php echo $row['pass']; ?>  </td>
             <td>  <?php echo $row['fname']; ?>  </td>
             <td>  <?php echo $row['lname']; ?>  </td>
             <td>  <?php echo $row['id']; ?>  </td>
             <td>  <?php echo $row['faculty']; ?>  </td>
             <td>  <?php echo $row['department']; ?>  </td>
             <td>  <?php echo $row['tel']; ?>  </td>
             <td>  <?php echo $row['email']; ?>  </td>
             <td>  <?php echo $row['facebook']; ?>  </td>
             <td>  <?php echo $row['lineid']; ?>  </td>
             <td>  <?php echo $row['address']; ?>  </td>
            
           
        </tr>
            <?php } ?>
    </table>

</body>



</html>