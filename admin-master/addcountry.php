<?php
    require_once "inc/header.php";
?>
   <div class="pcoded-content">
       <div class="row justify-content-center">
           <div class="col-lg-8 mt-5">
                <div class="card border-success">
                    <div class="card-header bg-success">
                        <h2 class="text-center mt-2">Add New Country</h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" id="add-note-form" class="px-3" enctype = "multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="cname" id="add_name" class="form-control form-control-lg" placeholder="Country Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="type" id="add_type" class="form-control form-control-lg" placeholder="Type of Relocation" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="duration" id="add_duration" class="form-control form-control-lg" placeholder="Duration" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" id="add_price" class="form-control form-control-lg" placeholder="Estimated Cost" required>
                            </div>
                            <div class="form-group">
                                <textarea name="note" id="add_note" class="form-control form-control-lg" placeholder="Description About The Process..." required rows="7"></textarea>
                            </div>
                            <div class="row mb-2">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file" id="image" name="image" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Country Flag</label>
                                    <input type="file" class="form-control-file" id="flag" name="flag" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="addCountry" id="addNoteBtn" value="Add Country" class="btn btn-success btn-lg btn-block">
                            </div>
                    </form>
                    </div>
                </div>
                
                
           </div>
       </div>
   </div>
<?php
    require_once "inc/footer.php";
?>
   