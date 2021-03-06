<?php

Namespace Model\JFeature;

class Base extends \Model\CoreBase {

  public function __construct($params) {
    parent::__construct($params);
    $adminCompPath = dirname($this->joomlaConfigFile)."/administrator/components/com_gcworkflowdeploy";
    $compPath = dirname($this->joomlaConfigFile)."/components/com_gcworkflowdeploy";
      if (!defined("JPATH_COMPONENT_ADMINISTRATOR")) { define("JPATH_COMPONENT_ADMINISTRATOR", $adminCompPath ) ; }
      if (!defined("JPATH_COMPONENT")) { define("JPATH_COMPONENT", $compPath ) ; }
  }

}
