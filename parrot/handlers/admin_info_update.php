<?php

class admin_info_update {
    function post() {
    	/**
    	 * This is the submit category function
    	 */
		if (auth::isLoggedIn() || auth::isAdmin()) {
            if (preg_match("/^[A-Za-z0-9-_\s]+$/", $_POST['title'])) {
            	$title = $_POST['title'];
                $description = $_POST['description'];
                $theme = $_POST['theme'];
            	info::update($title, $description, $theme);
                header('Location: http://' . getenv(DOMAIN_NAME) . BASE . 'admin');
            } else {
                global $messages;
                $messages = 'Only include spaces, letters and numbers in the name.';
                require(APP . 'views' . DS . 'admin' . DS . 'index' . EXT);
            }
		} else {
			header('Location: http://' . getenv(DOMAIN_NAME) . BASE . 'login');
		}
    }
}

?>