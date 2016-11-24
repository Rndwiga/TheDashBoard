<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
			protected $fillable = [
				'contact_picture', 'name', 'mobile', 'address', 'profession', 'contactId'
			];
}
