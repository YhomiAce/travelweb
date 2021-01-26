$(document).ready(function(){
    $('#contactForm').click(e=>{
        
        if($('#contact_form')[0].checkValidity()){
            e.preventDefault()
            $('#contactForm').val('Sending Message...')
            $.ajax({
                url:'inc/sendEmail.php',
                type:'post',
                data:$('#contact_form').serialize()+'&action=send_email',
                success:(res)=>{
                    console.log(res)
                    $('#contactForm').val('Send Message')
                    $('#contact_form')[0].reset()
                    swal.fire({
                        title:"Your mail has been sent successfully",
                        icon:"success",
                        
                    })
                }
            })
        }
        
    })
})