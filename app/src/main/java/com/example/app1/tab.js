$(function() {
  $('[name="tab"]:radio').change( function() {
    if($('[id=tab1]').prop('checked')){
      $('#box1').show();
      $('#box2').hide();
    } else if ($('[id=tab2]').prop('checked')) {
      $('#box2').show();
      $('#box1').hide();
    } 
  });
});
