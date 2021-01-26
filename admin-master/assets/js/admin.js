$(document).ready(()=>{
   
    
    // Add New Country Ajax Request
    $('#addNoteBtn').click(e=>{
        
        if($('#add-note-form')[0].checkValidity()){
            e.preventDefault()
            $('#addNoteBtn').val('Please wait...')
            var flag = $('#flag')[0].files;
            var image = $('#image')[0].files;
            var name = $('#add_name').val()
            var type = $('#add_type').val()
            var duration = $('#add_duration').val()
            var price = $('#add_price').val()
            var note = $('#add_note').val()
            
            const fd = new FormData()
            fd.append('image',image[0])
            fd.append('flag',flag[0])
            fd.append('name',name)
            fd.append('type',type)
            fd.append('duration',duration)
            fd.append('price',price)
            fd.append('note',note)
            
            $.ajax({
                url:'inc/process.php',
                method:'post',
                data:fd,
                contentType: false,
                processData: false,
                success:function(res){
                    $('#add-note-form')[0].reset()
                    $('#addNoteBtn').val('Add Country')
                    $('#addCountryModal').modal('hide')
                    swal.fire({
                        title:'Country Added Successfully',
                        icon:"success",
                        
                    }).then(function(){
                        window.location.replace("../admin-master/admin_country.php")
                    })
                    fetchNotes()
                   
                }
            })
        }
    })

    fetchNotes()
    fetchPosts()

    // fetch all users note
    function fetchNotes(){
        $("#loaderCountry").show();
        $.ajax({
            url:'inc/process.php',
            method:'post',
            data:{action:'fetch_countries'},
            success:(res)=>{
                $('#showNote').html(res)
                $('table').DataTable()
                $("#loaderCountry").hide();
            }
        })
    }

    

    // update country
    $('#editNoteBtn').click(e=>{
        if($('#edit-note-form')[0].checkValidity()){
            e.preventDefault()
            $('#editNoteBtn').val('Please Wait...')
            var flag = $('#flag_edit')[0].files;
            var image = $('#image_edit')[0].files;
            var name = $('#cname').val()
            var type = $('#type').val()
            var duration = $('#duration').val()
            var price = $('#price').val()
            var note = $('#note').val()
            var edit_id = $('#id').val()
    
            const fedit = new FormData()
            fedit.append('image_edit',image[0])
            fedit.append('flag_edit',flag[0])
            fedit.append('name_edit',name)
            fedit.append('type_edit',type)
            fedit.append('duration_edit',duration)
            fedit.append('price_edit',price)
            fedit.append('note_edit',note)
            fedit.append('edit_id',edit_id)
            $.ajax({
                url:'inc/process.php',
                method:'post',
                data:fedit,
                contentType: false,
                processData: false,
                success:(res)=>{
                    $('#edit-note-form')[0].reset()
                    $('#editNoteBtn').val('Add Note')
                    $('#editCountryModal').modal('hide')
                    swal.fire({
                        title:'Country Updated Successfully',
                        icon:"success",
                    }).then(function(){
                        window.location.replace("../admin-master/admin_country.php")
                    })
                    fetchNotes()
                    
                }
            })
        }
    })

    // delete country
    $('body').on('click','.deleteBtn',function(e){
        e.preventDefault()
        var del_id = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:'inc/process.php',
                    method:'post',
                    data:{deleteID:del_id},
                    success:(res)=>{
                        Swal.fire(
                        'Deleted!',
                        'Country Deleted Successfully',
                        'success'
                        )
                        fetchNotes()
                        
                    }
                })
                
            }
        })
        
    })

   

    // Create New Post script
    $('#addPostBtn').click(e=>{
        
        if($('#add-post-form')[0].checkValidity()){
            e.preventDefault()
            $('#addPostBtn').val('Please wait...')
            var image = $('#post_image')[0].files;
            var title = $('#title').val()
            var author = $('#author').val()
            var body = $('#body').val()

            const fd = new FormData()
            fd.append('post_image',image[0])
            fd.append('title',title)
            fd.append('author',author)
            fd.append('body',body)
            
            $.ajax({
                url:'inc/process.php',
                method:'post',
                data:fd,
                contentType: false,
                processData: false,
                success:function(res){
                    $('#add-post-form')[0].reset()
                    $('#addPostBtn').val('Create Post')
                    $('#addPostModal').modal('hide')
                    swal.fire({
                        title:'Post Added Successfully',
                        icon:"success",
                    }).then(function(){
                        window.location.replace("../admin-master/admin_post.php")
                    })
                    fetchPosts()
                }
            })
        }
    })

    // fetch all posts
    function fetchPosts(){
        $("#loaderPost").show();
        $.ajax({
            url:'inc/process.php',
            method:'post',
            data:{action:'fetch_posts'},
            success:(res)=>{
                $('#showPost').html(res)
                $('table').DataTable()
                $("#loaderPost").hide();
            }
        })
    }

    


    // update post
    $('#editPostBtn').click(e=>{
        if($('#edit-post-form')[0].checkValidity()){
            e.preventDefault()
            $('#editPostBtn').val('Please Wait...')
            var image = $('#edit_post_image')[0].files;
            var title = $('#edit_title').val()
            var author = $('#edit_author').val()
            var body = $('#edit_body').val()
            var editId = $('#edit_post_id').val()
            const post = new FormData()
            post.append('edit_post_image',image[0])
            post.append('edit_title',title)
            post.append('edit_author',author)
            post.append('edit_body',body)
            post.append('edit_post_id',editId)
            $.ajax({
                url:'inc/process.php',
                method:'post',
                data:post,
                contentType: false,
                processData: false,
                success:(res)=>{
                    $('#edit-post-form')[0].reset()
                    $('#editPostBtn').val('Update Post')
                    $('#editPostModal').modal('hide')
                    swal.fire({
                        title:'Post Updated Successfully',
                        icon:"success",
                    }).then(function(){
                        window.location.replace("../admin-master/admin_post.php")
                    })
                 
                    fetchPosts()
                  
                }
            })
        }
    })


    // delete post
    $('body').on('click','.postDeleteBtn',function(e){
        e.preventDefault()
        var del_id = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:'inc/process.php',
                    method:'post',
                    data:{PostDelete:del_id},
                    success:(res)=>{
                        Swal.fire(
                        'Deleted!',
                        'Post Deleted Successfully',
                        'success'
                        )
                        fetchPosts()
                    
                    }
                })
                
            }
        })
        
    })


   
    fetchContacts()
    function fetchContacts(){
        $("#loaderContact").show();
        $.ajax({
            url:'inc/process.php',
            method:'post',
            data:{action:'fetch_contacts'},
            success:(res)=>{
                $('#showContact').html(res)
                $('table').DataTable()
                $("#loaderContact").hide();
            }
        })
    }

    // view contact
    $('body').on('click','.infoContactBtn',function(e){
        e.preventDefault()
        $("#contact_loader").show();
        $("#adminContact").hide();
        var info_id = $(this).attr('id')
        setTimeout(()=>{
            $.ajax({
                url:'inc/process.php',
                type:'post',
                data:{ViewContact:info_id},
                success:(res)=>{
                    var data = JSON.parse(res)
                   
                    $("#adminContact").show();
                    $('#reqName').html(data.full_name)
                    $('#reqEmail').html(data.email)
                    $('#reqPhone').html(data.phone)
                    $('#reqDate').html(data.date)
                    $('#reqMessage').html(data.message)
                    $("#contact_loader").hide();
                }
            })
        },3000)
    })

// delete contact
    $('body').on('click','.deleteContactBtn',function(e){
        e.preventDefault()
        var del_id = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:'inc/process.php',
                    method:'post',
                    data:{DeleteContact:del_id},
                    success:(res)=>{
                        Swal.fire(
                        'Deleted!',
                        'Post Deleted Successfully',
                        'success'
                        )
                        fetchContacts()
                    
                    }
                })
                
            }
        })
        
    })

    fetchDatas()

    function fetchDatas(){
        $("#spinner").show();
        $.ajax({
            url:'inc/process.php',
            method:'post',
            data:{action:'fetch_dashboard_data'},
            success:(res)=>{
                $('#showDashboard').html(res)
                $("#spinner").hide();
            }
        })
    }


})