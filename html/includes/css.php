<?php if ($config['debug']) { ?>
<!-- Dev includes: Sitewide CSS -->
<link href="<?= $config['css_dir'] ?>normalize.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>bootstrap.grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>bootstrap.ultralite.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>bootstrap.forms.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>bootstrap.basictype.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>webfonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>text.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>forms.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>navbar-xs.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>navbar-md.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>mobile-nav.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>subscribe.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>footer.css" rel="stylesheet" type="text/css" media="all" />
<!-- Dev includes: Page Specific CSS -->
<link href="<?= $config['css_dir'] ?>about.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>contact.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>donate.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>faqs.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>home.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>proposal.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>success.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= $config['css_dir'] ?>volunteer.css" rel="stylesheet" type="text/css" media="all" />
<?php } else { ?>
<link href="<?= $config['css_dir'] ?>styles.min.css" rel="stylesheet" type="text/css" media="all" />
<?php } ?>
