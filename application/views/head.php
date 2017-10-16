<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/material-components-web/dist/material-components-web.css">
    <link rel = "stylesheet" type = "text/css" href ="<?php echo base_url().'assets/css/'.$page_css;?>.css">
    <link rel = "stylesheet" type = "text/css" href ="<?php echo base_url().'assets/css/'.$page_css;?>_responsive.css">
    <?php
    if(!empty($material_com)){
        foreach($material_com as $m){
    ?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/@material/<?php echo $m;?>/dist/mdc.<?php echo $m;?>.css">
    <?php
    }
    }   ?>
</head>

