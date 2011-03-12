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
<body class="<?php print $pagina ?>">
<?php if (!empty($admin)) print $admin; ?>
<div id="wrap">
<div id="cabecera">
<div class="contenedor">
   <h1 class="oculto"><?php print $site_name; ?></h1>
		<a href="<?php print base_path(); ?>" title="Principal"><img src="<?php print base_path() . path_to_theme()?>/img/logo.png" alt="Logotipo" class="logo" /></a> 
    </div>
  </div>

  <div id="cuerpo">
  <div class="contenedor" style="text-align: left; display: block;">
    <div id="page">
          <h2 class="title"><?php print t('La DrupalCampSpain en Twitter'); ?></h2>
      
      <?php print $content; ?>
    </div>
  </div>
  </div>
  </div>

  <div id="pie">
  <div class="contenedor">
  <div class="columnas">
	<?php if ($footer_izq): ?><div class="pie_izq"><?php print $footer_izq; ?></div><?php endif; ?>
	<?php if ($footer_der): ?><div class="pie_der"><?php print $footer_der; ?></div><?php endif; ?>
	</div>
    <?php if ($footer_message): ?><div class="texto_pie"><?php print $footer_message; ?></div><?php endif; ?>
	</div>
  </div>
  <?php print $closure; ?>
</body>
</html>

