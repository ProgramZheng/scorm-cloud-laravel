<?php

namespace ProgramZheng\ScormCloudLaravel;

use ProgramZheng\ScormCloudLaravel\ScormCloud;

class ScormCloudRegistrationService extends ScormCloud
{
    public $scormRegistrationService = null;
    public function __construct() {
        $this->scormRegistrationService = $this->scormService->getRegistrationService();
    }

    public function doRegister ($registrationId, $courseId, $learnerId, $learnerFirstName, $learnerLastName) {
        return $this->scormRegistrationService->CreateRegistration($registrationId, $courseId, $learnerId, $learnerFirstName, $learnerLastName);
    }

    public function getLaunchUrl ($registrationId){
        return $this->scormRegistrationService->GetLaunchUrl($registrationId,url('/'));
    }

}