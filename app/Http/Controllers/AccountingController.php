<?php

namespace App\Http\Controllers;

use App\Repositories\ReportRepositoryInterface;

class AccountingController extends Controller
{
    /**
     * @var ReportRepositoryInterface
     */
    protected $report;

    public function __construct(ReportRepositoryInterface $report)
    {
        $this->report = $report;
    }

    public function report()
    {
        $this->report->show($data = []);
    }
}
