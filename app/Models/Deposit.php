<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends Model
{
    use HasFactory;
    use SoftDeletes;

    

    // protected $fillable = [
    //     'user_id',
    //     'nowpayment_address',
    //     'nowpayment_currency',
    //     'child_investment_plan_id',
    //     'main_wallet_id',
    //     'transaction_hash', 
    //     'amount', 
    //     'remaining_duration', 
    //     'expires_at', 
    //     'is_expired',
    //     'reinvestment',
    //     'status',
    //     'running',
    //     'created_at',
    //     'updated_at',
    //     'deleted_at',
    //     'approved_at',
    //     'denied_at'
    // ];

    protected $guarded = [];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function wallet() {
        return $this->belongsTo(MainWallet::class, 'main_wallet_id')
        ->withDefault(function () {
            $mainWallet = new MainWallet;

            $mainWallet->currency = 'None';
            $mainWallet->currency_symbol = 'None';

            return $mainWallet;
        });
    }

    public function user_wallet() {
        return $this->belongsTo(UserWallet::class, 'user_wallet_id');
    }

    public function plan() {
        return $this->belongsTo(ChildInvestmentPlan::class, 'child_investment_plan_id');
    }
}
