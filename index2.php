<?php
$dataset = $_GET["dataset"];
?>
<style>
  iframe{
    width:100%;
    height:100%;
  }
</style>           
<iframe src="https://resources.epilog-di.com/graficas/bar.php?dataset=<?php echo $dataset;?>&theme=<?php echo $theme;?>"></iframe>
