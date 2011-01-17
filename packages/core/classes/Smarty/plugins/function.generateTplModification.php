<?php
/**
 * Smarty plugin for Litotex 0.8
 * @author Jonas Schwabe
 * @package Smarty
 * @subpackage PluginsFunctionCompiler
 */


/**
 * Smarty {generateTplModification} function plugin
 *
 * Type:     function<br>
 * Name:     generateTplModification<br>
 * Purpose:  generateTplModification
 * @author   Jonas Schwabe
 * @param string
 * @param boolean include whitespace in the character count
 * @return string
 */
function smarty_function_generateTplModification($params, &$smarty)
{
	$position = str_replace("'", '', $params['position']);
    if (empty($position)) {
        trigger_error("displayTplModification: position parameter missing.");
        return;
    }
    ob_start();
    package::$packages->displayTplModification($position);
    global $out;
    if(!$out)
        $out = array();
    $out[$position] = ob_get_contents();
    ob_end_clean();
    return '';
}

/* vim: set expandtab: */

?>