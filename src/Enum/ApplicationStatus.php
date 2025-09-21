<?php // src/Enum/ApplicationStatus.php
namespace App\Enum;
enum ApplicationStatus: string { case PENDING='PENDING'; case APPROVED='APPROVED'; case REJECTED='REJECTED'; }
