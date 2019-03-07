<?php

namespace ProgramZheng\ScormCloudLaravel;

use AsifM42\ScormCloud\ScormEngineService;

class ScormCloud
{
    public $scormService,$scormCourseService,$scormRegistrationService = null;
    public function __construct() {
        $this->scormService = new ScormEngineService (
            config('scormcloud.url'),
            config('scormcloud.app_id'),
            config('scormcloud.key'),
            config('scormcloud.organization')
        );
        $this->scormCourseService = $this->scormService->getCourseService();
        $this->scormRegistrationService = $this->scormService->getRegistrationService();
    }

    public function doRegister ($registrationId, $courseId, $learnerId, $learnerFirstName, $learnerLastName) {
        return $this->scormRegistrationService->CreateRegistration($registrationId, $courseId, $learnerId, $learnerFirstName, $learnerLastName);
    }

    public function getLaunchUrl ($registrationId){
        return $this->scormRegistrationService->GetLaunchUrl($registrationId,url('/'));
    }

    public function doImportCourseAsync ($courseId, $absoluteFilePathToZip) {
        return $this->scormCourseService->ImportCourseAsync($courseId, $absoluteFilePathToZip);
    }

    public function getPreviewUrl () {
        return $this->scormCourseService->GetPreviewUrl(1,url('/'));
    }
}