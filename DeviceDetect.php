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

/**
 * Class DeviceDetect
 *
 * @method DeviceDetect  isMobile($userAgent = null, $httpHeaders = null)
 * @method DeviceDetect  isTablet($userAgent = null, $httpHeaders = null)
 * @method DeviceDetect  is($key, $userAgent = null, $httpHeaders = null)
 * @method DeviceDetect  match($regex, $userAgent = null)
 * @method DeviceDetect  version($propertyName, $type = \Mobile_Detect::VERSION_TYPE_STRING)
 *
 * @package xutl\devicedetect
 */
class DeviceDetect extends Component {

    /**
     * @var MobileDetect
     */
    private $_mobileDetect;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->_mobileDetect = new MobileDetect();
    }

    /**
     * 魔术方法
     * @param string $name
     * @param array $parameters
     * @return mixed
     */
    public function __call($name, $parameters) {
        return call_user_func_array([$this->_mobileDetect, $name], $parameters);
    }
}