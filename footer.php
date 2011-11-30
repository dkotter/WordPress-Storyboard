<?php wp_footer(); ?>
<?php 
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$page = explode('page', $url);
if (is_null($page[1])) :
	echo '<script>jQuery("#sidebar ol li:first").addClass("active"); </script>';
endif;
?>
</body>
</html>