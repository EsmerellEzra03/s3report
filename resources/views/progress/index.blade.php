@extends('layouts.outline')

@section('content')

<div class="row">
    <div class="col-sm-2"><h3>Progress</h3></div>
    <div class="col-sm-0">
        <a href="{{ route('progress:create')}}" button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
    </div>
</div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <table class="table border border-0 table-striped">
                    <thead>
                        <tr>
                            <th
                                class="px-20 py-10 text-left text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Name
                            </th>
                            <th
                                class="px-20 py-20 text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Remark
                            </th>
                            <th
                                class="px-20 py-20 text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Attachment
                            </th>
                            <th
                                class="px-6 py-3 text-left text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                                Date
                            </th>
                            <th
                            class="px-6 py-3 text-left text-gray-5000 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                       
                    {{-- @foreach($progresses as $progress)        --}}

                        <tr>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $progress->name ?? NULL }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $progress->remark ?? NULL }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> </span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-5000 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $progress->date ?? NULL }}</span>
                            </td>

                            <td>
                            
                            {{-- <a href="{{ route('progress:show',$progress) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('progress:destroy', $progress) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a> --}}

                            <a href="{{ route('progress:show',$progress) }}" data-tip="edit"><i class="fa fa-edit"></i></a>
                                        
                            <a href="{{ route('progress:destroy', $progress) }}" data-tip="delete"><i class="fa fa-trash"></i></a>
                         
                            </td>
                            
                        </tr>
                     {{-- @endforeach   --}}
                    </tbody>
                </table>
            
        </div>

@endsection