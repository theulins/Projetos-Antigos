<?php

class View
{
    public function render($view, $data = [])
    {
        extract($data);
        require 'views/' . $view . '.php';
    }
}
