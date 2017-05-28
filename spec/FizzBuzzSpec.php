<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_translate_1_for_fizzbuzz()
    {
        $this->translate(1)->shouldReturn(1);
    }

    function it_translate_2_for_fizzbuzz()
    {
        $this->translate(2)->shouldReturn(2);
    }

    function it_translate_3_for_fizzbuzz()
    {
        $this->translate(3)->shouldReturn('fizz');
    }

    function it_translate_4_for_fizzbuzz()
    {
        $this->translate(4)->shouldReturn(4);
    }

    function it_translate_5_for_fizzbuzz()
    {
        $this->translate(5)->shouldReturn('buzz');
    }

    function it_translate_6_for_fizzbuzz()
    {
        $this->translate(6)->shouldReturn('fizz');
    }

    function it_translate_15_for_fizzbuzz()
    {
        $this->translate(15)->shouldReturn('fizzbuzz');
    }

    function it_translate_9_for_fizzbuzz()
    {
        $this->translate(9)->shouldReturn('fizz');
    }

    function it_translate_30_for_fizzbuzz()
    {
        $this->translate(30)->shouldReturn('fizzbuzz');
    }

    function it_translate_sequence_for_fizzbuzz()
    {
        $this->translateSequence([1, 2, 3])->shouldReturn('1, 2, fizz');
    }

    function it_translate_sequence_2_for_fizzbuzz()
    {
        $this->translateSequence([3, 5, 15])->shouldReturn('fizz, buzz, fizzbuzz');
    }
}
