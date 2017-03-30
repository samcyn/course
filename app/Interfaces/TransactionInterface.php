<?php

namespace App\Interfaces;

interface TransactionInterface 
{
    public function saveTransaction($data = []);
    public function updateTransaction($id, $data = []);
}