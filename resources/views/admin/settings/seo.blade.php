@extends('admin.layout')
@section('css')
 
<link href="{{asset('admin/assets/summernote/summernote-bs4.css')}}" rel="stylesheet">
<style>
    .error{
        color:red;
    }
</style>

@endsection
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">{{ ucwords(str_ireplace("_", " ",$group))}}</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Seo Settings</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="card">            
            <header class="card-header bg-info">
                <h4 class="mb-0 text-white">Seo</h4>
            </header>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="{{ URL::to('/admin/settings/update') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" value="{{ $data['seo']['meta_title'] ?? 'MSTORE' }}" class="form-control" placeholder="Meta Title" name="meta_title[value]">
                                <input type="hidden" name="meta_title[type]" value="text">
                            </div>
                        </div>      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <input type="text" value="{{ $data['seo']['meta_description'] ?? 'MSTORE is fully customizable and appearing to your customers in accordance with what they need and what they search' }}" class="form-control" placeholder="Meta Description" name="meta_description[value]">
                                <input type="hidden" name="meta_description[type]" value="text">
                            </div>
                        </div>      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input type="text" value="{{ $data['seo']['meta_keywords'] ?? 'MSTORE is fully customizable and appearing to your customers in accordance with what they need and what they search' }}" class="form-control" placeholder="Meta Keywords" name="meta_keywords[value]">
                                <input type="hidden" name="meta_keywords[type]" value="text">
                            </div>
                        </div>      
                        
                        <div class="col-md-12 text-center pt-5">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>       
            </div>
        </section>
    </div>
</div>

    @endsection

@section('js')
<script src="{{asset('admin/js/jquery.tagsinput.js')}}"></script>
<script src="{{asset('admin/assets/summernote/summernote-bs4.min.js')}}"></script>
<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
        $(".tagsinput").tagsInput();
    });

</script>
    
@endsection