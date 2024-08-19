@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Categories</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Categories</a></span></h6>
        <a href="#" class="btn float-end py-2 px-4 fs-5" data-bs-toggle="modal" data-bs-target="#myModal">Create Button</a>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr id="row-{{ $category->cid }}">
                    <td class="py-3 ">
                        <span style="background: white;height:100px;display:block;width:100px;padding: 5px;border-radius:50%;">
                            <img src="{{ asset($category->img) }}" alt="" height="90px" width="90px" style="border-radius: 50%;">
                        </span>
                    </td>
                    <td class="py-3 ">{{ $category->name }}</td>
                    <td class="py-3 ">
                        <div class="checkbox-wrapper-6">
                            <input class="tgl tgl-light" id="cb1-6" name="0" type="checkbox" {{ $category->status ? 'checked' : '' }} />
                            <label class="tgl-btn" for="cb1-6"></label>
                        </div>
                    </td>
                    <td class="py-3 ">
                        <!-- Edit Button with data attributes -->
                        <a href="#" class="action-btn mx-1 edit-category-btn"
                           data-id="{{ $category->cid }}"
                           data-name="{{ $category->name }}"
                           data-status="{{ $category->status }}"
                           data-img="{{ $category->img }}"
                           data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <!-- Delete Button -->
                        <a href="/delete-category/{{ $category->cid }}" class="action-btn mx-1">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Modal -->
<!-- Modal for Editing Category -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Category name">
                    </div>
                    <div class="mb-3">
                        <select name="status" class="form-select">
                            <option value="1">On</option>
                            <option value="0">Off</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    
    @endsection
