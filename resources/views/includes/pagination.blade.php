@if($paging->lastPage() > 1)
    <ul class="pagination">
        <li><a href="{{ $paging->appends(Request::except('page'))->previousPageUrl() }}">{{ trans('pagination.previous') }}</a></li>
        <?php
        $current = $paging->currentPage();
        $lastPage = $paging->lastPage();
        $start = $current - 3 <= 1 ? 1 : $current - 3;
        $end = $current + 3 > $lastPage ? $lastPage : $current + 3;
        ?>
        @for($i = $start; $i <= $end; $i++)
            <li class="{{$paging->currentPage() == $i ? 'active' : ''}}">
                <a href="{{$paging->appends(Request::except('page'))->url($i)}}" class="page-number">{{$i}}</a>
            </li>
        @endfor
        <li><a href="{{$paging->appends(Request::except('page'))->nextPageUrl()}}">{{ trans('pagination.next') }}</a></li>
    </ul>
@endif
