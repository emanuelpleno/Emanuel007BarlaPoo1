<?php

namespace Emanuel007BarlaPoo1\Petition;

/**
 * Description of petitionClass
 *
 * @author emanuel
 */
class petitionClass {

    static public function getParamPost($param) {
    //filter_input(INPUT_POST, 'inputUser')
    return filter_input(INPUT_POST, $param);
  }
  
  static public function getParamGet($param) {
    return filter_input(INPUT_GET, $param);
  }
  
  static public function hasParamGet($param) {
    return filter_has_var(INPUT_GET, $param);
  }

}
