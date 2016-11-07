<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TicketCategory extends Model
{
    protected $fillable = ['name'];
    public function ticket()
    {
      return $this->hasMany('App\Ticket');
    }
}
