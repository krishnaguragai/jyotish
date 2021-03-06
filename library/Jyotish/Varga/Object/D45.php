<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Varga\Object;

use Jyotish\Service\Utils;
use Jyotish\Rashi\Rashi;

/**
 * Class of varga D45.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class D45 extends \Jyotish\Varga\Varga {
	
	static public $vargaAltName = array(
		'Panchachatvarimshamsha',
	);

	static public $vargaAmsha = 45;

	public function __construct($options) {
		return $this;
	}
	
	/**
	 * Get varga rashi.
	 * 
	 * @param array $ganitaRashi
	 * @return array
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 6, Verse 31-32.
	 */
	public function getVargaRashi(array $ganitaRashi) {
		$amshaSize = 30 / self::$vargaAmsha;
		$result = Utils::partsToUnits($ganitaRashi['degree'], $amshaSize, 'floor');
		$vargaRashi['degree'] = $result['parts'] * 30 / $amshaSize;
		
		$rashiObject = Rashi::getInstance((int)$ganitaRashi['rashi']);
		$rashiBhava = $rashiObject::$rashiBhava;
		
		switch ($rashiBhava) {
			case Rashi::BHAVA_CHARA:
				$vargaRashi['rashi'] = Rashi::inZodiacRashi(1 + $result['units']);
				break;
			case Rashi::BHAVA_STHIRA:
				$vargaRashi['rashi'] = Rashi::inZodiacRashi(5 + $result['units']);
				break;
			case Rashi::BHAVA_DVISVA:
				$vargaRashi['rashi'] = Rashi::inZodiacRashi(9 + $result['units']);
				break;
		}
		
		return $vargaRashi;
	}

}