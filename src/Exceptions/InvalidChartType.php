<?php

namespace Khill\Lavacharts\Exceptions;

class InvalidChartType extends \Exception
{
    public function __construct($invalidChart, $validCharts)
    {
        $badChart = (string) $invalidChart;

        $message  = "'$badChart' is not a valid chart type, must be one of ".
        $message .= '[ ' . implode(' | ', $validCharts) . ']';

        parent::__construct($message);
    }
}