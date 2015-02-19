<?php

class PrimeFactorizer {
	public function generate($integer) {
		$primes = [];

		while ($integer % 2 == 0) {
			$primes[] = 2;
			$integer /= 2;
		}

		while ($integer % 3 == 0) {
			$primes[] = 3;
			$integer /= 3;
		}

		while ($integer % 5 == 0) {
			$primes[] = 5;
			$integer /= 5;
		}

		if ($integer > 1) {
			$primes[] = $integer;
		}
		return $primes;
    }
}
