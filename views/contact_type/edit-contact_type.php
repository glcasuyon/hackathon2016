<h2>Update Contact_type</h2>  
<form role="form" method="post" action="<?php echo site_url()?>edit-contact_type-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $contact_type[0]->id ?>"   name="contact_type_id">


      <div class="form-group">
    <label for="value">Value:</label>
    <input type="text" value="<?php echo $contact_type[0]->value ?>" class="form-control" id="value" name="value">
  </div>
    <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" value="<?php echo $contact_type[0]->description ?>" class="form-control" id="description" name="description">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>