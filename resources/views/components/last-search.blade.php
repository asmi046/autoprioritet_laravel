@if ($querys)
    <section class="last_serch_section">
        <div class="container">
            <h2 class="mt_0">Недавно искали</h2>
            <div class="last_search_line">
                @foreach ($querys as $item)
                    <a href="{{route("search", ['search'=> $item->query])}}">{{ $item->query }}</a>
                @endforeach
            </div>
        </div>
    </section>
@endif
