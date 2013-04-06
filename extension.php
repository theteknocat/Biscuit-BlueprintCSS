<?php
/**
 * Extension for easy inclusion of Blueprint CSS.
 * 
 * @package Extensions
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0
 **/
class BluePrintCss extends AbstractExtension {
	public function run() {
		$this->register_css(array('filename' => 'compressed/screen.css','media' => 'screen, projection'));
		$this->register_css(array('filename' => 'compressed/print.css','media' => 'print'));
		$this->register_css(array('filename' => 'lib/ie.css','media' => 'screen, projection'), true);
	}
}
?>