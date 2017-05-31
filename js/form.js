(function ($, root, undefined) {

$.fn.forms = function() {
    var formdata
    $('#booker').submit(function(e){
      e.preventDefault();
      formdata = $( this ).serializeArray();
      formdata = JSON.stringify(formdata);
      $().ajaxForm();
    });

    $.fn.ajaxForm = function(){
      jQuery.ajax({
          type: "POST",
          url: templateDir+'/mail.php',
          data: { data : formdata },

        success: function(data) {
          $( '#booker').fadeOut(1000, function() {
            $('#form-message').append( "<h3>Thanks, a member of staff will be in touch shortly</h3>" );
            $('#form-message').fadeIn(1000);
          });
        },

        fail: function(data) {
            $('#form-message').append( "<h3>There Was an Issue With your Form Submission - Please try again</h3>" );
            $('#form-message').fadeIn(1000);
        }
      });
     }
 }
})(jQuery, this);
