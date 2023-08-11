<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->only(['name', 'phone', 'subject', 'email', 'message']);

        Contact::insert($data);

        return view('contact', []);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }
}