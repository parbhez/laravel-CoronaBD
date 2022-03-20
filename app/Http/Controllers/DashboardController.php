<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
class DashboardController extends Controller
{
    public function dashboard()
    {
    	$data = file_get_contents('https://corona.in.com.bd/api/details');
    	$getData = json_decode($data,true);
    	// echo '<pre>';
    	// print_r($getData);
    	// exit();
    	return view('index',compact('getData'));
    }

    public function home()
	{
		$data = User::get();
    $chart_options = [
        'chart_title' => 'Users by months',
        'report_type' => 'group_by_date',
        'model' => '$data',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'bar',
        'filter_field' => 'created_at',
        'filter_days' => 30, // show only last 30 days
    ];

    $chart1 = new LaravelChart($chart_options);


    $chart_options = [
        'chart_title' => 'Users by names',
        'report_type' => 'group_by_string',
        'model' => '$data',
        'group_by_field' => 'name',
        'chart_type' => 'pie',
        'filter_field' => 'created_at',
        'filter_period' => 'month', // show users only registered this month
    ];

    $chart2 = new LaravelChart($chart_options);
  //   $data = file_get_contents('https://corona.in.com.bd/api/details');
		// $getData = json_decode($data,true);
		// echo '<pre>';
  //   	print_r($getData['data']);
  //   	exit();

    $chart_options = [
        'chart_title' => 'Transactions by dates',
        'report_type' => 'group_by_date',
        'model' => '$data',
        'group_by_field' => 'created_at',
        'group_by_period' => 'day',
        'aggregate_function' => 'sum',
        'aggregate_field' => 'amount',
        'chart_type' => 'line',
    ];

    $chart3 = new LaravelChart($chart_options);

    return view('home', compact('chart1', 'chart2', 'chart3'));
}
}
