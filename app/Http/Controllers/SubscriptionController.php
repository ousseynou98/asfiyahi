<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\SubscriptionType;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subscription_type_id' => 'required|exists:subscription_types,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'phone' => 'required',
            'country_id' => 'required|integer|exists:countries,id',
            'payment_method' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
        ]);

        Subscription::create($request->all());

        return redirect()->back()->with('success', 'Souscription réussie!');
    }

    // public function index()
    // {
    //     $countries = Country::all();
    //     $subscriptionTypes = SubscriptionType::all();
    //     $subscriptions = Subscription::all();
    //     return view('subscriptions.index', compact('subscriptions','subscriptionTypes','countries'));
    // }

    // public function show($id)
    // {
    //     $subscription = Subscription::findOrFail($id);
    //     return view('subscriptions.show', compact('subscription'));
    // }

    public function index()
    {
        $subscriptions = Subscription::with(['subscriptionType', 'country'])->get();
        //echo "fgdggfd";
        return view('pages.subscriptions.index', compact('subscriptions'));
    }

    // Display the specified resource
    public function show($id)
    {
        $subscription = Subscription::with(['subscriptionType', 'country'])->findOrFail($id);
        return view('pages.subscriptions.show', compact('subscription'));
    }

    public function destroy($id)
    {
        Subscription::destroy($id);
        return redirect()->route('subscriptions.index')->with('success', 'Souscription supprimée!');
    }

    // public function create()
    // {
    //     $subscriptionTypes = SubscriptionType::all();
    //     $countries = Country::all();
    //     return view('subscriptions.create', compact('subscriptionTypes', 'countries'));
    // }
    public function create()
    {
        // Retrieve all subscription types and countries from the database
        $subscriptionTypes = SubscriptionType::all();
        $countries = Country::all();

        // Pass the retrieved data to the create view
        return view('pages.subscriptions.create', compact('subscriptionTypes', 'countries'));
    }

}
