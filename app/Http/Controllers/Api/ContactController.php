<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        try{
            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'message' => $request->message,
            ];
            $contact = Contact::create($data);
            if($contact){
                $body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";
                $details = [
                    'title' => 'Contact Has Been Send',
                    'body' => $body,
                    'name' => $contact->first_name . $contact->last_name
                ];
                Mail::to($contact->email)->send(new \App\Mail\ContactMail($details));
                return response()->json([
                    'contact'  => $contact,
                    'status' => 'success',
                    'message' => 'Contact Added Sucessfully !!'
                ]);
            }else{
                return response()->json([
                    'status' => 'error',
                    'message' => 'Contact Not Sucessfully !!'
                ]);
            }


        }catch (\Exception $e){
            return [
                'value'  => [],
                'status' => 'error',
                'message'   => $e->getMessage()
            ];
        }
    }
}
