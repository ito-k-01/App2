$(function() {
  $('[name="tab"]:radio').change( function() {
    if($('[id=tab1]').prop('checked')){
      $('.text1').show();
      $('.text2').hide();
    } else if ($('[id=tab2]').prop('checked')) {
      $('.text2').show();
      $('.text1').hide();
    } 
  });
});
