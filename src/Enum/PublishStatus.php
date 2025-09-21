<?php // src/Enum/PublishStatus.php
namespace App\Enum;
enum PublishStatus: string { case DRAFT='DRAFT'; case PUBLISHED='PUBLISHED'; case CANCELLED='CANCELLED'; }
