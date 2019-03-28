<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompositePrimaryKey;

class MyModel extends Model
{
    use HasCompositePrimaryKey;

    protected $table = 'my_table';
    protected $primaryKey = [
        'primary_key_1',
        'primary_key_2'
    ];
}
