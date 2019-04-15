<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Activity;
use AWS;
use Config;
use App\ActivityDynamoDB;


class ActivityController extends Controller
{
    public function view() {

		// $json = Storage::disk('local')->get('procrastitracker_report.json');
		// $json = json_decode($json, true);

		$json = Activity::defaultOrder()->withDepth()->get()->toTree()->toJson();

		dd($json);

    }

    public function save() {

		$json = Storage::disk('local')->get('procrastitracker_report.json');
		$json = json_decode($json, true);

		Activity::create($json);

		dd($json);

    }

    public function rebuild() {

		$json = Storage::disk('local')->get('procrastitracker_report.json');
		$json = json_decode($json, true);

		// $delete = Activity::descendantsAndSelf(1);

		// Activity::rebuildTree($json, $delete);

		$root = Activity::descendantsAndSelf(1)->toTree()->first();

		Activity::rebuildSubtree($root, $json);

		dd($json);

    }

    public function home() {

        //Fetching credentials for DynamDB
        $config =  Config::get('aws');

        //Create DynamoDb client & specify table
        $client = AWS::createClient('DynamoDb');

        $table = 'emit-activity-stream-EventData';
        $limit = 10;

        $result = $client->scan(array(
        		'TableName' => $table,
        		'Limit' => $limit,
        		'Select' => 'ALL_ATTRIBUTES'                
     		),
    		array('limit' => $limit),
  		);

  		// $result = ActivityDynamoDB::where('endtime', '=', '2019-04-11T18:44:38Z')->get();

  		dd($result);
		
		return view('analytics');

    }
}
