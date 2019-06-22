@extends('layouts.app')

@section('content')
 
<p>
    <div class="panel-heading"> {{ Auth::user()->name }}'s   Dashboard </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card panel-default">
               
               
              
                <div class="panel-body">
                  <span class="float-left"> <h4>Your Listings</h4></span><span class="float-right"><a href="/larabiz/public/listings/create" class="btn btn-success btn-xs">Add Listing</a></span>
                    
                    @if(count($listings))
                      <table class="table table-striped">
                        <tr>
                          <th>Company</th>
                          <th></th>
                          <th></th>
                        </tr>
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->name}}</td>
                            <td><a class="float-right btn btn-default" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                            <td>
                              {!!Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
