<?php
/**
 * 
 * PHP version 5
 * 
 * LICENSE: This source file is subject to the MIT License, available
 * at http://www.opensource.org/licenses/mit-license.html
 * 
 * @author      Björn Ax <bjorn.ax@gmail.com>
 * @copyright   2013 Björn Ax
 * @license     http://www.opensource.org/licenses/mit-license.html  
 */

class user extends DB_connect {
    
    /*
     * Check if user is logged in
     */
    public function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
    }
    
    /*
     * Protects pages that only logged in user can access
     */
    public function protect_page() {
	if($this->logged_in() === false) {
	    header("Location: protected.php");
	    exit();
	}
    }
}
