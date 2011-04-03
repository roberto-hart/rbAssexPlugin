<?php
/* 
 */
use_javascript(sfConfig::get("app_rb_assex_url_js_jquery"));
?>
<script type="text/javascript">
$.ajax({
  url: '<?php echo url_for($internaluri)?>',
  success: function(data) {
    $('#<?php echo $divid?>').html(data);

  },
  beforeSend: function(xhr) {
    $('#<?php echo $divid?>').html("Loading");
  },
  /*
  complete: function(xhr, returnString) {
    $('#<?php echo $divid?>').html(returnString);
  },
  */
  error: function(xhr, returnString, exObj) {
    $('#<?php echo $divid?>').html("Error:"+returnString);
  }
});
</script>
