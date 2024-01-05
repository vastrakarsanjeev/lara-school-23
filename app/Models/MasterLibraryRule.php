<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterLibraryRule extends Model
{
    use HasFactory;
    protected $fillable = ['no_book_without_fine','book_issue_at_time','let_fine','no_of_day_for_let_fee'];
}
