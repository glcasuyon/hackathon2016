 <script src="<?php echo base_url();?>assets/js/table.js"></script>
 <h2>Manage Contact_type</h2>

  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>


  
<?php if(!empty($contact_types)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>value</th>
       <th>Description</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($contact_types as $contact_type) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-contact_type/<?php echo $contact_type->id?>" > <?php echo $contact_type->value ?> </a> </td>
        <td> <a href="<?php echo site_url()?>view-contact_type/<?php echo $contact_type->id?>" > <?php echo $contact_type->description ?> </a> </td>

        <td>
        <a href="<?php echo site_url()?>change-status-contact_type/<?php echo $contact_type->id ?>" > <?php if($contact_type->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>
        <a href="<?php echo site_url()?>edit-contact_type/<?php echo $contact_type->id?>" >Edit</a>
        <a href="<?php echo site_url()?>delete-contact_type/<?php echo $contact_type->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Contact_types Found!</strong>
                </div>
  <?php } ?>