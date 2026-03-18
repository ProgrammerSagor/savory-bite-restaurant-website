@if ($paginator->hasPages())
    <nav role="navigation" class="flex items-center mt-12 space-x-2 text-lg">

        {{-- Previous Page --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 text-gray-400 bg-gray-200 rounded-lg cursor-not-allowed dark:bg-gray-700">
                <i class="fas fa-angle-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="px-3 py-1 text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">
                <i class="fas fa-angle-left"></i>
            </a>
        @endif


        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-1 text-gray-500 dark:text-gray-400">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-3 py-1 font-semibold text-white rounded-lg shadow bg-primary">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}"
                            class="px-3 py-1 text-gray-700 bg-gray-100 rounded-lg dark:text-gray-200 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="px-3 py-1 text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">
                <i class="fas fa-angle-right"></i>
            </a>
        @else
            <span class="px-3 py-1 text-gray-400 bg-gray-200 rounded-lg cursor-not-allowed dark:bg-gray-700">
                <i class="fas fa-angle-right"></i>
            </span>
        @endif
    </nav>
@endif
