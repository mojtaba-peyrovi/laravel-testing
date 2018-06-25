<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Product;
class ProductTest extends TestCase
{
    protected $product;
    public function setUp()
    {
        $this->product= new Product('Fallout 4','2450 THB');
    }

    /** @test */
    function AProductHasName()
    {
        $this->assertEquals('Fallout 4',$this->product->name());
    }

    /** @test */
    function ProductHasPrice()
    {
        $this->assertEquals('2450 THB',$this->product->price());
    }

}
