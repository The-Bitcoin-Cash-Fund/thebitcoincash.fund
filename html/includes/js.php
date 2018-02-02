<?php if ($config['debug']) { ?>
<!-- Dev includes: JS -->
<script src="<?= $config['js_dir'] ?>jquery.custom.js" type="text/javascript"></script>
<script src="<?= $config['js_dir'] ?>jquery.validate.js" type="text/javascript"></script>
<script src="<?= $config['js_dir'] ?>mobile-nav.js" type="text/javascript"></script>
<script src="<?= $config['js_dir'] ?>menu-slider.js" type="text/javascript"></script>
<?php } else { ?>
<script src="<?= $config['js_dir'] ?>scripts.min.js" type="text/javascript"></script>
<?php } ?>
