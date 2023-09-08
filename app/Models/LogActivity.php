<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LogActivity extends Model
{
    use HasFactory;

    protected $table = 'log_activity';

    public static function create($note, $type){
    	$log = new LogActivity();
    	$log->user_id = Auth::user()->id;
    	$log->name = Auth::user()->name;
    	$log->note = $note;
    	$log->type = $type;
    	$log->save();
    }
}
