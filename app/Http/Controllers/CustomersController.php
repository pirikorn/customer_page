<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customers;
use RealRashid\SweetAlert\Facades\Alert;

class CustomersController extends Controller
{

    public function home() {
        $customers = Customers::where('removeFlag', '=', false)->orderBy('created_at','DESC')->get();
        return view('home', ['title' => "Home",'customers' => $customers->toArray()]);
    }

    public function createForm() {
        return view('customer_form', ['title' => "Create Customer"]);
    }

    public function editForm(Request $request, $id) {
        $customer = Customers::query()->find($id);
        if (!$customer) {
          return abort(404);
        }
        return view('customer_form', ['customer' => $customer, 'title' => "Edit Customer"]);
    }

    public function save(Request $request) {
        if($request->input('email')) {
            if (!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
                alert()->warning('Warning','Invalid email format.');
                return back()->withInput($request->all());
            }
        }
        $id = $request->get('id');
        if ($id) {
          $customer = Customers::query()->find($id);
          if (!$customer) {
            return abort(404);
          }
        } else {
          $customer = new Customers();
          $latestCustomer = Customers::orderBy('created_at','DESC')->first();
          $number = $latestCustomer->number ? $latestCustomer->number : 0;
          $customer->number = str_pad($number + 1, 8, "0", STR_PAD_LEFT);
        }

        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->removeFlag = false;

        $customer->save();
        alert('Success','บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('customer.edit.form', ["id" => $customer->id]);
    }

    public function delete(Request $request, $id) {
        if ($id) {
          $customer = Customers::query()->find($id);
          if (!$customer) {
            return abort(404);
          }
          $customer->removeFlag = true;
          $customer->save();
        }
        return redirect()->route('home');
    }
}
