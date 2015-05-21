<?php
/* Icinga Web 2 | (c) 2013-2015 Icinga Development Team | GPLv2+ */

/**
 * Generate icons to describe a given hosts state
 */
class Zend_View_Helper_IconImage extends Zend_View_Helper_Abstract
{
    /**
     * Create dispatch instance
     *
     * @return \Zend_View_Helper_IconImage
     */
    public function iconImage()
    {
        return $this;
    }

    /**
     * Display the image_icon of a MonitoredObject
     *
     * @param   MonitoredObject|stdClass   $object  The host or service
     * @return  string
     */
    public function host($object)
    {
        if ($object->host_icon_image && ! preg_match('/[\'"]/', $object->host_icon_image)) {
            return $this->view->icon($this->view->resolveMacros($object->host_icon_image, $object));
        }
        return '';
    }

    /**
     * Display the image_icon of a MonitoredObject
     *
     * @param   MonitoredObject|stdClass   $object  The host or service
     * @return  string
     */
    public function service($object)
    {
        if ($object->service_icon_image && ! preg_match('/[\'"]/', $object->service_icon_image)) {
            return $this->view->icon($this->view->resolveMacros($object->service_icon_image, $object));
        }
        return '';
    }
}