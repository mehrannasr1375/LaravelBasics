<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Company;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','create');
    }


    public function index()
    {
        //$registered_customers = Customer::registered()->get();
        ////$unregistered_customers = Customer::unregistered()->get();
        $registered_customers = Customer::registered()->paginate(6);
        $unregistered_customers = Customer::unregistered()->paginate(6);
        return view('customers.index', compact('registered_customers','unregistered_customers'));
    }

    
    public function create()
    {
        $customer = new Customer(); 
        $companies = Company::all();
        
        return view('customers.create', compact('customer', 'companies'));
    }

    
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'family' => 'required',
            'registered' => 'required',
            'company_id' => 'required',
        ]);
        Customer::create($data);
        return redirect('/customers');
    }

    
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    
    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    
    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'family' => 'required',
            'registered' => 'required',
            'company_id' => 'required'
        ]);
        $customer->update($data);
        return redirect('/customers/'.$customer->id);
    }

    
    public function destroy(Customer $customer)
    {   
        $customer->delete();
        return redirect('/customers');
    }









}
