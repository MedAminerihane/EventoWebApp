$(function() {
    
    $('#prestataire').hide(); 
    $('#fos_user_registration_form_nature').change(function(){
        if($('#fos_user_registration_form_nature').val() === '1') {
            $('#client').show(); 
            $('#pr').show();
            $('#prestataire').hide(); 
           
        } else  if($('#fos_user_registration_form_nature').val() === '0') {
            $('#pr').hide();
            $('#prestataire').show(); 
            $('#client').hide(); 
        } 
    });
});