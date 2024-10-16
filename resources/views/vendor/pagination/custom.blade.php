@if ($paginator->hasPages())
 <div class="demo-inline-spacing">
     <nav aria-label="Page navigation">
         <ul class="pagination pagination-sm">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <li class="page-item prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon fs-6 ti ti-chevrons-left"></i></a>
                </li>
            @else
                <li class="page-item prev">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="tf-icon fs-6 ti ti-chevrons-left"></i></a>
                </li>
            @endif

             {{-- Pagination Elements --}}
             @foreach ($elements as $element)
             {{-- "Three Dots" Separator --}}
             @if (is_string($element))
                 <li class="page-link disabled" aria-disabled="true">
                    <a class="page-link" href="{{ $url }}">{{ $element }}</a>
                </li>
             @endif

             {{-- Array Of Links --}}
             @if (is_array($element))
                 @foreach ($element as $page => $url)
                     @if ($page == $paginator->currentPage())
                         <li class="page-item active" aria-current="page">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                     @else
                         <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                     @endif
                 @endforeach
             @endif
            @endforeach
                  {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class="page-item next">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="tf-icon fs-6 ti ti-chevrons-right"></i></a>
            </li>
            @else
                <li class="page-item next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" aria-hidden="true" href="javascript:void(0);"><i class="tf-icon fs-6 ti ti-chevrons-right"></i></a>
                </li>
            @endif

         </ul>
     </nav>

 </div>
 @endif
