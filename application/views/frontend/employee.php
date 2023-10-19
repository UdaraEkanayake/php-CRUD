    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>How to fetch data from database
                        <a href="<?php echo base_url('employee/add');?>" class="btn btn-primary float-right">Add Employee</a>
                        </h5>
                    </div>
                    <div class="card body">
                        <table class="table table-bordered">
                            <thead> 
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone no</th>
                                    <th>Email ID</th>
                                    <th>Adress</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <!-- <th>Confirm Delete</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                   <?php foreach ($employee as $row) : ?>

                                   <tr>
                                    <!-- fetch the id from db employee table -->
                                   <td><?= $row->id; ?></td>
                                   <td><?php echo $row->first_name; ?></td>
                                   <td><?php echo $row->last_name; ?></td>
                                   <td><?php echo $row->phone; ?></td>
                                   <td><?php echo $row->email; ?></td>
                                   <td>><?php echo $row->address; ?></td>
                                   <td>
                                        <a href="<?php echo base_url('employee/edit/'.$row->id) ?>" class="btn btn-success btm-sm">Edit</a>
                                   </td>
                                   <td>
                                        <a href="<?php echo base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger btm-sm">Delete</a>
                                   </td>
                                   <!-- <td>
                                        <button type="button" class="btn btn-danger confirm-deletee" value="<?= $row->id; ?>">Confirm Delete</button>
                                   </td> -->
                                   </tr>
                                   <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    