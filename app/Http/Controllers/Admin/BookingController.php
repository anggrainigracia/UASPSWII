<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking_Lapangan;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware("role:admin");
    }
    public function index()
    {
        $id = Auth::user()->id;
        $bookings = Booking_Lapangan::all();
        return view('admin.booking.index', compact('bookings'));
    }
    public function updateStatus($id, string $status)
    {
        $booking = Booking_Lapangan::findOrFail($id);

        $booking->status = $status;

        $booking->save();

        return redirect()->route('booking.index');
    }
}
