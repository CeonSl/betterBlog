<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Charts\SampleChart;
class grafico1 extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $chart = new SampleChart;
        $chart->labels(['One', 'Two', 'Three']);
    }
}
