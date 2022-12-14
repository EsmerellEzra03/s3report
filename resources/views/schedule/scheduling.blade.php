@extends('layouts.outline')

@section('content')
<div class="container-fluid">
        
           
                    <form method="POST" action="{{route('schedule:store')}}">
                        @csrf
                    
                        <div>
                            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Quantity</label>
                            <input class="form-control" type="quantity" name="quantity" placeholder="Quantity" >
                        </div>

                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Start Date</label>
                            <input class="form-control" type="date" name="start_date" placeholder="Start Date" >
                        </div>

                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">End Date</label>
                            <input class="form-control" type="date" name="end_date" placeholder="End Date" >
                        </div>


                        <div class="flex items-center justify-start mt-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                    </form>
                   

</div>
@endsection