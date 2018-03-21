<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Signature;

class ReportSignature extends Controller
{
    /**
     * Flag the given signature.
     *
     * @param Signature $signature
     * @return Signature
     */
    public function update(Signature $signature)
    {
        $signature->flag();

        return $signature;
    }
}
