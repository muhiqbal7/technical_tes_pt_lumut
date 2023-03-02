<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 
    if(!isset($baseTitleSub) && $baseTitleSub == NULL) {
        $baseTitleSub = 'Home';
    } else {
        $baseTitleSub = $baseTitleSub;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $baseTitleSub; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>resources/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>resources/css/sb-admin-2.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>resources/css/index.css">
        <link rel="stylesheet" href="<?php echo base_url();?>resources/css/navbar.css">
        <link rel="stylesheet" href="<?php echo base_url();?>resources/css/footer.css">
    </head>
    <body>