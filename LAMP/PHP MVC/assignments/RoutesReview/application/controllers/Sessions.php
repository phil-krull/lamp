<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {


	public function new_session()
	{
		echo "Welome to the Sessions controller";
	}
		public function destroy()
	{
		echo "This page will self destruct in 10 seconds!";
	}
	
}