<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminDashboardController extends Controller {

		public function getIndex() {
			return view('admin_dashboard');
		}


	}