<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nis', 'name', 'gender', 'major', 'class'])]
#[Table('Students')]
class Student extends Model
{

}
