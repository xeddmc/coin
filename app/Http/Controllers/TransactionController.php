<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $user = Auth::user();
            return view('trans')->with('user', $user);
        } else {
            return view('index');
        }
    }
    public function buy($id)
    {
        if (Auth::user()) {
            $idu = Auth::user()->id;
            $user = Auth::user();
            if ($id == 1) {
                $user['AZN'] = $user['AZN'] - 100;
                $user['BTC'] = $user['BTC'] + 0.00562;
                DB::table('users')
                    ->where('id', $idu)
                    ->update([
                        'AZN' => $user['AZN'],
                        'BTC' => $user['BTC']
                    ]);
                return redirect()->route('services')->with('user', $user);
            }
            if ($id == 5) {
                $user['AZN'] = $user['AZN'] + 500;
                DB::table('users')
                    ->where('id', $idu)
                    ->update(['AZN' => $user['AZN']]);
                return redirect()->route('services')->with('user', $user);
            }
            if ($id == 2) {
                $user['AZN'] = $user['AZN'] - 200;
                $user['BTC'] = $user['BTC'] + 0.01125;
                DB::table('users')
                    ->where('id', $idu)
                    ->update([
                        'AZN' => $user['AZN'],
                        'BTC' => $user['BTC']
                    ]);
                return redirect()->route('services')->with('user', $user);
            }
            if ($id == 3) {
                $user['AZN'] = $user['AZN'] - 500;
                $user['BTC'] = $user['BTC'] + 0.02817;
                DB::table('users')
                    ->where('id', $idu)
                    ->update([
                        'AZN' => $user['AZN'],
                        'BTC' => $user['BTC']
                    ]);
                return redirect()->route('services')->with('user', $user);
            }
            if ($id == 4) {
                $user['BTC'] = $user['BTC'] - 2.26;
                $user['ETH'] = $user['ETH'] + 100;
                DB::table('users')
                    ->where('id', $idu)
                    ->update([
                        'BTC' => $user['BTC'],
                        'ETH' => $user['ETH']
                    ]);
                return redirect()->route('services')->with('user', $user);
            }
            if ($id == 6) {
                $user['BTC'] = $user['BTC'] - 0.002786;
                $user['XRP'] = $user['XRP'] + 100;
                DB::table('users')
                    ->where('id', $idu)
                    ->update([
                        'BTC' => $user['BTC'],
                        'XRP' => $user['XRP']
                    ]);
                return redirect()->route('services')->with('user', $user);
            }                    
        }
        else{
            
                return redirect()->route('login');
            
        }
    }
}
