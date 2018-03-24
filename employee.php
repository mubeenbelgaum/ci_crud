<!DOCTYPE html>
<html>
  <head>
    <title>Select Employee records In Database</title>
  </head>

  <body>


          <table align="center">
            <tr>
                <th>Employee Id</th>
                <th>Employee Name</th>
                <th>Employee Gender</th>
                <th>Employee Email</th>
                <th>Employee Phone</th>
                <th>Employee Address</th>


            </tr>

            <?php foreach ($arrData as $row) { ?>
              <tr>
                <td><?php echo $row['emp_id'] ?></td>
                <td><?php echo $row['emp_name'] ?></td>
                <td><?php echo $row['emp_gender']?></td>
                <td><?php echo $row['emp_email'] ?></td>
                <td><?php echo $row['emp_phone']?></td>
                <td><?php echo $row['emp_address'] ?></td>
              </tr>
            <?php  }?>

          </table>




  </body>
  </html>
