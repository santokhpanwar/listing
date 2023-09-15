@extends('layouts.admin')  

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Add FAQ</h4>
                    </div>
                    <div class="card-body">
                        <form action="/admin/faq" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12 {{ $errors->has('title') ? 'has-error' : '' }}">
                                    <input type="text" name="title" class="form-control-lg form-control" placeholder="FAQ Title">
                                    @if($errors->has('title'))
                                        <p class="help-block rounded text-danger mb-0 p-2">
                                        {{ $errors->first('title') }}
                                        </p>
                                    @endif
                                </div>
                                
                                <div class="col-12 {{ $errors->has('body') ? 'has-error' : '' }}">
                                    <textarea name="body" id="mytextareaadmin" rows="10" class="form-control form-control-lg" placeholder="FAQ Body"></textarea>
                                    @if($errors->has('body'))
                                        <p class="help-block rounded text-danger mb-0 p-2">
                                        {{ $errors->first('body') }}
                                        </p>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <select name="status" id="" class="form-control-lg form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12 text-end">
                                    <button type="submit"class="btn btn-warning text-white fw-bold">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection