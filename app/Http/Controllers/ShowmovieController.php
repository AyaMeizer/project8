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

        if (!Auth::user()){
           return redirect('login');
        }



        $oneMovie = Ticket::find($id);
        $oneBook = booking::all();
        $book = new booking();
        $book->name = $request->input('name');
        $book->date = $request->input('date');
        $book->time = $request->input('time');

        $book->user_id = Auth::user()->id;
        foreach ($oneBook as $item) {
            if (
                $item->name == $book->name && $item->user_id == $book->user_id &&
                $item->date == $book->date && $item->time == $book->time
            ) {
                return redirect('moviesingle/' . $id)->with('success','You already have a booking on this Time ' . $item->time . ' ' . ' on ' . ' ' .$item->date );
            }
        }

        $price = $oneMovie->price;



        $book->phone = $request->input('phone');
        // $book->date = $request->input('date');
        // $book->time = $request->input('time');
        $book->price = $price;
        $book->movie_id = $id;
        $book->save();
        return redirect('moviesingle/' . $id)->with('success','You have successfully booked the ticket' . $item->time . ' ' . ' on ' . ' ' . $item->date);
    }
}
