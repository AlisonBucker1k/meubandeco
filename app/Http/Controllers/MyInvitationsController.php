<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInvitationsController extends Controller
{
    //

    public function index(){
        // Area onde o usuario coloca o email para acompanhar os convites e bonificação (Tela de "login")
        return view('area_acompanhe.login');
    }

    public function my_invitations(){
        return view('area_acompanhe.restrict');
    }
}