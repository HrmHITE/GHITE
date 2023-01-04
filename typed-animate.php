<?php
//Function Script Typed Animation
function my_script_anim(){
	?>
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
		<script>
			var typed = new Typed(".auto-type",{
				strings:["Logo / Branding", "Website Design", "SEO", "PPC", "Facebook Ads", "CRM","Sales", "Digital Marketing", "Personal Branding", "Entrepreneurship", "Marketing Agency Scalability"],
				typeSpeed: 150,
				backSpped: 200,
				loop: true
			})
		</script>
	<?php
}
add_action('wp_footer','my_script_anim');
?>