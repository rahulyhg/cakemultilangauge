<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Sample Report</h3>
  </div>
  <?php echo $this->Form->create($form, ['id' => 'form_id', 'novalidate' => true, 'enctype' => 'multipart/form-data']) ?>
  <!-- /.box-header -->
  <div class="box-body">

       <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">English</a></li>
              <li><a href="#tab_2" data-toggle="tab">Dansk</a></li>
              <li><a href="#tab_3" data-toggle="tab">Details</a></li>
             </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Title *</label>
                      <?php echo $this->Form->text('title', ['class' => 'form-control validate[required]', 'maxlength' => 255]) ?>
                    </div>                  
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Upload PDF File *</label>
                      <?php echo $this->Form->file('pdf', ['class' => 'form-control validate[required]']) ?>
                    </div>                  
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Upload Thumb Image *</label>
                      <?php echo $this->Form->file('image', ['class' => 'form-control validate[required]']) ?>
                    </div>                  
                  </div>
                 
                </div>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

                 <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Title *</label>
                      <?php echo $this->Form->text('_translations.da.title', ['class' => 'form-control validate[required]', 'maxlength' => 255]) ?>
                    </div>                  
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Upload PDF File *</label>
                      <?php echo $this->Form->file('_translations.da.pdf', ['class' => 'form-control validate[required]']) ?>
                    </div>                  
                  </div>

                   <div class="col-md-4">
                    <div class="form-group">
                      <label>Upload Thumb Image *</label>
                      <?php echo $this->Form->file('_translations.da.image', ['class' => 'form-control validate[required]']) ?>
                    </div>                  
                  </div>
                 
                </div>
 

            </div>

               <div class="tab-pane" id="tab_3">

                <div class="row">

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Product</label><br />
                    <select name="product_id" class="form-control validate[required]">
                    <option value="">Select Product</option>

                   <?php
                    foreach($products as $product):
                     ?>
                        <option value="<?php echo $product->id ?>"><?php echo $product->name?></option>
                     <?php 
                          endforeach;
                     ?>
                     </select>
                 </div>
                
                </div>

                 <div class="col-md-2">
                  <div class="form-group">
                    <label>Status</label><br />
                     <?php
                    $options = ['1' => 'Active', '2' => 'Inactive'];
                    echo $this->Form->select('status', $options, ['class' => 'form-control']) ?>
                  </div>
                
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label>Sort Order *</label><br />
                     <?php echo $this->Form->text('sort_order', ['class' => 'form-control validate[required, custom[onlyNumberSp]]', 'maxlength' => 3, 'value' => 0]) ?>
                  </div>
                
                </div>

                </div>

               </div>

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
<!-- /.box