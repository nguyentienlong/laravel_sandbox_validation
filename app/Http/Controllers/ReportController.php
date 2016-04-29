<?php

namespace App\Http\Controllers;
use App\Repositories\ReportRepository;

class ReportController extends Controller
{
    public function report($type) {
        $reporter = new ReportRepository;

        if($type == 'hr') {
            return $reporter->hrReport($data = []);
        }

        if($type == 'accounting') {
            return $reporter->accountingReport($data = []);
        }

        throw new \Exception('there is report function for kind of ' . $type . ' report');
    }
}
