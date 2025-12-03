@if ($paginator->hasPages())
    <div class="flex justify-between items-center">
        <div>
            <p class="text-sm text-muted leading-5 dark:text-gray-400">
                Showing
                @if ($paginator->firstItem())
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                of
                <span class="font-medium">{{ $paginator->total() }}</span>
                results
            </p>
        </div>
        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
            <div class="">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="paginate_button page-item previous disabled"><a class="page-link"><i
                                    class="previous"></i></a></li>
                    @else
                        <li class="paginate_button page-item previous"><a href="{{ $paginator->previousPageUrl() }}"
                                class="page-link"><i class="previous"></i></a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="paginate_button page-item disabled"><span
                                    class="page-link">{{ $element }}</span></li>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="paginate_button page-item active"><a
                                            class="page-link">{{ $page }}</a></li>
                                @else
                                    <li class="paginate_button page-item"><a href="{{ $url }}"
                                            class="page-link">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach


                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="paginate_button page-item next"><a href="{{ $paginator->nextPageUrl() }}"
                                class="page-link"><i class="next"></i></a></li>
                    @else
                        <li class="paginate_button page-item next disabled"><a class="page-link"><i
                                    class="next"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
