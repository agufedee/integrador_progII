<?php 
class Concierto{
    public function __construct(protected string $tienda, protected array $personas = [])
    {}
}
