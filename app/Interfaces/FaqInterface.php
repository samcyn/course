<?php
namespace App\Interfaces;

interface FaqInterface
{
    public function getAllFaq($limit = null);
    public function getFaq($slug);
}