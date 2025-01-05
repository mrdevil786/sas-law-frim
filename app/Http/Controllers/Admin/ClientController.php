<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'name' => 'required|string|max:255',
        ]);

        $client = new Client();
        $client->image = FileUploader::uploadFile($request->file('image'), 'images/client-image');
        $client->name = $request->name;

        $client->save();

        return redirect()->route('admin.clients.index')->with('success', 'Client registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        $isEdit = false;
        return view('admin.client.edit', compact('client', 'isEdit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $isEdit = true;
        return view('admin.client.edit', compact('client', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'name' => 'required|string|max:255',
        ]);

        $client = Client::findOrFail($id);
        $client->name = $request->name;

        if ($request->hasFile('image')) {
            $client->image = FileUploader::uploadFile($request->file('image'), 'images/client-image', $client->image);
        }

        $client->save();

        return redirect()->route('admin.clients.index')->with('success', 'Client updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('admin.clients.index')->with('success', 'Client deleted successfully!');
    }
}
