<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceProvider extends Model
{
    
  use SoftDeletes;
    protected $table = 'services_providers';

    const STATUS_NEW        = 1;
    const STATUS_PENDING    = 2;
    const STATUS_BILLED     = 3;
    const STATUS_PAID       = 4;
    const STATUS_CANCELED   = 5;
    const STATUS_EXPIRED    = 6;
    const STATUS_REJECT     = 7;
}
