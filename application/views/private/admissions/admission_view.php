<div class="container">
<div class="row">
    <?php echo form_open('admissions/search_view', ['class' => 'form-horizontal']); ?>
        <div class="form-group">
            <label for="tags"></label>
            <div class="col-lg-1 text-info" style="font-size: 19px;">Search:</div>
            <div class="col-lg-2">
                <?php $options = [
                    'admission_no'=>'Admission No.',
                    'student_first_name' => 'Student Name',
                    'fathers_first_name'=>'Father Name',
                    'mothers_first_name'=>'Mother Name',
                    'student_roll_no'=>'Roll No',
                    'city'=>'City',
                    'f_mobile'=>'Contact No.',
                    'email'=>'Email',
                    'student_section' => 'Section',
                    'gender' => 'Gender',
                    'student_dob'=>'DOB',
                    'route'=>'Route',
                    'category' => 'Category',
                    'scholarship_no'=>'Scholarship No.',
                    'aadhar_uid'=>'Aadhar UID No.',
                    'family'=>'Family',
                    'house'=>'House',
                    'caste'=>'Caste',
                    'student_class'=>'Class'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_1', $options, set_value('search_col_1'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-1">
                <?php echo form_input(['name' => 'sb1', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb1')]); ?>
                <?php echo form_error('sb1'); ?>
            </div>
            <div class="col-lg-2">
                <?php $options = [
                    'admission_no'=>'Admission No.',
                    'student_first_name' => 'Student Name',
                    'fathers_first_name'=>'Father Name',
                    'mothers_first_name'=>'Mother Name',
                    'student_roll_no'=>'Roll No',
                    'city'=>'City',
                    'f_mobile'=>'Contact No.',
                    'email'=>'Email',
                    'student_section' => 'Section',
                    'gender' => 'Gender',
                    'student_dob'=>'DOB',
                    'route'=>'Route',
                    'category' => 'Category',
                    'scholarship_no'=>'Scholarship No.',
                    'aadhar_uid'=>'Aadhar UID No.',
                    'family'=>'Family',
                    'house'=>'House',
                    'caste'=>'Caste',
                    'student_class'=>'Class'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_2', $options, set_value('search_col_2'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-1">
                <?php echo form_input(['name' => 'sb2', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb2')]); ?>
            </div>
            <div class="col-lg-2">
                <?php $options = [
                    'admission_no'=>'Admission No.',
                    'student_first_name' => 'Student Name',
                    'fathers_first_name'=>'Father Name',
                    'mothers_first_name'=>'Mother Name',
                    'student_roll_no'=>'Roll No',
                    'city'=>'City',
                    'f_mobile'=>'Contact No.',
                    'email'=>'Email',
                    'student_section' => 'Section',
                    'gender' => 'Gender',
                    'student_dob'=>'DOB',
                    'route'=>'Route',
                    'category' => 'Category',
                    'scholarship_no'=>'Scholarship No.',
                    'aadhar_uid'=>'Aadhar UID No.',
                    'family'=>'Family',
                    'house'=>'House',
                    'caste'=>'Caste',
                    'student_class'=>'Class'
                ];
                $attribute_class = [
                    'class' => 'form-control',
                    'id' => 'select',
                ];
                echo form_dropdown('search_col_3', $options, set_value('search_col_3'), $attribute_class);
                ?>
            </div>
            <div class="col-lg-1">
                <?php echo form_input(['name' => 'sb3', 'class' => 'form-control',
                    'placeholder' => 'Enter',
                    'value' => set_value('sb3')]); ?>
            </div>
            <div class="col-lg-1">
                <input type="submit" class="btn btn-info" name="submit" value="Search">
            </div>
        </div>
    <?php echo form_close();?>
</div>
    <?php echo form_open('admissions/', ['class' => 'form-horizontal']); ?>
<div class="row">
    <div class="col-lg-1 text-info" style="font-size: 19px;">Sort by:</div>
    <div class="col-lg-2">
        <?php $options = [
            'admission_no'=>'Admission No.',
            'student_first_name' => 'Student Name',
            'fathers_first_name'=>'Father Name',
            'mothers_first_name'=>'Mother Name',
            'student_roll_no'=>'Roll No',
            'city'=>'City',
            'f_mobile'=>'Contact No.',
            'email'=>'Email',
            'student_section' => 'Section',
            'gender' => 'Gender',
            'student_dob'=>'DOB',
            'route'=>'Route',
            'category' => 'Category',
            'scholarship_no'=>'Scholarship No.',
            'aadhar_uid'=>'Aadhar UID No.',
            'family'=>'Family',
            'house'=>'House',
            'caste'=>'Caste',
            'student_class'=>'Class'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_col_1', $options, set_value('sort_col_1'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-1">
        <?php $options = [
            'ASC' => 'ASC',
            'DESC' => 'DSC'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_type_1', $options, set_value('sort_type_1'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-2">
        <?php $options = [
            'admission_no'=>'Admission No.',
            'student_first_name' => 'Student Name',
            'fathers_first_name'=>'Father Name',
            'mothers_first_name'=>'Mother Name',
            'student_roll_no'=>'Roll No',
            'city'=>'City',
            'f_mobile'=>'Contact No.',
            'email'=>'Email',
            'student_section' => 'Section',
            'gender' => 'Gender',
            'student_dob'=>'DOB',
            'route'=>'Route',
            'category' => 'Category',
            'scholarship_no'=>'Scholarship No.',
            'aadhar_uid'=>'Aadhar UID No.',
            'family'=>'Family',
            'house'=>'House',
            'caste'=>'Caste',
            'student_class'=>'Class'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_col_2', $options, set_value('sort_col_2'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-1">
        <?php $options = [
            'ASC' => 'ASC',
            'DESC' => 'DSC'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_type_2', $options, set_value('sort_type_2'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-2">
        <?php $options = [
            'admission_no'=>'Admission No.',
            'student_first_name' => 'Student Name',
            'fathers_first_name'=>'Father Name',
            'mothers_first_name'=>'Mother Name',
            'student_roll_no'=>'Roll No',
            'city'=>'City',
            'f_mobile'=>'Contact No.',
            'email'=>'Email',
            'student_section' => 'Section',
            'gender' => 'Gender',
            'student_dob'=>'DOB',
            'route'=>'Route',
            'category' => 'Category',
            'scholarship_no'=>'Scholarship No.',
            'aadhar_uid'=>'Aadhar UID No.',
            'family'=>'Family',
            'house'=>'House',
            'caste'=>'Caste',
            'student_class'=>'Class'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_col_3', $options, set_value('sort_col_3'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-1">
        <?php $options = [
            'ASC' => 'ASC',
            'DESC' => 'DSC'
        ];
        $attribute_class = [
            'class' => 'form-control',
            'id' => 'select',
        ];
        echo form_dropdown('sort_type_3', $options, set_value('sort_type_3'), $attribute_class);
        ?>
    </div>
    <div class="col-lg-2">
        <input type="submit" class="btn btn-info" name="submit" value="Sort">
        <?php form_close(); ?>
    </div>
</div>
<div class="row" style="margin-top: 10px;">
    <div class="col-lg-12">
        <table class="table table-hover " id="userTbl">
            <thead>
            <tr class="info">
                <th>Sno.</th>
                <th>Admission No.</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll No.</th>
                <th>DOB</th>
                <th>Contact No.</th>
                <th>Route</th>
                <th>Sch. No</th>
                <th>Old Balance</th>
            </tr>
            </thead>
            <tbody>
            <?php if (count($stu_det)): ?>
                <?php foreach ($stu_det as $student_det): ?>
                    <tr class="success ">
                        <td><?php echo 'sno'; ?></td>
                        <td><?php echo $student_det->admission_no?></td>
                        <td><?php echo $student_det->student_first_name ?></td>
                        <td><?php echo $student_det->fathers_first_name ?></td>
                        <td><?php echo $student_det->mothers_first_name ?></td>
                        <td><?php echo $student_det->student_class ?></td>
                        <td><?php echo $student_det->student_section ?></td>
                        <td><?php echo $student_det->student_roll_no ?></td>
                        <td><?php echo $student_det->student_dob ?></td>
                        <td><?php echo $student_det->f_mobile ?></td>
                        <td><?php echo $student_det->route ?></td>
                        <td><?php echo $student_det->scholarship_no ?></td>
                        <td><?php echo $student_det->fees_balance ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No Records Found</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $('.search').on('keyup',function(){
            var searchTerm = $(this).val().toLowerCase();
            $('#userTbl tbody tr').each(function(){
                var lineStr = $(this).text().toLowerCase();
                if(lineStr.indexOf(searchTerm) === -1){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        });
    });
</script>
<?php foreach ($stu_det as $student_det){
    $var =  $student_det->student_first_name;
    $jd[]= json_encode($var);
}
?>
