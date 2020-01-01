<?php

namespace Bookstore\Tests;

use PHPUnit_Framework_TestCase;
use InvalidArgumentException;

abstract class AbstractTestCase extends PHPUnit_Framework_TestCase {

    protected function mock(string $className) {

        if (strpos($className, '\\') !== 0) {
            $className = '\\' . $className;
        }

        if (!class_exists($className)) {

            $className = '\Bookstore\\' . trim($className, '\\');
            
            if (!class_exists($className)) {

                throw new InvalidArgumentException(
                "Class $className not found.");
            }
        }

        return $this->getMockBuilder($className)
        ->disableOriginalConstructor()
        ->getMock();
    }

    public function testBorrowingBook() {

        $controller = $this->getController();
        $controller->setCustomerId(9);
        $book = new Book();
        $book->addCopy();
        $bookModel = $this->mock(BookModel::class);
        $bookModel
            ->expects($this->once())
            ->method('get')
            ->with(123)
            ->will($this->returnValue($book));
        $bookModel
            ->expects($this->once())
            ->method('borrow')
            ->with(new Book(), 9);
        $bookModel
            ->expects($this->once())
            ->method('getByUser')
            ->with(9)
            ->will($this->returnValue(['book1', 'book2']));
        $this->di->set('BookModel', $bookModel);
        $response = "Rendered template";
        $this->mockTemplate(
            'books.twig', [
            'books' => ['book1', 'book2'],
            'currentPage' => 1,
            'lastPage' => true ], $response);
        $result = $controller->borrow(123);
        $this->assertSame(
            $result, $response,
            'Response object is not the expected one.' );
    }
}