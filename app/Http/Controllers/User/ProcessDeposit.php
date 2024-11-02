<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProcessDeposit extends Controller
{
    public function __invoke(Request $request)
    {

        try {

            $status = $request->input('payment_status');
            $transactionHash = $request->input('order_id');

            $depositStatus = match ($status) {
                'waiting' => 'pending',
                'confirming', 'confirmed', 'sending' => 'pending',
                'failed', 'refunded', 'expired' => 'denied',
                'finished' => 'accepted',
                default => 'pending',
            };

            $deposit = Deposit::where('transaction_hash', $transactionHash)->first();

            if (!$deposit) return;

            if ($depositStatus == 'accepted') {

                $deposit->update([
                    'status' => $depositStatus,
                    'running' => true,
                    'approved_at' => now(),
                ]);

                Log::info("{$deposit->user->name} Deposit approved successfully");

                return ['deposit approved successfully'];
            } else {
                $deposit->update(['status' => $depositStatus]);
                Log::info("{$deposit->user->name} Deposit status set to {$deposit->status}");

                return ["{$deposit->user->name} Deposit status set to {$deposit->status}"];
            }

        } catch (\Exception $e) {
           
            Log::error('deposit-error', [$deposit, 'message' => $e->getMessage()]);
        }
    }

}
