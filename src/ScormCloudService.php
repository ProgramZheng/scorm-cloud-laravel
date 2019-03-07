<?php

namespace ProgramZheng\ScormCloudLaravel;

use AsifM42\ScormCloud\ScormEngineService;

class ScormCloudService
{
    public $scormService = null;
    public function __construct() {
        $this->scormService = new ScormEngineService (
            config('scormcloud.url'),
            config('scormcloud.app_id'),
            config('scormcloud.key'),
            config('scormcloud.organization')
        );
    }

}