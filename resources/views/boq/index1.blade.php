@extends('layouts.outline')

@section('content')

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h4>BOQ</h4>

                <a href="{{ route('boq:create')}}" type="button" class="btn btn-primary btn-sm">
                    Add boq
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
                                Quantity
                            </th>
                            <th
                            class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                       
                    @foreach($boqs as $boq)       

                        <tr>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $boq->name ?? NULL }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $boq->quantity ?? NULL }}</span>
                            </td>


                            <td>
                            
                                <a href="{{ route('boq:show',$boq) }} " type="button" class="btn btn-primary btn-sm">
                                    Edit
                                </a>
    
                                <a href=" {{ route('boq:destroy', $boq) }}" type="button" class="btn btn-primary btn-sm">
                                    Delete
                                </a>
    
                                <a href=" {{ route('progress:index')}}" type="button" class="btn btn-primary btn-sm">
                                    Progress
                                </a>
                         
                            </td>
                            
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
            
        </div>

@endsection