<?php

class PrimeFactorizer {
	public function generate($integer) {
		$primes = [];

		$candidate = 2;

		while ($integer > 1) {
			while ($integer % $candidate == 0) {
				$primes[] = $candidate;
				$integer /= $candidate;
			}
			$candidate++;
		}

		return $primes;
    }
}
