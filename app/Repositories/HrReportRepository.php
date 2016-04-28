<?php

namespace App\Repositories;

class HrReportRepository implements ReportRepositoryInterface
{
    public function show(array $data)
    {
        dd(get_class($this));
    }
}
