@extends('layouts.app')

@section('title')
	Create Contact
@endsection

@section('content')
    <div class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Contact</h3>
            </div>
            <div class="panel-body row">
                <div class="col-sm-12 col-md-10 col-lg-8">
        	       <a class="btn btn-lg btn-warning" href="{{ route('contacts.index') }}">Back</a>
                   <hr>

        			<form class="form-horizontal" id="create_contact_form" @submit.prevent="storeContact">

            			<div class="panel panel-primary">
            				<div class="panel-heading">
            					<h3 class="panel-title">Contact Details</h3>
            				</div>
            				<div class="panel-body row">
                                 <div class="col-sm-12 col-md-6 col-lg-6">
                                	<label class="col-sm-12 col-md-12 col-lg-12 control-label">First Name</label>
                                	<div class="col-sm-12 col-md-12 col-lg-12">
                                		<input type="text" class="form-control" v-model="contact.first_name"/>
            	                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label class="col-sm-12 col-md-12 col-lg-12 control-label">Last Name</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" class="form-control" v-model="contact.last_name"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <label class="col-sm-12 col-md-12 col-lg-12 control-label">Email</label>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" class="form-control" v-model="contact.email"/>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="panel-footer">
                            	<button type="submit" class="btn btn-lg">Save Contact</button>
            					<p v-if="savingContact"><strong>Saving...</strong></p>
                               <div>
                                    <ul>
                                        <li class="alert alert-danger" v-for="error in create_errors">@{{error}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
	<script>
		var create_contact_form = new Vue({
            el: '#create_contact_form',
            data: {
            	contact: contact,
            	savingContact: false,
                create_errors: []
            },
            methods: {
            	storeContact: function() {
            		this.savingContact = true;
                    this.create_errors = [];

            		let self = this;
                    axios.put('/contacts/store', {contact: this.contact})
                    .then(function (response) {
                        console.log('success', response);
                        console.log(response.data);
                        self.savingContact = false;
                        if (response.data && response.data.contact_id) {
                            window.location.href = '/contacts/'+response.data.contact_id+'/edit';

                        }
                    })
                    .catch(function (error, data) {
                        console.log('error', error.response);
                        self.savingContact = false;
                        // display server validation errors
                        if (error.response.data.errors) {
                            for (var k in error.response.data.errors) {
                                self.create_errors.push(k+': '+error.response.data.errors[k]);
                            }
                        }
                    }); 
            	},
            }
        });

	</script>
@endsection