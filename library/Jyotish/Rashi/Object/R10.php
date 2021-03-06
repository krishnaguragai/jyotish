<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Rashi\Object;

use Jyotish\Tattva\Jiva\Manusha;
use Jyotish\Tattva\Maha\Bhuta;
use Jyotish\Tattva\Ayurveda\Prakriti;

/**
 * Class of rashi 10.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class R10 extends \Jyotish\Rashi\Rashi {
	/**
	 * Devanagari title 'makara' in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	static public $rashiTranslit = array(
		 'ma','ka','ra'
	);
	
	static public $rashiUnicode = '2651';
	static public $rashiBhava = self::BHAVA_CHARA;
	static public $rashiBhuta = Bhuta::BHUTA_PRITVI;
	static public $rashiGender = Manusha::GENDER_FEMALE;
	static public $rashiLimb = Manusha::LIMB_KNEES;
	static public $rashiPrakriti = Prakriti::PRAKRITI_VATA;

	public function __construct($options) {
		return $this;
	}

}