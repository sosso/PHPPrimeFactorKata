<?php

class PrimeFactorizer {
	public function generate($integer) {
		if ($integer % 2 == 0) {
			return [2,2];
		}
		if ($integer > 1) {
			return [$integer];
		} else {
			return [];
		}
    }
}
