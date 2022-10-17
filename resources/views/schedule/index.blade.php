@extends('layouts.template')

@section('content')

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h4>Scheduling</h4>

                <a href="{{ route('schedule:create')}}" type="button" class="btn btn-primary btn-sm">
                    Add Scheduling
                </a>
                
                <table class="table border border-0 table-striped">
                    <thead>
                        <tr>
                            <th
                                class="px-20 py-10 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Quantity
                            </th>
                            <th
                                class="px-20 py-20 text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Start Date
                            </th>
                            <th
                                class="px-20 py-20 text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                End Date
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
                                <span> {{ $schedule->assign_id ?? NULL }}</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $schedule->quantity ?? NULL }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $schedule->start_date  ?? NULL}}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $schedule->end_date  ?? NULL}}</span>
                            </td>

                            {{-- <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $schedule->description  ?? NULL}}</span>
                            </td> --}}

                            <td>
                            
                            <a href="{{ route('schedule:show',$schedule) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('schedule:destroy', $schedule) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a>

                            <a href=" {{ route('progress:index', $schedule)}}" type="button" class="btn btn-primary btn-sm">
                                Progress
                            </a>
                         
                            </td>
                            
                        </tr>
                     {{-- @endforeach   --}}
                    </tbody>
                </table>
            
        </div>

@endsection