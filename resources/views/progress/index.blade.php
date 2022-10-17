@extends('layouts.template')

@section('content')

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h4>Progress</h4>

                <a href="{{ route('progress:create')}}" type="button" class="btn btn-primary btn-sm">
                    Add Progress
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
                                Remark
                            </th>
                            <th
                                class="px-20 py-20 text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Attachment
                            </th>
                            <th
                                class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Date
                            </th>
                            <th
                            class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                       
                    {{-- @foreach($progresses as $progress)        --}}

                        <tr>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $progress->name }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $progress->remark }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> </span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $progress->date }}</span>
                            </td>

                            <td>
                            
                            <a href="{{ route('progress:show',$progress) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('progress:destroy', $progress) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a>
                         
                            </td>
                            
                        </tr>
                     {{-- @endforeach   --}}
                    </tbody>
                </table>
            
        </div>

@endsection