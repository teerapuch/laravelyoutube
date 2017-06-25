<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends MY_Controller {

	public function __construct() {
		parent::__construct();

		// Verify Admin Login
		is_logged_in_admin();
	}


    public function airport(){
      $this->data["sTitle"] 		= "Airport Package";

  		$aCustomCss = array(
  		);

  		$aCustomJs = array(
  				"assets/admin/js/plugins/jquery-ui-1.12.0/jquery-ui.min.js",
  				"assets/admin/js/plugins/jquery-ui-1.12.0/jquery.ui.touch-punch.min.js",
  				"assets/admin/js/page/slide/custom.js"
  		);

  		$this->render_admin_css($aCustomCss);
  		$this->render_admin_js($aCustomJs);

  		$this->render_admin("template/admin/page/package/airport", $this->data);
    }

    public function onedaytrip(){
      $this->data["sTitle"] 		= "One Day Trip";

  		$aCustomCss = array(
  		);

  		$aCustomJs = array(
  				"assets/admin/js/plugins/jquery-ui-1.12.0/jquery-ui.min.js",
  				"assets/admin/js/plugins/jquery-ui-1.12.0/jquery.ui.touch-punch.min.js",
  				"assets/admin/js/page/slide/custom.js"
  		);

  		$this->render_admin_css($aCustomCss);
  		$this->render_admin_js($aCustomJs);

  		$this->render_admin("template/admin/page/package/onedaytrip", $this->data);
    }

    public function tourpackage(){
      $this->data["sTitle"] 		= "Tour Package";

  		$aCustomCss = array(
  		);

  		$aCustomJs = array(
  				"assets/admin/js/plugins/jquery-ui-1.12.0/jquery-ui.min.js",
  				"assets/admin/js/plugins/jquery-ui-1.12.0/jquery.ui.touch-punch.min.js",
  				"assets/admin/js/page/slide/custom.js"
  		);

  		$this->render_admin_css($aCustomCss);
  		$this->render_admin_js($aCustomJs);

  		$this->render_admin("template/admin/page/package/tourpackage", $this->data);
    }


}
