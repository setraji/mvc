<?php

require_once('model.php');

// Der Controller holt sich alle Infos aus dem Model
// Er entscheidet welche View-Dateien was anzeigen sollen
// Der Controller ist auf das Model und die View-Dateien angewiesen

class indexController extends model {

	public function indexAction() {
		$navi = null;
		$content = null;
		$footer = null;
		$template = file_get_contents('view/template.php');
		$replace = array(
			'{navi}' => $this->getNavi(),
			'{content}' =>	$this->getContent(),
			'{footer}' => $this->getFooter()
		);
		$template = strtr($template , $replace);
		echo $template;	
	}

}

?>