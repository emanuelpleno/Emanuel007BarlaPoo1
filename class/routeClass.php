<?php

namespace Emanuel007BarlaPoo1\route;

/**
 * Description of routeClass
 *
 * @author emanuel
 */
class routeClass {
     static public function redirect($url) {    
    header('Location: ' . $url);
    exit();
  }
}
