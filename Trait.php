<?php

trait A{
    public $a="a";
}

trait B{
    public $b="b";
}

trait C{
    public $c="c";
}

class Run{
    use A,B,C;
}

$run = new Run;
print_r($run);