<?php 
    class Library
    {
        private $books = [];
    
        public function addBook(Book $book)
        {
            $this->books[] = $book;
        }
    
        public function addBooks(array $books)
        {
            foreach ($books as $book) {
                $this->addBook($book);
            }
        }
    
        public function findBooksByLetter(string $letter)
        {
            return array_filter($this->books, function($book) use ($letter) {
                return strpos($book->title, $letter) === 0;
            });
        }
    }


?>
