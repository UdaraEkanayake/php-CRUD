
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>How to insert Employee data into database
                        <a href="<?php echo base_url('employee');?>" class="btn btn-danger float-right">Back</a>
                        </h5>
                    </div>
                    <div class="card body">
                        <form action="<?php echo base_url('employee/store'); ?>" method="POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('first_name'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('last_name'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Phone number</label>
                                <input type="text" name="phone" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('phone'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="text" name="email" class="form-control">
                                <!-- form error -->
                                <small><?php echo form_error('email'); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="">Designation</label>
                                
                               <select class="form-select" id="desId" name="desId">
                                     <option value="">select</option>
                                    <?php 
                                        foreach($designation as $des){
                                            echo '<option value="'.$des->id.'">'.$des->des_name.'</option>';
                                        }
                                    ?>
                               </select>
                               
                            </div>

                            

                            <div class="form-group">
                               <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  