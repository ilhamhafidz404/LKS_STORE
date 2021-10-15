<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $code= "INV/".now()->format('Ymd').(string) rand(100, 999);
        Transaction::create([
            'product_id' => $request->product,
            'code_transaction' => $code,
            'total' => $request->total,
        ]);

        return back();
    }
}
