@extends('layouts.template')

@section('content')
<h4>Project list</h4>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

                <a href="{{ route('project:create')}}" type="button" class="btn btn-primary btn-sm">
                    Add Project
                </a>
                
                <table class="table border border-0 table-striped">
                    <thead>
                        <tr>
                            <th
                                class="px-20 py-10 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Person in Charge(PIC)
                            </th>
                            <th
                                class="px-20 py-20 text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Project Name
                            </th>
                            <th
                                class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Start Date
                            </th>
                            <th
                                class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                End Date
                            </th>
                            <th
                            class="px-6 py-3 text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                       
                    @foreach($projects as $project)       

                        <tr>
                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                <span> {{ $project->pic_id }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $project->name }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $project->start_date }}</span>
                            </td>

                            <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <span> {{ $project->end_date }}</span>
                            </td>

                            <td>
                            
                            <a href="{{ route('project:show',$project) }} " type="button" class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <a href=" {{ route('project:destroy', $project) }}" type="button" class="btn btn-primary btn-sm">
                                Delete
                            </a>
                         
                            <a href=" {{ route('scope:index', $project)}}" type="button" class="btn btn-primary btn-sm">
                                Scope
                            </a>

                            </td>
                            
                        </tr>
                     @endforeach  
                    </tbody>
                </table>
            
        </div>

@endsection