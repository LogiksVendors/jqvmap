<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$webPath = dirname(getWebpath(__FILE__))."/";
?>
<!-- CSS -->
<link href="<?=$webPath?>dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

<!-- JS -->
<script src="<?=$webPath?>dist/jquery.vmap.js" type="text/javascript"></script>
<script src="<?=$webPath?>dist/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?=$webPath?>dist/jquery.vmap.scripts.js" type="text/javascript"></script>