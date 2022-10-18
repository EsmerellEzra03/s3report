@extends('layouts.outline')

@section('content')

{{-- <h4>Scope list</h4> --}}
{{-- <h4 class="title">Scope <span>List</span></h4> --}}
<div class="row">
    <div class="col-sm-2"><h3>Scope List</h3></div>
    <div class="col-sm-0">
        <a href="{{ route('scope:create')}}" button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                

                {{-- <a href="{{ route('scope:create')}}" type="button" class="btn btn-primary btn-sm">
                    Add Scope
                </a> --}}
                
                <table class="table border border-0 table-striped">
                    <thead>
                        <tr>
                            <th
                                class="px-20 py-10 text-left text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Name
                            </th>
                            <th
                                class="px-20 py-20 text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Description
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
                            {{-- <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $scope->project_id ?? NULL }}</span>
                            </td> --}}

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $scope->name ?? NULL }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $scope->description  ?? NULL}}</span>
                            </td>

                            <td>
                            
                            {{-- <a href="{{ route('scope:show',$scope) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('scope:destroy', $scope) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a> --}}

                            <a href="{{ route('scope:show',$scope) }}" data-tip="edit"><i class="fa fa-edit"></i></a>
                                        
                            <a href="{{ route('scope:destroy', $scope) }}" data-tip="delete"><i class="fa fa-trash"></i></a>

                            <a href=" {{ route('boq:index', $scope)}}" type="button" class="btn btn-primary btn-sm">
                                BOQ
                            </a>
                         
                            </td>
                            
                        </tr>
                     {{-- @endforeach   --}}
                    </tbody>
                </table>
            
        </div>

@endsection