@extends('layouts.template')

@section('content')

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h4>Scope list</h4>

                <a href="{{ route('scope:create')}}" type="button" class="btn btn-primary btn-sm">
                    Add Scope
                </a>
                
                <table class="table border border-0 table-striped">
                    <thead>
                        <tr>
                            <th
                                class="px-20 py-10 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Name
                            </th>
                            <th
                                class="px-20 py-20 text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Description
                            </th>
                            <th
                            class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                       
                    {{-- @foreach($scopes as $scope)        --}}

                        <tr>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $scope->project_id ?? NULL }}</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $scope->name ?? NULL }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $scope->description  ?? NULL}}</span>
                            </td>

                            <td>
                            
                            <a href="{{ route('scope:show',$scope) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('scope:destroy', $scope) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a>

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