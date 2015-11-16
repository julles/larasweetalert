<?php namespace rezaar\larasweetalert;

class Larasweetalert
{
	

	public function alert($array = [])
	{

		$json =  json_encode($array);

		return "<script> swal(".$json.") </script>";
	}
}