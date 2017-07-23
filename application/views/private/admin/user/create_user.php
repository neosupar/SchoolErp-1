<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 11:41 PM
 */?>
<div class="container">
    <div class="row">
        <p style="font-size: 20px; margin-top:0px;" class="text-info">Create User</p>
        <div class="col-lg-4">
            <?php echo form_open('admin/masters_class', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'class', 'class' => 'form-control',
                        'placeholder' => 'Enter Username',
                        'value' => set_value('class')]);
                    ?>
                    <?php echo form_error('class'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Position</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'prefix', 'class' => 'form-control',
                        'placeholder' => 'Enter Position',
                        'value' => set_value('prefix')]);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'incharge', 'class' => 'form-control',
                        'placeholder' => 'Enter Password',
                        'value' => set_value('incharge')]);
                    ?>

                </div>
            </div>
            <?php echo form_submit(['name' => 'submit', 'value' => 'Save', 'class' => 'btn btn-info',
                'style' => 'margin-left:45px; margin-top:20px;']),
            form_reset(['name' => 'reset', 'value' => 'reset', 'class' => 'btn btn-warning',
                'style' => 'margin-top:20px;']); ?>
            <?php echo form_close();?>

            <p style="font-size: 20px; margin-top: 40px;" class="text-info">Enter Username to be deletd</p>
            <?php echo form_open('admin/masters_class_del', ['class' => 'form-horizontal']); ?>
            <div class="form-group">
                <label for="inputText" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-10">
                    <?php  echo form_input(['name' => 'class_delete', 'class' => 'form-control',
                        'placeholder' => 'Enter Username to be deleted',
                        'value' => set_value('class_delete')]);
                    ?>
                    <?php echo form_error('class_delete'); ?>
                </div>
                <input type="submit" name="del_class" class="btn btn-danger" value="DELETE" style="margin-left: 50px; margin-top: 20px;">
                <?php  form_close(); ?>
            </div>

        </div>


        <div class="col-lg-8">
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Position</th>
                </tr>
                </thead>
                <tbody>
                <? //php if (count($det_class)): ?>
                    <?  //php foreach($det_class as $class_det): ?>
                        <tr>
                        </tr>
                <?php //endforeach; ?>
                <?php // else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php //endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>









