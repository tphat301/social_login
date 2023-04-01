<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Biểu đồ hệ thống năm 2023')
            ->addData('Bán hàng thực tế', [40, 93, 35, 42, 18, 82])
            ->addData('Chỉ số bán hàng', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['Tháng1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12']);
    }

    public function index(MonthlyUsersChart $chart)
    {
        return view('admin.chart.index', ['chart' => $chart->build()]);
    }
}
