<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014-12-06
 * Time: 01:37
 */

namespace BitLibExample\Controllers {


  use BitLibExample\Models\Person;

  class PersonController extends \BitLibExample\Business\ControllerBase{
    public function Index() {
      $model = $this->m_Model;

      $pers = array();
      $pers[] = new Person("Test", "One");
      $pers[] = new Person("Test", "Two");
      $pers[] = new Person("Test", "Three");
      $pers[] = new Person("Test", "Four");

      $model['Persons'] = $pers;

      return $this->View( $model );
    }
  }
}

 