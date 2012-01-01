<?php
class package_content extends package{
	protected $_packageName = 'content';
	protected $_theme = 'main.tpl';
	protected $_availableActions = array('main');
	public function __action_main(){
		$id = (isset($_GET['ID']))?$_GET['ID']:0;
		$contentData = self::$db->prepare("SELECT `title`, `text`, `lastEdit`, `editUser` FROM `lttx".package::$dbn."_contents` WHERE `ID` = ?");
		$contentData->execute(array($id));
		$contentData = $contentData->fetch();
		if(!isset($contentData[0])){
			$error = self::$packages->loadPackage(LITO_ERROR_MODULE, true);
                        if(!$error){
                                header('HTTP/ 500');
                                die('<h1>Internal Server Error</h1><p>Whoops something went wrong!</p>');
                        }
                        $error->__action_404();
		}
		self::$tpl->assign('PAGE_TITLE', $contentData[0]);
		self::$tpl->assign('title', $contentData[0]);
		self::$tpl->assign('text', $contentData[1]);
		self::$tpl->assign('editUser', new user($contentData[3]));
		return true;
	}
}
