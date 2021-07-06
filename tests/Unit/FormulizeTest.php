<?php

namespace Romano1996\Formulize\Tests\Unit;

use Romano1996\Formulize\Formulize;
use Romano1996\Formulize\Tests\UnitTestCase;

class FormulizeTest extends UnitTestCase
{
    /** @test */
    public function can_create_a_instance_of_formulize(): void
    {
        $formulize = new Formulize();

        $this->assertInstanceOf(Formulize::class, $formulize);
    }
}
