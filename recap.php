<?php

namespace App\Controllers;


class recap extends BaseController
{
    public function index()
    {

        $datarecap = new \App\Models\modelrecap();
        $data['datarecap'] = $datarecap->orderBy('id')->findAll();
        return view('recapview', $data);
    }
}
