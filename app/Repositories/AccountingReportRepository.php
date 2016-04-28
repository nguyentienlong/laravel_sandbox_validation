<?php

namespace App\Repositories;

class AccountingReportRepository implements ReportRepositoryInterface
{
    public function show(array $data)
    {
        dd(get_class($this));
    }
}
