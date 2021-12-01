<?php
	foreach (glob('layout/js/*.js') as $jsfile) { ?>
		<script type="text/javascript" src="<?php echo $jsfile ?>"></script>
	<?php } ?>
	</body>
</html>