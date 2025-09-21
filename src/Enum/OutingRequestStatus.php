<?php // src/Enum/OutingRequestStatus.php
namespace App\Enum;
enum OutingRequestStatus: string { case PENDING='PENDING'; case CONFIRMED='CONFIRMED'; case CANCELLED='CANCELLED'; }
