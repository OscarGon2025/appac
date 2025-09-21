<?php // src/Enum/AdStatus.php
namespace App\Enum;
enum AdStatus: string { case PENDING='PENDING'; case APPROVED='APPROVED'; case REJECTED='REJECTED'; case ARCHIVED='ARCHIVED'; }
