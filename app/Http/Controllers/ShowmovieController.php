<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowmovieController extends Controller
{
    //
    public function showmovie()
    {
        //return the view
        $tickets = Ticket::all();
        return view('moviegrid', compact("tickets"));
    }


    //
    public function showsinglemovie($id)
    {

        $ticket = Ticket::find($id);

        return view('moviesingle', compact("ticket"));
    }

    public function showbooking($id)
    {
        $ticket = Ticket::find($id);
        return view('ticketform', compact('ticket'));
    }



    public function insert(Request $request, $id)
    {
        $oneMovie = Ticket::find($id);
        $oneBook = booking::all();
        $book = new booking();
        $book->name = $request->input('name');
        $book->user_id = Auth::user()->id;
        foreach ($oneBook as $item) {
            if ($item->name == $book->name && $item->user_id == $book->user_id) {
                return redirect('destinations/' . $id)->withErrors('You already have a booking on this period');
            }
        }

        $price = $oneMovie->price;



        $book->phone = $request->input('phone');
        $book->date = $request->input('date');
        $book->time = $request->input('time');
        $book->price = $price;
        $book->movie_id = $id;
        $book->save();
        return redirect('/moviegrid')->withErrors('You have successfully booked the trip');
    }
}
