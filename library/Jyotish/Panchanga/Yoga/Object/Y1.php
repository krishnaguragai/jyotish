<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Yoga\Object;

use Jyotish\Tattva\Jiva\Deva;

/**
 * Class of yoga 1.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Y1 extends \Jyotish\Panchanga\Yoga\Yoga {

	static public $yogaDeva = Deva::DEVA_VISHVADEVA;

	public function __construct($options) {
		return $this;
	}

}