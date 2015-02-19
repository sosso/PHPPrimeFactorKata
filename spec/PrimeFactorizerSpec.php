<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorizerSpec extends ObjectBehavior {
    function it_is_initializable() {
        $this->shouldHaveType('PrimeFactorizer');
    }

	function it_returns_empty_arr_for_1() {

	}
}
