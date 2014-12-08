<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014-12-08
 * Time: 02:41
 */

namespace BitLibExample\Models {


  class Person {

    public $Fistname;
    public $Lastname;

    public function __construct($first, $last) {
      $this->Fistname = $first;
      $this->Lastname = $last;
    }

    public function __toString() {
      return $this->Fistname." ".$this->Lastname;
    }
  }


}

 