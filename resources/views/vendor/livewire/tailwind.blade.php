{{-- Lux Rentals: circular pagination (matches car hire / Figma). Livewire default tailwind view, customized. --}}
@php
    if (! isset($scrollTo)) {
        $scrollTo = 'body';
    }

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? <<<JS
           (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
        JS
        : '';

    $pageButtonBase = 'flex size-[60px] shrink-0 items-center justify-center rounded-full font-sans font-medium text-lg leading-[27px] tracking-[-0.3px] transition';
    $pageInactive = 'bg-light-gold/10 text-[#26251d] hover:bg-light-gold/20';
    $pageActive = 'bg-[#26251d] text-white';
    $chevronWrapper = 'flex size-[60px] shrink-0 items-center justify-center rounded-full bg-light-gold/10 text-[#26251d] transition hover:bg-light-gold/20';
    $chevronDisabled = 'opacity-40 cursor-default pointer-events-none hover:bg-light-gold/10';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex flex-wrap gap-4 items-center justify-center">
            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <span
                    class="{{ $chevronWrapper }} {{ $chevronDisabled }}"
                    aria-disabled="true"
                    aria-label="{{ __('pagination.previous') }}"
                >
                    <svg class="size-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            @else
                <button
                    type="button"
                    wire:click="previousPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                    class="{{ $chevronWrapper }}"
                    aria-label="{{ __('pagination.previous') }}"
                >
                    <svg class="size-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            @endif

            {{-- Page numbers & ellipsis --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span
                        class="{{ $pageButtonBase }} {{ $pageInactive }} cursor-default min-w-[60px] px-2"
                        aria-hidden="true"
                    >{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <span wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}">
                            @if ($page == $paginator->currentPage())
                                <span
                                    aria-current="page"
                                    class="{{ $pageButtonBase }} {{ $pageActive }}"
                                >{{ $page }}</span>
                            @else
                                <button
                                    type="button"
                                    wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                    class="{{ $pageButtonBase }} {{ $pageInactive }}"
                                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                >{{ $page }}</button>
                            @endif
                        </span>
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <button
                    type="button"
                    wire:click="nextPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    wire:loading.attr="disabled"
                    dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                    class="{{ $chevronWrapper }}"
                    aria-label="{{ __('pagination.next') }}"
                >
                    <svg class="size-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            @else
                <span
                    class="{{ $chevronWrapper }} {{ $chevronDisabled }}"
                    aria-disabled="true"
                    aria-label="{{ __('pagination.next') }}"
                >
                    <svg class="size-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </span>
            @endif
        </nav>
    @endif
</div>
