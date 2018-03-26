(function($){


  if ( $("#ucmm_wpbrigade_mc_lists\\[ucmm-mc-api-key\\]").val() == '' ) {
    $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").hide();
    $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").next().html("Please Enter the API Key to access the MailChimp List.");
  }

  $("#ucmm_wpbrigade_mc_lists\\[ucmm-mc-api-key\\]").on('keyup', function (e) {

    if ( $("#ucmm_wpbrigade_mc_lists\\[ucmm-mc-api-key\\]").val() != '' ) {
      var r= $('<input type="button" value="new button" id="ucmm-mc-api"/>');
      $("#ucmm_wpbrigade_mc_lists\\[ucmm-mc-api-key\\]").next().html(r);
      // $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").show();
      // $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").next().html("Select the List.");
    } else {
      $("#ucmm_wpbrigade_mc_lists\\[ucmm-mc-api-key\\]").next().html("Mail Chimp Key.");
      $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").hide();
      $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").next().html("Please Enter the API Key to access the MailChimp List.");
    }


  });
  $(document).on( 'click', "#ucmm-mc-api", function(e) {

  // getting the value.
  var apiKey = $("#ucmm_wpbrigade_mc_lists\\[ucmm-mc-api-key\\]").val();
  e.preventDefault();
  $.ajax({
    url : mc_api.ajaxurl,
    type : 'post',
    data : 'apiKey=' + apiKey + '&action=ucmm_mc_api',
    beforeSend: function() {
      $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").next().append('<img src="' + mc_api.loader + '">');
    },
    success : function( response ) {


    $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").show();
    $('#ucmm_wpbrigade_mc_lists\\[selectbox\\]').append( response );
    $("#ucmm_wpbrigade_mc_lists\\[selectbox\\]").next().html("Select the List.");
    console.log(response);
    },
    error: function(xhr, textStatus, errorThrown){
      console.log('Ajax Not Working');
      mc_api.loader;
    }
  });
  });

})(jQuery);
