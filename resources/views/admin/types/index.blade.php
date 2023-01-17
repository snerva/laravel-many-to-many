@extends('layouts.admin')

@section('content')
<div class="heading pt-4">
    <h2>Types</h2>
</div>

@include('partials.message')

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col pe-4">
            <form action="{{route('admin.types.store')}}" method="post">
              @csrf
              <div class="input-group mb-3">
                <input id="name" name="name" type="text" class="form-control" placeholder="Types here" aria-label="Types name" aria-describedby="button-addon">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add</button>
              </div>
            </form>
            
        </div>

        <div class="col">
            <div class="table-responsive-md">
                <table class="table table-striped table-primary align-middle table-hover table-borderless">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Count</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse($types as $type)
                        <tr class="table-light">
                            <td scope="row">{{$type->id}}</td>
                            <td>{{$type->name}}</td>
                            <td>{{$type->slug}}</td>
                            <td>xxx</td>
                           
                            <td class="d-flex flex-column gap-2">
                    
                                <a href="{{route('admin.types.edit', $type->slug)}}" class="btn btn-outline-secondary edit">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>
                                <a href="" class="btn btn-outline-danger delete">
                                    <i class="fas fa-trash fa-sm fa-fw"></i>
                                </a>
                        
                            </td>
                        </tr>
                        @empty
                        <tr class="table-primary">
                            <td scope="row">No types to show yet</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection