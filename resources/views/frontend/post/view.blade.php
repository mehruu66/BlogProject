@extends('layouts.app')
@section('title', isset($posts[0]) ? $posts[0]->meta_title : 'Default Title')
@section('meta_description', isset($posts[0]) ? $posts[0]->meta_description : 'Default Description')
@section('meta_keyword', isset($posts[0]) ? $posts[0]->meta_keyword : 'Default Keyword')

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if ($posts)
                        <div class="category-heading">
                            <h4 class="mb-0">{!! $posts->name !!}</h4>
                        </div>
                        <div class="mt-3">
                            <h6>{!! $posts->category->name .' / '. $posts->name !!}</h6>
                        </div>
                        <div class="card card-shadow mt-4">
                            <div class="card-body post-description">
                                {!! $posts->description !!}
                            </div>
                        </div>
                    @else
                        <p>No posts found.</p>
                    @endif
                </div>
                <div class="col-md-3">
                    <div class="border p-2 my-2">
                        <h4>Advertising Area</h4>
                    </div>
                    <div class="border p-2 my-2">
                        <h4>Advertising Area</h4>
                    </div>
                    <div class="border p-2 my-2">
                        <h4>Advertising Area</h4>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6>Latest Posts</h6>
                        </div>
                        <div class="card-body">
                            @foreach($latest_posts as $latest_posts_item)
                            <a href="{{url('tutorial/' .$latest_posts_item->category->slug. '/' .$latest_posts_item->slug )}}" class="text-decoration-none">
                            <h6> >{{$latest_posts_item->name}}</h6>
                            </a>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

