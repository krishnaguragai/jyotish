<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Bhava\Object;

use Jyotish\Tattva\Jiva\Manusha;

/**
 * Class of bhava 5.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class B5 extends \Jyotish\Bhava\Bhava {

	static public $bhavaPurushartha = Manusha::PURUSHARTHA_DHARMA;

	public function __construct($options) {
		return $this;
	}

}