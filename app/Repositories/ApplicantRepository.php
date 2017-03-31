<?php
namespace App\Repositories;

use App\Interfaces\ApplicantInterface;
use App\Models\Applicant;

class ApplicantRepository implements ApplicantInterface
{
    
    function __construct(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    public function getApplicant($id)
    {
        return $this->applicant->with('course')->find($id);
    }

    public function saveApplicant($data = [])
    {
       return $this->applicant->create($data);
    }

    public function updatePaymentStatus($id, $status)
    {
        return $this->updateApplicant($id, ['payment_status' => $status]);
    }

    public function updateApplicant($id, $data = [])
    {
        return $this->applicant->where('id', $id)->update($data);
    }
}
