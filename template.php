<?php

/**
* Implements template_process_html().
*/

// Remove Query Strings from CSS filenames (CacheBuster)
function atlantida_sub_process_html(&$variables) {
  $variables['styles'] = preg_replace('/\.css\?.*"/','.css"', $variables['styles']);
}

function atlantida_sub_js_alter(&$js) {
    unset($js['misc/tableheader.js']);
}

function atlantida_sub_preprocess_page(&$vars){ 
  if(isset($vars['node'])){
    $node = $vars['node'];
    $type = $node->type;
    if(isset($type)){
      $types = node_type_get_types();
      $name = $types[$type]->description; 
      $vars['subtitle'] = t($name);
    } else {
      $type = t("Todo esta aquí");
    }
  } 
}


