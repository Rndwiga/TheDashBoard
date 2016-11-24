<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
  protected $fillable = [
    'asset_model', 'asset_location', 'asset_type', 'asset_serial', 'asset_tag', 'asset_user',
    'asset_notes', 'times_repaired', 'contact_number',
  ];
}
