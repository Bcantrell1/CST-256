<?php
namespace App\Models;

use JsonSerializable;

class DTO implements JsonSerializable {
	public $data;
	public $errorCode;
	public $errorMessage;

	public function __construct() {
		$this->data = [];
		$this->errorCode = null;
		$this->errorMessage = null;
	}

	public function jsonSerialize() {
        return get_object_vars($this);
    }
}