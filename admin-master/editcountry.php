<?php
    require_once "inc/header.php";
    require_once "inc/config.php";
    if(isset($_GET['country_id'])){
        $id = $_GET['country_id'];
        $sql = "SELECT * FROM country WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
    }else{
        header("location:admin_country.php");
    }
?>
   <div class="pcoded-content">
       <div class="row justify-content-center">
           <div class="col-lg-8 mt-2">
                <div class="card border-success">
                    <div class="card-header bg-success">
                        <h2 class="text-center mt-2">Edit Country</h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" id="edit-note-form" class="px-3" enctype = "multipart/form-data">
                            <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
                            <div class="form-group">
                                <input type="text" name="cname" id="cname" value="<?= $row['name']; ?>" class="form-control form-control-lg" placeholder="Country Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="type" id="type" value="<?= $row['type']; ?>" class="form-control form-control-lg" placeholder="Type of Relocation" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="duration" value="<?= $row['duration']; ?>" id="duration" class="form-control form-control-lg" placeholder="Duration" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" value="<?= $row['price']; ?>" id="price" class="form-control form-control-lg" placeholder="Estimated Cost" required>
                            </div>
                            <div class="form-group">
                                <textarea name="note" id="note" class="form-control form-control-lg" placeholder="Description About The Process..." required rows="7"><?= $row['description']; ?></textarea>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Image</label>
                                    <input type="file" class="form-control-file" id="image_edit" name="image_edit" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Country Flag</label>
                                    <input type="file" class="form-control-file" id="flag_edit" name="flag_edit" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="editNote" id="editNoteBtn" value="Update Country" class="btn btn-success btn-lg btn-block">
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
   