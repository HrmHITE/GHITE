<?php
//Copyright Function
function copyright_year(){
    $year = date("Y"); 
    $hdOwner = get_bloginfo();
    $fcLocation = "Name";
    $hdurl = "https://www.domain.com/url/";
    
    $copyr = '<p class="copyright-footer">copyright &copy; '.esc_html($year).' - '.esc_html($hdOwner).' | All Rights Reserved | Designed By <a href="'.esc_url($hdurl).'" target="_blank" title="'.esc_attr($fcLocation).'">'.esc_html($fcLocation).'</a></p>';

    return $copyr;
}
add_shortcode('copyright','copyright_year');


?>