<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Profile</h3>

  </div>

  <?php echo $this->Form->create($form, ['id' => 'form_id', 'novalidate' => true, 'enctype' => 'multipart/form-data']) ?>
  <span style="display:none" id="edit_option">1</span>
  <!-- /.box-header -->
  <div class="box-body">

       <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Login Details</a></li>
              <li><a href="#tab_2" data-toggle="tab">Profile Details</a></li>
              <li><a href="#tab_3" data-toggle="tab">Birth Details</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>User Name/ Email Address *</label>
                      <?php echo $this->Form->text('username', ['class' => 'form-control validate[required,custom[email]]', 'maxlength' => 255, 'value' => $data['username']]) ?>
                    </div>
                  
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Password 
                      <span style="font-weight:normal; font-size:11px;">(leave empty if not to be updated)</span></label>
                     <?php echo $this->Form->password('password', ['class' => 'form-control', 'maxlength' => 15])?>
                    </div>
                    
                  </div>
                  <!-- /.col -->
                </div>

                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                      <label>Language *</label>
                     <?php echo $this->Form->select('profile.language_id', $languageOptions, ['class' => 'form-control validate[required]', 'value' => $data['profile']['language_id']] ); ?>
                    </div>
                  
                  </div>

                  <div class="col-md-6">  
                    <div class="form-group">
                      <label>Status</label><br />
                      <?php 
                      $options = array('1' => 'Active', '2' => 'Inactive');
                      echo $this->Form->radio('status', $options, ['value' => $data['status'] ]); ?>
                    </div>
                  </div>  
                 
                </div>



              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>First Name *</label>
                    <?php echo $this->Form->text('profile.first_name', ['class' => 'form-control validate[required]', 'maxlength' => 50, 'value' => $data['profile']['first_name']]) ?>
                  </div>
                
                </div>
                <!-- /.col -->
                 <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name *</label>
                   <?php echo $this->Form->text('profile.last_name', ['class' => 'form-control validate[required]', 'maxlength' => 50, 'value' => $data['profile']['last_name']])?>
                  </div>
                  
                </div>
              </div>


                <div class="row">
                <div class="col-md-6">
                 <div class="form-group">
                <label>Gender *</label>
                <?php
                 $options = ['M' => 'Male', 'F' => 'Female'];
                 echo $this->Form->select('profile.gender', $options, ['class' => 'form-control validate[required]', 'empty' => 'Select Gender', 'value' => $data['profile']['gender']] ); ?>
              </div>
                
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone *</label>
                   <?php echo $this->Form->text('profile.phone', ['class' => 'form-control validate[required]', 'maxlength' => 20, 'value' => $data['profile']['phone']])?>
                  </div>
                  
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                 <div class="form-group">
                <label>Address *</label>
                <?php echo $this->Form->textarea('profile.address', ['class' => 'form-control validate[required]', 'maxlength' => 500, 'value' => $data['profile']['address']] ); ?>
              </div>
                
                </div>
                <div class="col-md-6">

                   <div class="form-group">
                    <label>Country *</label>
                   <?php echo $this->Form->select('profile.country_id', $countryOptions, ['id' => 'country_id', 'class' => 'form-control select2 validate[required]', 'empty'=>'Select Country' , 'style' => 'width:490px', 'data-prompt-position' => 'topRight:360,0', 'value' => $data['profile']['country_id']])?>
                  </div>

                  <div class="form-group">
                    <label>City *</label>
                    <?php echo $this->Form->select('profile.city_id', $citiesOptions, ['id' => 'city_id', 'class' => 'select2 form-control validate[required]', 'style' => 'width:500px','empty' => 'Select City', 'value' => $data['profile']['city_id']] ); ?>
                  </div>

                  
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                    <label>Zip *</label>
                   <?php echo $this->Form->text('profile.zip',['class' => 'form-control validate[required]', 'maxlength' => 10, 'value' => $data['profile']['zip']])?>
                  </div>                
                
                </div>

              </div> 

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                
              <div class="row">
                <div class="col-md-6">
                      <div class="form-group">
                      <label>Date *</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <?php 
                           if( isset($data['birth_detail']['date']) && !empty($data['birth_detail']['date']) )
                           {
                            $defaultDob = $this->Custom->newDayDateFormat($data['birth_detail']['date'], $data['birth_detail']['day']);
                           }
                           else
                           {
                            $defaultDob = '';
                           }
                        ?>
                        <?php echo $this->Form->text('birth_detail.datepicker', ['class' => 'form-control pull-right validate[required]', 'id' => 'datepicker', 
                        'value' => $defaultDob] ); ?>
                      </div>
                      </div>
                 </div>

                 <div class="col-md-6">


              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker &emsp;
                  <!-- <?php //echo $this->Form->checkbox('birth_detail.unknown_time', ['id' => 'unknown_time', 'value' => '1'] ); ?>&nbsp; Unknown Time -->
                  </label>

                  <div class="input-group">
                   <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <?php echo $this->Form->text('birth_detail.timepicker', ['class' => 'form-control pull-right', 'id' => 'timepicker', 'value' => $data['birth_detail']['time'] ])?>
                   
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

                 </div>

              
              </div>

               <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                    <label>Birth Country *</label>
                   <?php echo $this->Form->select('birth_detail.country_id', $countryOptions, ['class' => 'form-control validate[required] select2', 'id' => 'birth_country', 'empty'=>'Select Country' , 'style' => 'width:490px', 'data-prompt-position' => 'topRight:360,0', 'value' => $data['birth_detail']['country_id']])?>
                  </div>
                  
                </div>

                <div class="col-md-6">
                   <div class="form-group">
                    <label>Birth City *</label>
                   <?php echo $this->Form->select('birth_detail.city_id', $birthCitiesOptions, ['class' => 'form-control validate[required] select2', 'id' => 'birth_city', 'style' => 'width:500px', 'empty' => 'Select City', 'value' => $data['birth_detail']['city_id']])?>
                  </div>                  
                
                </div>
                
              </div> 


              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>

    <div class="box-tools pull-right">
       <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>

  </div>
  <?php echo $this->Form->end() ?>
  <!-- /.box-body -->
 
</div>

