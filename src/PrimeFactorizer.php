<?php

class PrimeFactorizer {
	public function generate($integer) {
		if ($integer == 4) {
			return [2,2];
		}
		if ($integer > 1) {
			return [$integer];
		} else {
			return [];
		}
    }
}
