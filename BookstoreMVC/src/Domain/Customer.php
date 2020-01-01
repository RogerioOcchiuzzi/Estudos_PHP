<?php

namespace Bookstore\Domain;

class Customer extends Person {

	public static $lastId = 0;
	public $id;
	public $email;

	public function __construct(int $id, string $firstname, 
		string $surname, string $email) {
	 
		 if (empty($id)) {

		 	$this->id = ++self::$lastId;
		 } else {

			 $this->id = $id;
			 if ($id > self::$lastId) {

			 	self::$lastId = $id;
			 }
		 }

		 $this->email = $email;

		 parent::__construct($this->id,$firstname, $surname,$this->email);
	}

	public static function getLastId(): int {

		return self::$lastId;
	}

	public function getId(): int {

		return $this->id;
	}

	public function getEmail(): string {

		return $this->email;
	}

	public function setEmail($email): string {

		$this->email = $email;
	}
}