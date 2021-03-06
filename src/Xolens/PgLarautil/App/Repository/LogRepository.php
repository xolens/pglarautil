<?php

namespace Xolens\PgLarautil\App\Repository;

use Xolens\PgLarautil\App\Model\Log;
use Xolens\PgLarautil\App\Repository\ReadableRepositoryContract;
use Xolens\PgLarautil\App\Repository\LogRepositoryContract;

class LogRepository extends AbstractSoftDeletableRepository implements LogRepositoryContract{
    public function model(){
        return Log::class;
    }

}