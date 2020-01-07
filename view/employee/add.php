<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card shadow-lg">
                <div class="card-header">
                    <h2 class="text-center text-success">Add Employee</h2>
                </div>
                <div class="card-body">
                    <form action="index.php?action=add_form" method="post">
                        <div class="form-group">
                            <input type="text" name="fname" placeholder="first name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" placeholder="last name" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="province" class="form-control">
                                <option disabled selected>Select province..</option>
                                <?php
                                    foreach($data['province'] as $row){
                                ?>
                                <option value="<?php echo $row['pro_id'];?>"><?php echo $row['pro_name'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <a href="index.php?action=view" class="btn btn-danger">Back</a>
                        <input type="submit" class="btn btn-primary float-right" value="Submit">
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>