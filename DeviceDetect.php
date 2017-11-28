<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\devicedetect;

use Yii;
use yii\base\Component;
use Detection\MobileDetect;

class DeviceDetect extends Component {
	
	/**
	 * @var MobileDetect
	 */
	private $_mobileDetect;

	public function init() {
		parent::init();
		$this->_mobileDetect = new MobileDetect();
	}

	public function __call($name, $parameters) {
		return call_user_func_array([$this->_mobileDetect, $name], $parameters);
	}
}