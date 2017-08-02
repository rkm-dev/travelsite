<?php 
    namespace Travelsite\Models;

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class User extends Eloquent 
	{
		public function testimonials()
		{
			return $this->hasMany('Travelsite\models\Testimonial');
		}
	}
?>