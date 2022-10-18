@extends('layouts.outline')

@section('content')

<div class="row">
    <div class="col-sm-2"><h3>BOQ Scheduling List</h3></div>
    <div class="col-sm-0">
        <a href="{{ route('boqschedule:create')}}" button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                <table class="table border border-0 table-striped">
                    <thead>
                        <tr>
                            <th
                                class="px-20 py-10 text-left text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Quantity
                            </th>
                            <th
                                class="px-20 py-20 text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Completed
                            </th>
                            <th
                                class="px-20 py-20 text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Percentage
                            </th>
                            <th
                            class="px-6 py-3 text-left text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                       
                    {{-- @foreach($scopes as $scope)        --}}

                        <tr>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $boqschedule->boq_id ?? NULL }}</span>
                            </td>

                            {{-- <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $boqschedule->scheduling_id ?? NULL }}</span>
                            </td> --}}

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $boqschedule->quantity  ?? NULL}}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $boqschedule->completed  ?? NULL}}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $boqschedule->percentage  ?? NULL}}</span>
                            </td>

                            <td>
                            
                            {{-- <a href="{{ route('boqschedule:show',$boqschedule) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('boqschedule:destroy', $boqschedule) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a> --}}

                            <a href="{{ route('boqschedule:show',$boqschedule) }}" data-tip="edit"><i class="fa fa-edit"></i></a>
                                        
                            <a href="{{ route('boqschedule:destroy', $boqschedule) }}" data-tip="delete"><i class="fa fa-trash"></i></a>

                            <a href=" {{ route('schedule:index', $boqschedule)}}" type="button" class="btn btn-primary btn-sm">
                                Schedule
                            </a>
                         
                            </td>
                            
                        </tr>
                     {{-- @endforeach   --}}
                    </tbody>
                </table>
            
        </div>

@endsection