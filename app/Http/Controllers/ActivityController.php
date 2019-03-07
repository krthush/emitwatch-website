<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Activity;

class ActivityController extends Controller
{
    public function view() {

		$json = Storage::disk('local')->get('procrastitracker_report.json');
		$json = json_decode($json, true);

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
}
