@if ($paginator->hasPages())
<section id="nav" class="fullpage-wrap padding-top-null grey-background">
    <div class="row">
        <div class="col-xs-6">
            <div class="nav-left">
              {{-- Previous Page Link --}}
              @if ($paginator->onFirstPage())
                  <a href="#" class=" disabled btn-alt small active shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Older posts</span></a>
              @else
                  <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn-alt small active shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Older posts</span></a>
              @endif

            </div>
        </div>
        <div class="col-xs-6">
            <div class="nav-right">
              {{-- Next Page Link --}}
              @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn-alt small active shadow margin-null"><span>Newer posts</span><i class="icon ion-ios-arrow-right"></i></a>
              @else
                <a href="#" class=" disabled btn-alt small active shadow margin-null"><i class="icon ion-ios-arrow-left"></i><span>Newer posts</span></a>
              @endif

            </div>
        </div>
    </div>
</section>
@endif
