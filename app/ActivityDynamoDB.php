<?php

namespace App;

use BaoPham\DynamoDb\Facades\DynamoDb;
use BaoPham\DynamoDb\DynamoDbModel;

class ActivityDynamoDB extends \BaoPham\DynamoDb\DynamoDbModel
{
    protected $table = 'emit-activity-stream-EventData';
    protected $fillable = ['MAC_address', 'endtime'];
}
