<?php 
//My JavaScript Function
function hrm_custom_javascript(){
    ?>
      <script>
		  jQuery(document).ready(function(){
            jQuery("li.et_pb_social_media_follow_network_3").addClass("fa fa-globe iconglobe");
			  jQuery(".et_pb_social_media_follow_network_3 a").attr("title", "Titulo");
            jQuery("li.et_pb_social_media_follow_network_7").addClass("fa fa-globe iconglobe");
			  jQuery(".et_pb_social_media_follow_network_7 a").attr("title", "Titulo");
        });
      </script>
    <?php
  }
  add_action('wp_head', 'hrm_custom_javascript');
  //End Function My JavaScript
?>