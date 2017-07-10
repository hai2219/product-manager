<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div>
		<a class="btn btn-blue <?php if($this->uri->segment(2)=="customers_management"){echo 'active';}?>" href='<?php echo site_url('examples/customers_management')?>'>Customers Manager</a>
		<a class="btn btn-blue <?php if($this->uri->segment(2)=="products_management"){echo 'active';}?>" href='<?php echo site_url('examples/products_management')?>'>Products Manager</a>
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
