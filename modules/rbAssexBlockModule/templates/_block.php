<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo "BLOCK";

use_javascript('https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js');


?>
<script type="text/javascript">
$.ajax({
  url: '<?php echo url_for("@bloccoesempio")?>',
  success: function(data) {
    $('#<?php echo $divid?>').html(data);
    alert('Load was performed.');
  }
});
</script>
