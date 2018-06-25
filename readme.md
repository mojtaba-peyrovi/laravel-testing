part 1-
in order to run the test, in terminal  we say:  <app_name> phpunit
but sometimes we can't do it becuase it can't find the executable. we need to say: vendor/bin/phpunit
- when we want the test to visit a page:   $this->visit('<page_url>');
- when we want the test to click a button :  $this->click('Id,name or body attribute of the object');
- when we want the test to see something we say: $this->see('object_name');
- when we want the test to check a page url we say: $this->seePageIs('url');
instead of writing all of this in seperate lines we can chain them like this: $this->visit('<page_url>')
->click('Id,name or body attribute of the object')
->see('object_name');
------------------------------
part 2:
there are so many levels of testing. like an onion. 
- each test's name has to be starting with 'test' otherwise laravel won't interpret it. 
- sometimes we want to trigger only one test file. so we need to mention the full path of that file in test function after vendor/bin/phpunit, e.g.
vendor/bin/phpunit tests/units/ProductTest.php
- we made a model and checked if the model called Product has an object with the name of 'Fallout 4' or not. for this we did it this way:
first defined a variable called $product. then istantiated it as an instance of Product. then made its name equal to 'Fallout 4' then we used
$this->assertEquals('Fallout 4' , $product->name());
-when we get green and feel there is a way to refactor some code we can do it and run the test again. if it gets green again, our refactoring has worked otherwise, it hasn't.
- since for both tests we had to define exactly the same instance of Product, we can use a function called setUp() before any test method. 
like this:
 protected $product;
    public function setUp()
    {
        $this->product= new Product('Fallout 4','2450 THB');
    }
instead of have all the test starting with the prefix 'test' we can use annotation like this:  /** @test */
then we dont need to have the test prefix in the beginning of each test name.
** PSR-2 is the coding standard convention for php coding. link: https://www.php-fig.org/psr/psr-2/
