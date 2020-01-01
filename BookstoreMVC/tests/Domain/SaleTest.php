<?php
/* 
./vendor/bin/phpunit tests/Domain/SaleTest.php
./vendor/bin/phpunit tests/Domain/Customer/BasicTest.php
 */
namespace Bookstore\Tests\Domain\Customer;

use Bookstore\Domain\Sale;
use PHPUnit_Framework_TestCase;

class SaleTest extends PHPUnit_Framework_TestCase {

    public function testCanCreate() {

        $sale = new Sale();
        $sale->addBook(123, 5);
        $this->assertEmpty($sale->getBooks());
    }

    public function testWhenAddingABookIGetOneBook() {
        $sale = new Sale();
        $sale->addBook(123);
        $this->assertSame(
            $sale->getBooks(), [123 => 1]);
    }

    public function testSpecifyAmountBooks() {

        $sale = new Sale();
        $sale->addBook(123, 5);
        $this->assertSame(
            $sale->getBooks(), [123 => 5]);
    }

    public function testAddMultipleTimesSameBook() {

        $sale = new Sale();
        $sale->addBook(123, 5);
        $sale->addBook(123);
        $sale->addBook(123, 5);
        $this->assertSame(
            $sale->getBooks(),[123 => 11]);
    }

    public function testAddDifferentBooks() {
        $sale = new Sale();
        $sale->addBook(123, 5);
        $sale->addBook(456, 2);
        $sale->addBook(789, 5);
        $this->assertSame(
            $sale->getBooks(),
            [123 => 5, 456 => 2, 789 => 5]);
    }

    /* public function testNewSaleHasNoBooks() {

        $sale = new Sale();
        $this->assertEmpty($sale->getBooks(),
        'When new, sale should have no books.');
    }

    public function testAddNewBook() {

        $sale = new Sale();
        $sale->addBook(123);

        /* $this->assertCount(1,$sale->getBooks(),
        'Number of books not valid.');

        $this->assertArrayHasKey(123,$sale->getBooks(),
        'Book id could not be found in array.');

        $this->assertSame($sale->getBooks()[123],
        1,'When not specified, amount of books is 1.'); */

       /*  $this->assertSame([123 => 1],
            $sale->getBooks(),'Books array does not match.');
    }

    public function testAddMultipleBooks() {
        
        $sale = new Sale();
        $sale->addBook(123, 4);
        $sale->addBook(456, 2);
        $sale->addBook(456, 8);

        $this->assertSame(
            [123 => 4, 456 => 10],$sale->getBooks(),
        'Books are not as expected.');
    } */ 
}