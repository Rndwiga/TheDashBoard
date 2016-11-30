@if(!empty($meta['title']))
    <title>{{ $meta['title'] . ' - Tyondo Enterprise | a webdesign Company in Kenya' }}</title>
@else
    <title>Tyondo Enterprise | a webdesign company in Kenya</title>
@endif
    <!--Facebook Metadata /-->
@if(!empty($meta['image']))
    <meta property="og:image" content="{{ url($meta['image']) }}"/>
@else
  <!--  <meta property="og:image" content="{{ url('/.jpg') }}"/> -->
    <meta property="og:image" content="{{asset('frontend/assets/img/logo%402x.png')}}"/>
@endif
@if(!empty($meta['description']))
    <meta property="og:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta property="og:description" content="Webdesign company based in Kenya."/>
@endif
@if(!empty($meta['title']))
    <meta property="og:title" content="{{ $meta['title'] }}"/>
@else
    <meta property="og:title" content="Tyondo Enterprise | a webdesign Company in Kenya"/>
@endif
    <!--Google+ Metadata /-->
@if(!empty($meta['title']))
    <meta itemprop="name" content="{{ $meta['title'] }}">
@else
    <meta itemprop="name" content="Tyondo Enterprise | a webdesign Company in Kenya">
@endif
@if(!empty($meta['description']))
    <meta itemprop="description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta itemprop="description" content="Webdesign company based in Kenya."/>
@endif
@if(!empty($meta['image']))
    <meta itemprop="image" content="{{ url($meta['image']) }}"/>
@else
  <!--  <meta itemprop="image" content="{{ url('/.jpg') }}"/> -->
    <meta itemprop="image" content="{{asset('frontend/assets/img/logo%402x.png')}}"/>
@endif
    <!-- Twitter Metadata /-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@tyondoke"/>
@if(!empty($meta['title']))
    <meta name="twitter:title" content="{{ $meta['title'] }}">
@else
    <meta name="twitter:title" content="Tyondo Enterprise | a webdesign Company in Kenya">
@endif
@if(!empty($meta['description']))
    <meta name="twitter:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta name="twitter:description" content="Webdesign company based in Kenya."/>
@endif
@if(!empty($meta['image']))
    <meta name="twitter:image" content="{{ url($meta['image']) }}"/>
@else
  <!--  <meta name="twitter:image" content="{{ url('/.jpg') }}"/> -->
    <meta name="twitter:image" content="{{asset('frontend/assets/img/logo%402x.png')}}"/>
@endif
    <meta name="twitter:domain" content="tyondo.com">
