<?php

namespace Emanuel007BarlaPoo1\authenticity;

/**
 * Description of authenticityClass
 *
 * @author emanuel
 */
class authenticityClass {

    const USER = 'admin';
    const PASS = '123';

    private $data = array(
        array('admin', '123'),
        array('jalf', '321')
    );

    static public function verifyUserAndPassword($user, $password) {
        $answer = false;
        if ($user === self::USER and $password === self::PASS) {
            $answer = true;
        }
        return $answer;
    }

}
