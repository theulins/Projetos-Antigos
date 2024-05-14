<?php

class Product extends Controller
{
    public function index()
    {
        $this->view('product/index');
    }

    public function details($id)
    {
        $data['product_id'] = $id;
        $this->view('product/details', $data);
    }
}
