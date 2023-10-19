
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <!-- fetch the data using id into the text box  -->
                        <h5>Employee Edit Page
                        <a href="<?php echo base_url('employee');?>" class="btn btn-danger float-right">Back</a>
                        </h5>
                    </div>
                    <div class="card body">
                        <form action="<?php echo base_url('employee/update/'.$employee->id) ?>" method="POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" value="<?= $employee->first_name ?>" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('first_name'); ?></small>
                            </div>
 
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" value="<?= $employee->last_name ?>" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('last_name'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Phone number</label>
                                <input type="text" name="phone" value="<?= $employee->phone ?>" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('phone'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="text" name="email" value="<?= $employee->email ?>" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('email'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" value="<?= $employee->address ?>" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('address'); ?></small>
                            </div>

                            <div class="form-group">
                            <label for="">Designation</label>
                            <select class="form-select" id="desId" name="desId">
                                <option value="">select</option>
                                <?php 
                                foreach($designation as $des){
                            
                                    $selected = ($des->id == $employee->desId) ? 'selected' : '';
                                    echo '<option value="' . $des->id . '" ' . $selected . '>' . $des->des_name . '</option>';
                                }
                                ?>
                            </select>
                            </div>


                            <div class="form-group">
                               <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  