@extends('layouts.app')

@section('title')
	List Contacts
@endsection

@section('scripts')
    <script>
        var contact_list = new Vue({
            el: '#contact_list',
            data: {
                contacts: contacts,
            },
            methods: {
                deleteContact: function() {
                    // axios request to delete
                    // if 204/200 back remove the row from javascript collection
                    // means we don't have to do a PHP/MySQL refresh
                }
            }
        });

    </script>
@endsection

@section('content')
    <div class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Contacts</h3>
            </div>
            <div class="panel-body row">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <a class="btn btn-lg btn-primary" href="{{ route('contacts.create') }}">Create</a>
                    <hr>
                    <table class="table table-striped" id="contact_list">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="contact in contacts">
                                <td>@{{ contact.display_name}}</td>
                                <td>
                                    <a class="btn btn-sm" :href="'/contacts/'+ contact.id+'/edit'">Edit</a>
                                    <span class="btn btn-sm btn-danger" v-on:click="deleteContact">Delete</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection