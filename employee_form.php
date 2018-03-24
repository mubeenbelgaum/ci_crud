<!DOCTYPE html>
<html>
  <head>
    <title>Insert Employee records In Database</title>
  </head>

  <body>
    <form action="<?php echo site_url('employee/employee_form');?>" method="post">

          <table align="center">
              <tr>
                <td>Name: </td>
                <td>
                  <?php echo form_input(array('id'=>'emp_name',
                                    'name'=>'emp_name',
                                    'placeholder'=>'Name',
                                    'size'=>25));?>
                  </td>
                </tr>
                <tr>
                  <td>Gender: </td>
                  <td>
                    <?php echo form_input(array('id'=>'emp_gender',
                                      'name'=>'emp_gender',
                                      'placeholder'=>'Gender',
                                      'size'=>25));?>
                    </td>
                  </tr>

                  <tr>
                    <td>Email: </td>
                    <td>
                      <?php echo form_input(array('id'=>'emp_email',
                                        'name'=>'emp_email',
                                        'placeholder'=>'Email',
                                        'size'=>25));?>
                      </td>
                    </tr>

                    <tr>
                      <td>Phone: </td>
                      <td>
                        <?php echo form_input(array('id'=>'emp_phone',
                                          'name'=>'emp_phone',
                                          'placeholder'=>'Phone',
                                          'size'=>25));?>
                        </td>
                      </tr>

                      <tr>
                        <td>Address: </td>
                        <td>
                          <?php echo form_input(array('type'=>'textarea',
                                            'id'=>'emp_address',
                                            'name'=>'emp_address',
                                            'placeholder'=>'Address',
                                            'size'=>25));?>
                          </td>
                        </tr>

                        <tr>
                          <td></td>
                          <td>
                            <button type="submit" id="employee_submit">SAVE</button>
                          </td>
                        </tr>
                    </table>




                  </body>
                  </html>
