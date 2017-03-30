<?php
namespace App\Repositories;

use App\Models\Transaction;

use App\Interfaces\TransactionInterface;


class TransactionRepository implements TransactionInterface
{
    
    function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    public function saveTransaction($data = [])
    {
        return $this->transaction->create($data);
    }

    public function updateTransaction($id, $data = [])
    {
        return $this->transaction->where('id', $id)->update($data);
    }
}