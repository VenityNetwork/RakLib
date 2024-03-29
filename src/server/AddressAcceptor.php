<?php

declare(strict_types=1);

namespace raklib\server;

use raklib\utils\InternetAddress;

class AddressAcceptor{

	public function accept(InternetAddress $address): bool{
		return true;
	}
}