<?php

namespace Exceptions;

class NotFoundException extends RestException {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct(self::NOT_FOUND);
	}


	/**
	 * Add exception specific data
	 *
	 * @param	array		$data		base level data
	 */
	protected function addErrorData(array &$data) {

	}

}
