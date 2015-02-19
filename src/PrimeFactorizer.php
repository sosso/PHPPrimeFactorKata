<?php

class PrimeFactorizer {
	public function generate($integer) {
		$primes = [];
		while ($integer % 2 == 0) {
			$primes[] = 2;
			$integer /= 2;
		}
		if ($integer > 1) {
			$primes[] = $integer;
		}
		return $primes;
    }
}
