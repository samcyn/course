<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\{
    ApplicantInterface as Applicant,
    TransactionInterface as Transaction,
    CourseInterface as Course
};

class PaymentController extends Controller
{
    public function __construct(Applicant $applicant, Transaction $transaction, Course $course)
    {
       $this->applicant = $applicant;

       $this->course = $course;

       $this->transaction = $transaction;
    }

    public function index($applicant_id)
    {
        $applicant = $this->applicant->getApplicant($applicant_id);

        return view('payment.index', compact('applicant', 'reference'));
    }


    public function store(Request $request)
    {
        
        $this->validate($request, ['applicant_id' => 'required']);

        $applicant = $this->applicant->getApplicant($request->applicant_id);

        $reference = uniqid(24);


        $data = [
            'applicant_id' => $applicant->id,
            'course_id' => $applicant->course->id,
            'amount' => $applicant->course->price,
            'reference' => $reference,
            'status' => 'pending'
        ];

        $transaction = $this->transaction->saveTransaction($data);

        return response()->json($transaction);
    }


    public function bankCheckout($applicant_id)
    {
        

        $applicant = $this->applicant->getApplicant($applicant_id);

        $reference = uniqid(24);


        $data = [
            'applicant_id' => $applicant->id,
            'course_id' => $applicant->course->id,
            'amount' => $applicant->course->price,
            'reference' => $reference,
            'status' => 'pending'
        ];

        $transaction = $this->transaction->saveTransaction($data);

        return redirect('/thankyou/'.$applicant_id);
    }


    public function update(Request $request, $transaction_id)
    {
        $transaction = $this->transaction->getTransaction($transaction_id);

        $this->transaction->updateTransaction($transaction_id, $request->all());

        if($request->status == 'success')
            $this->applicant->updatePaymentStatus($transaction->applicant_id, 'success');

        return response()->json(['status' => 'success']);

    }



    public function status($applicant_id)
    {
        $applicant = $this->applicant->getApplicant($applicant_id);

        $course = $applicant->course;

        return view('payment.thankyou', compact('course'));
    }
}
