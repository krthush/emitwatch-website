<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Activity;
use AWS;
use Config;
use App\ActivityDynamoDB;

use Aws\DynamoDb\Marshaler;
use Aws\DynamoDb\Exception\DynamoDbException;


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

        $tableName = 'emit-activity-stream-EventData';
        $limit = 10;

        $marshaler = new Marshaler();

  //       $eav = $marshaler->marshalJson('
		//     {
		//         ":MAC_address": "9C:DA:3E:5A:8A:D5" 
		//     }
		// ');

		// $params = [
		//     'TableName' => $tableName,
		//     'KeyConditionExpression' => '#MAC_address = :MAC_address',
		//     'ExpressionAttributeNames'=> [ '#MAC_address' => 'MAC_address' ],
		//     'ExpressionAttributeValues'=> $eav
		// ];

		$eav = $marshaler->marshalJson('
		    {
		        ":MAC_address":"9C:DA:3E:5A:8A:D5",
		        ":endtime1": "2019-04-15T14:44:38Z",
		        ":endtime2": "2019-04-15T15:44:38Z"
		    }
		');

		$params = [
		    'TableName' => $tableName,
		    'KeyConditionExpression' =>
		        '#MAC_address = :MAC_address and endtime between :endtime1 and :endtime2',
		    'ExpressionAttributeNames'=> [ '#MAC_address' => 'MAC_address' ],
		    'ExpressionAttributeValues'=> $eav
		];

        $result = $client->query($params);

    //     $result = $client->scan(array(
    //     		'TableName' => $tableName,
    //     		'Limit' => $limit,
    //     		'Select' => 'ALL_ATTRIBUTES'                
    //  		),
    // 		array('limit' => $limit),
  		// );

  		// $result = ActivityDynamoDB::where('endtime', '=', '2019-04-11T18:44:38Z')->get();

  		dd($result);
		
		return view('analytics');

    }
}
