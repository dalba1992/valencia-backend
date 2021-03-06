<?php require'sidebar.view.php'; ?>  

<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">

        <?php require'navbar.view.php'; ?>

        <!--Main Content-->

 <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4>Edit Place Type</h4>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="block form-block mb-4">

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<div class="form-row">
              
              <div class="form-group col-md-12">

                <label>Name</label>
                  <input type="hidden" value="<?php echo $type['place_type_id']; ?>" name="place_type_id">
   <input type="text" value="<?php echo $type['place_type_name']; ?>" placeholder="" name="place_type_name" class="form-control" required="">

               </div>

              <div class="form-group col-md-12">

      <label class="control-label">Category: <a href="#"><?php echo $type['category_name']; ?></a></label>

   <select class="custom-select form-control" name="place_type_category" required>
    <?php foreach($places_categories_lists as $places_categories_list): ?>
   <option value="<?php echo $places_categories_list['place_category_id']; ?>"><?php echo $places_categories_list['place_category_name']; ?></option>
    <?php endforeach; ?>
   </select>

</div>
              <div class="form-group col-md-12">


   <label>Image: <a href="<?php echo SITE_URL ?>/images/<?php echo $type['place_type_image']; ?>" data-lightbox="image-1">Preview</a></label><br/>
   
   <input type="hidden" value="<?php echo $type['place_type_image']; ?>" name="place_type_image_save">
   <div class="input-file-container">  
    <input class="input-file" name="place_type_image" id="my-file" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
  </div>
  <p class="file-return"></p>
   <br/>
   <span class="text-danger" style="font-size: 11px; letter-spacing: 0.06em; text-transform: uppercase; font-weight: 500;">Recommended size: <b>250 x 250 Pixels</b> </span>

  <hr>
                                <button class="btn btn-primary" type="submit" name="save">Save</button>
                                <input class="btn btn-danger" type="button" value="Delete" onclick="alertdelete();" name="trash"/>

                                    <script type="text/javascript">
   function alertdelete() {
   swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_type.php?id=<?php echo $type['place_type_id']; ?>" });}
   </script>

                             </div>





</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>