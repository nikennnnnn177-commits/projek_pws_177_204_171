<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Helpers\ApiFormatter;
use App\Helpers\ActivityLogger;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function getTransactions()
    {
        return ApiFormatter::createJson(
            200,
            'Transactions retrieved successfully',
            Transaction::all()
        );
    }

    public function getTransactionById($id)
    {
            return ApiFormatter::createJson(
                200,
                'Transaction retrieved successfully',
                Transaction::findOrFail($id)
            );
    }

    public function createTransaction(Request $request)
    {
        $transaction = Transaction::create($request->all());

        ActivityLogger::log(
            'transactions',
            'CREATE',
            "Transaction #{$transaction->id} created"
        );

        return ApiFormatter::createJson(
            201,
            'Transaction created successfully',
            $transaction
        );
    }

    public function updateTransaction(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        ActivityLogger::log(
            'transactions',
            'UPDATE',
            "Transaction #{$transaction->id} updated"
        );

        return ApiFormatter::createJson(
            200,
            'Transaction updated successfully',
            $transaction
        );
    }

    public function deleteTransaction($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        ActivityLogger::log(
            'transactions',
            'DELETE',
            "Transaction #{$id} deleted"
        );

        return ApiFormatter::createJson(
            200,
            'Transaction deleted successfully',
            null
        );
    }
}
