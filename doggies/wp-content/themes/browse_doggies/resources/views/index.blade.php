@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="blog-page">
    <h2 class="blog-header">Arfticles</h2>
  @while (have_posts()) @php the_post() @endphp 
    <div class="row">
      <div class="col-md-4" style="background-image: url(@php echo get_the_post_thumbnail_url() @endphp); background-repeat: no-repeat; background-size: cover; background-position: center;">  
      </div>
      <div class="col-md-8">
        @include('partials.content-'.get_post_type())
      </div>
    </div>
  @endwhile
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
