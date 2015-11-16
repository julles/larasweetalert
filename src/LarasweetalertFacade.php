<?php namespace rezaar\larasweetalert;
	
	use Illuminate\Support\Facades\Facade;
	use rezaar\larasweetalert\Larasweetalert;

	class LarasweetalertFacade extends Facade
	{

		public static function getFacadeAccessor()
		{
			return 'register-sweetalert';
		}

	}