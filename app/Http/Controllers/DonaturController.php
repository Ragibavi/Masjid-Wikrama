<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index()
    {
        $donatur = Donatur::all();
        $count = Donatur::count();
        $nominal = Donatur::sum('nominal');

        return view('donatur.index', compact('donatur','count','nominal'));
        return view('welcome', compact('welcome'));
    }

    
    public function showTable()
    {
        $donatur = Donatur::all();

        return view('donatur.show_table', compact('donatur'));
    }

    public function login()
    {
        $donatur = Donatur::all();

        return view('login.login', compact('donatur'));
    }

    public function done()
    {
        $donatur = Donatur::all();

        return view('donatur.done', compact('donatur'));
    }

    public function create()
    {
        return view('donatur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'donatur_id' => 'required',
            'packet' => 'required',
            'category' => 'required',
            'nominal' => 'required'
        ]);

        Donatur::create($request->all());

        return redirect()->route('donatur.showTable')->with('success', 'Donatur berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $donatur = Donatur::findOrFail($id);

        return view('donatur.edit', compact('donatur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'donatur_id' => 'required',
            'packet' => 'required',
            'category' => 'required',
            'nominal' => 'required'
        ]);

        $donatur = Donatur::findOrFail($id);
        $donatur->update($request->all());

        return redirect()->route('donatur.showTable')->with('success', 'Donatur berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $donatur = Donatur::findOrFail($id);
        $donatur->delete();

        return redirect()->route('donatur.showTable')->with('success', 'Donatur berhasil dihapus.');
    }
}
