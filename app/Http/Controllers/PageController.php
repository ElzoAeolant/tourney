<?php
/*

=========================================================
* Argon Dashboard PRO - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro-laravel
* Copyright 2018 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)

* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
namespace App\Http\Controllers;
use App\Models\Participant;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    /**
     * Display the ranking page
     *
     * @return \Illuminate\View\View
     */
    public function ranking()
    {
        $rank = Participant::where('validated', '=', 1)
                            ->where('showed', '=', 1)
                            ->orderByRaw('CAST(talla AS FLOAT) DESC')
                            ->orderByRaw('CAST(pesoEviserado AS FLOAT) DESC')
                            ->limit(3)
                            ->get();      
        
        return view('pages.ranking', ['first'=> isset($rank[0]->folio)? $rank[0]->folio : 'POR DEFINIRSE',
                                      'second'=> isset($rank[1]->folio)? $rank[1]->folio : 'POR DEFINIRSE',
                                      'third'=> isset($rank[2]->folio)? $rank[2]->folio : 'POR DEFINIRSE',
                                      'participants' => Participant::all()
                                    ]);
    }

    /**
     * Display the lock page
     *
     * @return \Illuminate\View\View
     */
    public function lock()
    {
        return view('pages.lock');
    }
}
