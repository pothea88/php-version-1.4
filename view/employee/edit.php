<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h2 class="text-center text-success">Edit Employee</h2>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($data['edit_employee'])){
                            foreach ($data['edit_employee'] as $rows){
                    ?>
                    <form action="index.php?action=edit_form" method="post">
                        <input type="text" name="id" value="<?php echo $rows['emp_id']?>" hidden>
                        <div class="form-group">
                            <input type="text" value="<?php echo $rows['emp_fname']?>" name="fname" placeholder="first name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $rows['emp_lname']?>" name="lname" placeholder="last name" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="provinces" class="form-control">
                                <?php
                                    foreach($data['edit_province'] as $row){
                                ?>
                                <option <?php if($rows['emp_province_id'] == $row['pro_id']) { ?>selected="selected"<?php }?> value="<?php $row['pro_id'];?>"><?php echo $row['pro_name'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <a href="index.php?action=view" class="btn btn-danger">Back</a>
                        <input type="submit" class="btn btn-primary float-right" value="Submit">
                    </form>
                    <?php
                          }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>