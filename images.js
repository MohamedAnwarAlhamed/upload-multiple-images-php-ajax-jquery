$(document).ready(function(){
   $('#image-upload-form').on('submit', function(e){
      e.preventDefault();
      $.ajax({
         url: 'upload.php',
         type: 'POST',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData:false,
         success: function(response){
            alert(response);
            location.reload()
         }
      });
   });
});