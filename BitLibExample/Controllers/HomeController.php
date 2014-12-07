<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014-12-06
 * Time: 01:37
 */

namespace BitLibExample\Controllers {


  class HomeController extends \Bit0\Web\Controller {
    public function Index() {
      $model = $this->m_Model;

      return $this->View( $model );
    }
  }
}

 