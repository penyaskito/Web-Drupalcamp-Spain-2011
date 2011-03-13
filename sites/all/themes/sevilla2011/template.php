<?php
function posicion($pag){
	$posicion=explode('/',drupal_get_path_alias($_GET['q']));
	$pagina=$posicion[$pag];
	return $pagina;
}
function carga_css($id) {
switch ($id) {
      case 'inicio':
        $css=$id.'.css';
      break;
default:
	$css='vacio';
}
if ($css<>'vacio'){
//$css2=drupal_add_css(path_to_theme().'/css/'.$css, 'theme', 'all', TRUE);
$iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. base_path() . path_to_theme() .'/css/'.$css.'" />';
//$vars['css'] = drupal_add_css();
//$vars['styles'] = drupal_get_css();
//return drupal_get_css($css2);

}
  return $iecss;
}
function phptemplate_uc_cart_block_content() {
  global $user;

  if (variable_get('uc_cart_show_help_text', FALSE)) {
    $output = '<span class="cart-help-text">'
            . variable_get('uc_cart_help_text', t('Click title to display cart contents.'))
             .'</span>';
  }

 $output .= '<div id="block-cart-contents">';

  $items = uc_cart_get_contents();

  $item_count = 0;
  if (!empty($items)) {
    $output .= '<table class="cart-block-table">'
              .'<tbody class="cart-block-tbody">';
    foreach ($items as $item) {
      $output .= '<tr class="cart-block-item"><td class="cart-block-item-qty">'. $item->qty .'x</td>'
               . '<td class="cart-block-item-title">'. l($item->title, 'node/'. $item->nid) .'</td>'
               . '<td class="cart-block-item-price">'. uc_currency_format($item->price) .'</td></tr>';
      if (is_array($item->data['attributes']) && !empty($item->data['attributes'])) {
        $display_item = module_invoke($item->module, 'cart_display', $item);
        $output .= '<tr><td colspan="3">'. $display_item['options']['#value'] .'</td></tr>';
      }
      $total += ($item->price) * $item->qty;
      $item_count += $item->qty;
    }

    $output .= '</tbody></table>';
  }
  else {
    $output .= '<p>'. t('There are no products in your shopping cart.') .'</p>';
  }

  $output .= '</div>';
$output ='';
  //$item_text = format_plural($item_count, '1 Item', '@count Items');
  $item_text = $item_count;
  $view = ''. l(t('View cart'), 'cart', array('rel' => 'nofollow')) .' | ';
  if (variable_get('uc_checkout_enabled', TRUE)) {
    $checkout = ' '. l(t('Checkout'), 'cart/checkout', array('rel' => 'nofollow')) .'';
  }
  $output .= '<table class="cart-block-summary-table"><tbody class="cart-block-summary-tbody">'
            .'<tr class="cart-block-summary-tr"><td class="cart-block-summary-items">'
            . $item_text .'<a href="/cart"><img src="/'.drupal_get_path('theme', 'milkteeth').'/img/carrito.png"/></a></td></tr>';
  if ($item_count > 0) {
    $output .= '</tbody></table><div class="PasarPorCaja"><a href="/cart/checkout">Pasar por caja</a></div>';
  }
  $output .= '</tbody></table>';

  return $output;
}