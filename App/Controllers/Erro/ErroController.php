<?php

namespace App\Controllers\Erro;

use App\Controllers\BaseController;

class ErroController {
	public function index() {
		dd('Erro');
	}

	public function erro503() {
		dd(503);
	}
}