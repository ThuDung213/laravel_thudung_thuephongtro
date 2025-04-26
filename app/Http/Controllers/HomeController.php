<?php

namespace App\Http\Controllers;

use App\Models\PhongTro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //  Get rent rooms
        $rentRooms = PhongTro::all();
        return view('index', compact('rentRooms'));
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'start_date' => 'required|date',
            'payment_id' => 'required|exists:payments,id',
            'note' => 'nullable|string|max:255',
        ]);
        PhongTro::create($data);
        return redirect()->back()->with('success', 'Room created successfully');
    }

    public function destroy($id)
    {
        $room = PhongTro::findOrFail($id);
        $room->delete();
        return redirect()->back()->with('success', 'Room deleted successfully');
    }

    // search with ajax
    public function search(Request $request)
    {
        $query = $request->input('query');
        $rentRooms = PhongTro::where('name', 'LIKE', "%{$query}%")
            ->orWhere('phone', 'LIKE', "%{$query}%")
            ->get();
        return response()->json($rentRooms);
    }
}
