<?php

namespace ProgramZheng\ScormCloudLaravel;

use ProgramZheng\ScormCloudLaravel\ScormCloud;

class ScormCloudCourseService extends ScormCloud
{
    public $scormCourseService = null;
    public function __construct() {
        $this->scormCourseService = $this->scormService->getCourseService();
    }

    public function doImportCourseAsync ($courseId, $absoluteFilePathToZip) {
        return $this->scormCourseService->ImportCourseAsync($courseId, $absoluteFilePathToZip);
    }

    public function getPreviewUrl () {
        return $this->scormCourseService->GetPreviewUrl(1,url('/'));
    }
}