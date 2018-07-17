<?php

namespace App\Http\Controllers\Contacts;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use JavaScript;

class ContactController extends Controller {

	public function index() {
		$contacts = Contact::all();

		JavaScript::put([
			'contacts' => $contacts
		]);

		return view('contacts.index');
	}

	public function create() {
		JavaScript::put([
			// contact defaults
			'contact' => (object) [],
		]);

		return view('contacts.create', [
		]);
	}

	public function edit(Contact $contact) {
		JavaScript::put([
			'contact' => $contact
		]);

		return view('contacts.create', [
			'contact' => $contact
		]);
	}

	// public function show(Contact $contact) {
	// 	// JavaScript::put([]);

	// 	return view('contacts.index', [
	// 	]);
	// }

	public function store(StoreContactRequest $request) {
		$contact = Contact::create($request->input('contact'));

        return response()->json([
        	'contact_id' => $contact->id,
        	'message' => 'Contact created'
        ], 200);
	}

	public function update(CreateContactRequest $request, Contact $contact) {
		$contact->update($request->input('contact'));

        return response()->json([
        	'message' => 'Contact updated'
        ], 200);
	}

  	public function destroy(Contact $contact) {
    	$contact->delete(); // soft delete
    	return response()->json(null, 204);
  	}

}