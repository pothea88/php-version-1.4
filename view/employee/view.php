<div class="container">
    <a href="index.php?action=add_emp" class="btn btn-success">Add New</a>
    <br><br>
    <div class="row">
        <table class="table">
            <thead>
                <tr> 
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Province name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                $id = 1;
                if(isset($data['employee'])){
                    foreach($data['employee'] as $row){     
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['emp_id']?></td>
                    <td><?php echo $row['emp_fname']." ".$row['emp_lname'];?></td>
                    <td><?php echo $row['pro_name'];?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $row['emp_id'];?>">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $row['emp_id'];?>">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
                $id++;
                   }
                }
            ?>
        </table>
    </div>
</div>