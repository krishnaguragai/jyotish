<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\Object;

use Jyotish\Tattva\Jiva\Deva;
use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 15.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T15 extends \Jyotish\Panchanga\Tithi\Tithi {

	static public $tithiDeva = Deva::DEVA_CHANDRA;
	static public $tithiPaksha = null;
	static public $tithiType = self::TYPE_PURNA;
	static public $tithiKarana = array(
		1 => Karana::NAME_VISHTI,
		2 => Karana::NAME_BAVA
	);
	

	public function __construct($options) {
		return $this;
	}

}