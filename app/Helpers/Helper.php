<?php

namespace App\Helpers;
use Carbon\Carbon;
class Helper {


	public static function DateFormate($val) {
		return Carbon::parse($val)->format('j F\, Y \of h:iA');
	}


}
