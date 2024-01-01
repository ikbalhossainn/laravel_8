<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // echo "hello";
        // return view('home');
        $data['title'] = "Home page";
        $data['welcome'] = "Welcome to laravel";
        $data['fruits'] = "";
        return view('home', $data);
    }
    public function about(){
       // $data['title'] = "About Page";
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function store(Request $request){
        // print_r($request);
        // echo $request->email;
        // second days work start

        $contact = new Contact();

        $messages = [
            'name.required' => 'You have put your name',
            'email.required' => 'Please put your email',
            'email.email' => 'Please set valid email',
        ];

        $validate = $request->validate([
            'name'=> 'required|min:4',
            'email' => 'required | email'
        ], $messages);

        if($validate){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
    
            $contact->insert($data);

            return redirect('contact')->with('msg', 'We received your message');
        }
        //  else {
        //     echo "Validation Problem";
        // } // it doesn't require bcz laravel automatically redirect to origin if doesn't meet requirement
     
        // $session = session();
        // $session->flash('msg', 'we received your message');
        
    }

    public function contactList(){
        $contacts = Contact::all(); // scope resulation diye dorle new bolte hoy na
        $data['messages'] = $contacts;

        return view('contactList', $data);
    }

    public function delete($mid){
        echo $mid;

        $contacts = Contact::find($mid);
        // $contacts->delete();
        // return redirect('contactList');

        if($contacts->delete()){
            return redirect('contactList')->with('msg', 'Deleted Successfully');
        }
    }

    public function edit($mid){
        $contacts = Contact::find($mid);
        $data['single'] = $contacts;
        return view('edit', $data);
    }

    public function update(Request $request, $id){
        $contact = new Contact();

        $messages = [
            'name.required' => 'You have put your name',
            'email.required' => 'Please put your email',
            'email.email' => 'Please set valid email',
        ];

        $validate = $request->validate([
            'name'=> 'required|min:4',
            'email' => 'required | email'
        ], $messages);

        if($validate){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
    
            $contact->update($data);

            return redirect('contactList')->with('msg', 'Updated your message');
        }
       
        
    
    }
}
