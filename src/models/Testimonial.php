<?php 
    namespace Travelsite\Models;

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Testimonial extends Eloquent 
	{
		public function user()
		{
			return $this->hasOne('Travelsite\Models\User');
		}
	}
?>