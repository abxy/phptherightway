<?php  
/**
 * Description  define常量定义
 * @author 		.liyongheng
 * @date 		2016.04.01
 **/
define('APP_VERSION','20160401');
define('NOW_TIME',      $_SERVER['REQUEST_TIME']);
define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
define('IS_GET',        REQUEST_METHOD =='GET' ? true : false);
define('IS_POST',       REQUEST_METHOD =='POST' ? true : false);
define('IS_PUT',        REQUEST_METHOD =='PUT' ? true : false);
define('IS_DELETE',     REQUEST_METHOD =='DELETE' ? true : false);
define('IS_AJAX',       ((isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') || !empty($_POST[getConfig('VAR_AJAX_SUBMIT')]) || !empty($_GET[getConfig('VAR_AJAX_SUBMIT')])) ? true : false);


