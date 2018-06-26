<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Product;
use App\Order;

class OrderTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function an_order_consists_of_products()
    {
        $order = new Order;

        $product = new Product('Fallout 4', 59);
        $product2 = new Product('Pillow case', 86);

        $order->add($product);
        $order->add($product2);

        // $this->assertEquals(2, count($order->products()));
        $this->assertCount(2, $order->products());
    }

    /** @test */
    public function an_order_can_determine_the_total_cost_of_all_its_products()
    {
        $order = new Order;

        $product = new Product('Fallout 4', 59);
        $product2 = new Product('Pillow case', 86);

        $order->add($product);
        $order->add($product2);

        $this->assertEquals(145, $order->total());
    }
}
