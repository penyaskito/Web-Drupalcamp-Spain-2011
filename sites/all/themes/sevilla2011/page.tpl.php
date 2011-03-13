<?php /* $Id: page.tpl.php,v 1.4 2008/07/14 01:41:22 add1sun Exp $ */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
 <title><?php print $head_title; ?></title>
 <?php print $head; ?>
 <?php print $styles; ?>
 <?php
$pagina=posicion(0);
if ($is_front) { $pagina='inicio'; }
//print carga_css($pagina);
?>
<!--[if lte IE 7]>
<link rel="stylesheet" href="/<?php print drupal_get_path('theme', 'sevilla2011')?>/css/estilo_ie.css" type="text/css" />
<![endif]-->
 <?php print $scripts; ?>
 <script type="text/javascript"> </script>
</head>
<body<?php if ($is_front) {  print ' class="inicio"'; }else {print ' class="'.$pagina.'"';}?>>
<?php if (!empty($admin)){ print $admin;?>
<style type="text/css" media="all">
.enviarsesion {top:-80px;}
</style>
<?php } ?>
<div id="wrap">
<div id="cabecera">
<div class="contenedor">
   <h1 class="oculto"><?php print $site_name; ?></h1>
        <div class="menulogin"><div class="menu_izq">&nbsp;</div><?php print theme('links', $secondary_links); ?><div class="menu_der">&nbsp;</div></div>
		<a href="<?php print base_path(); ?>" title="Principal"><img src="<?php print base_path() . path_to_theme()?>/img/logo.png" alt="Logotipo" class="logo" /></a> 
        <div class="menuprincipal"><?php print theme('links', $primary_links); ?></div>
    </div>
</div>
<div id="centro">
<div class="contenedor"><?php if ($header): ?><?php print $header; ?><?php endif; ?></div>
</div>
  <div id="cuerpo">
  <div class="contenedor" style="text-align: left; display: block;">
    <?php if (($left)&&($is_front)): ?>
    <div id="left-sidebar" class="sidebar"><?php print $left; ?></div>
    <?php endif; ?>

    <div id="page">
     
      <?php if ($messages): ?>
      <?php print $messages; ?>
      <?php endif; ?>

      <?php print $contenttop; ?>

      <?php if ($title): ?>
      <h2 class="title"><?php print $title; ?></h2>
      <?php endif; ?>

      <?php if ($help): ?>
      <div class="help"><?php print $help; ?></div>
      <?php endif; ?>

      <?php if ($tabs): ?>
      <?php print $tabs; ?>
      <?php endif; ?>
<?php if ($inicio_izq): ?>
  <div id="left_ini"><?php print $inicio_izq; ?></div>
    <?php endif; ?>
      <?php print $content; ?>
    </div>

    <?php if ($right): ?>
    <div id="right-sidebar" class="sidebar"><?php print $right; ?></div>
    <?php endif; ?>
  </div>
  </div>
  </div>

  <div id="pie">
  <div class="contenedor">
  <div class="columnas">
	<?php if ($footer_izq): ?><div class="pie_izq"><?php print $footer_izq; ?></div><?php endif; ?>
	<?php if ($footer_der): ?><div class="pie_der"><?php print $footer_der; ?></div><?php endif; ?>
	</div>
	<div class="texto_pie">
	<?php
        $attributes = array('attributes' => array('title' => t('Quien hace posible todo esto')), 'html' => TRUE);
        $link = l('créditos', "creditos", $attributes);
        print $link;
?>
	</div>
    
	</div>
  </div>
  <?php print $closure; ?>
</body>
</html>

