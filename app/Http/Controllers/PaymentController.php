<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\{
    ApplicantInterface as Applicant,
    TransactionInterface as Transaction
};

class PaymentController extends Controller
{
    public function __construct(Applicant $applicant, Transaction $transaction)
    {
       $this->applicant = $applicant;

       $this->transaction = $transaction;
    }

    public function index($applicant_id)
    {
        $applicant = $this->applicant->getApplicant($applicant_id);

        $reference = uniqid(16);

        return view('payment.index', compact('applicant', 'reference'));
    }


    public function store(Request $request)
    {
        $this->validate($request, []);

        $this->transaction->saveTransaction($request->all());
    }


    public function update(Request $request, $transaction_id)
    {
        $transaction = $this->transaction->getTransaction($transaction_id);

        $this->transaction->updateTransaction($request->all(), $transaction_id);

        if($request->status == 'success')
            $this->applicant->updatePaymentStatus($transaction->applicant_id, 'success');

    }
}
