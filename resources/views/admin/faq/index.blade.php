@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-3 mb-3 border-bottom">
                <h3 class="mb-0">All FAQ </h3>
                <a href="/admin/faq/create" class="btn btn-success btn-lg text-white fw-bold "><i class="bi bi-plus-circle"></i> Create FAQ</a> 
            </div>
            <div class="card-body">
                <div class="listing-list table-responsive">
                    <table class="table table-bordered  mb-3 border-top table align-middle">
                        <thead class="table-secondary">
                            <tr>  
                                <th class="text-center">ID</th> 
                                <th class="text-center">Title</th>                             
                                <th class="">Body</th>
                                <th class="text-center">Created at</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($faq as $faqs)
                            <tr>
                                <td class="text-center">{{ $faqs->id }}</td>
                                <td class="text-center ">{{ $faqs->title }}</td>
                                <td class="">Lorem ipsum dolor sit amet consectetur adipisic inventore.</td>
                                <td class="text-center">{{ date('Y-m-d', strtotime($faqs->published_at)) }}</td>                                
                                @if($faqs->status == '1')
                                <td class="text-center text-success"><span class="badge bg-success mb-0">Active</span</td>
                                @else
                                <td class="text-center text-danger"><span class="badge bg-danger mb-0">Inactive</span></td>
                                @endif 
                                <td class="text-center ">
                                    <a href="/admin/faq/{{$faqs->id}}/edit" class="btn btn-primary  btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                    <a href="/admin/faq/show" class="btn btn-success btn-sm  m-1 me-md-0" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                    <form action="/admin/faq/" method="Categories" class="d-inline">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger  btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></button> 
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="float-end">
                {{ $faq->links() }}                        
            </div>
        </div>
    </div>
</div>
@endsection