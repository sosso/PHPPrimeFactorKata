<?php

class PrimeFactorizer {
	public function generate($integer) {
		if ($integer > 1) {
			return [$integer];
		} else {
			return [];
		}
    }
}
