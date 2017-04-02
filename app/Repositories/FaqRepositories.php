<?php
namespace App\Repositories;

use App\Interfaces\FaqInterface;
use App\Models\Faq;

class FaqRepository implements FaqInterface
{
    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
    }

    public function getAllFaq($limit = null)
    {
        if(is_null($limit))
            return $this->faq->all();
            
        return $this->faq->get()->take($limit);
    }

    public function getFaq($slug)
    {
        return $this->faq->where('slug', $slug)->first();
    }
}