<?php


//Copyright Function
function copyright_year(){
    $year = date("Y"); 
    $hdOwner = get_bloginfo('name');
    $fcLocation = "HD Location";
    $mainurl = "https://www.mainurl.com";
    $hdurl = "/franchise/";
    $urlfull = esc_url($mainurl) . esc_url($hdurl);
    $endurl = filter_var($urlfull, FILTER_VALIDATE_URL);
    
    $copyr = '<p class="copyright-footer">';
    $copyr .= 'Copyright &copy; ' . esc_html($year) . ' - ' . esc_html($hdOwner) . ' | All Rights Reserved | Designed By ';
    $copyr .= '<a href="' . esc_url($endurl) . '" target="_blank" title="' . esc_attr($fcLocation) . '">' . esc_html($fcLocation) . '</a>';
    $copyr .= '</p>';
  
    return $copyr;
  }
  add_shortcode('copyright','copyright_year');
  //End Function Copyright
  