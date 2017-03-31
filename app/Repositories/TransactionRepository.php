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

    public function getTransaction($id)
    {
        return $this->transaction->find($id);
    }

    public function saveTransaction($data = [])
    {
        $transaction =  $this->transaction->create($data);
        
        return $this->transaction->with('applicant')->find($transaction->id);
    }

    public function updateTransaction($id, $data = [])
    {
        return $this->transaction->where('id', $id)->update($data);
    }
}