<?php
require_once("src/MyClass.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyClassTest
 *
 * @author User
 */
class MyClassTest extends PHPUnit_Framework_TestCase {
	
	public function testDemo() {
        $x = new MyClass();
        $this->assertEquals(1, $x->demo(1));
    }
}

?>
