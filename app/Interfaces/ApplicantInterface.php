<?php
namespace App\Interfaces;

interface ApplicantInterface
{
    public function getApplicant($id);
    public function saveApplicant($data = []);
    public function updatePaymentStatus($id, $status);
    public function updateApplicant($id, $data = []);
}