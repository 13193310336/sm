<div class="row">

    <div class="col-sm-5">
        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
            Showing {{ $page['startRows'] }} to {{ $page['endRows'] }} of {{ $page['total'] }} entries
        </div>
    </div>

    <div class="col-sm-7">
        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
            <ul class="pagination">

                <li class="paginate_button previous @if($page['prevPage'] == $page['current']) disabled  @endif" id="datatable_previous">
                    <a href="{{ $page['prevUrl'] }}" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                </li>

                <li class="paginate_button active">
                    <a href="{{ $page['currentUrl'] }}" aria-controls="datatable" data-dt-idx="1" tabindex="0">{{ $page['current'] }}</a>
                </li>

                <li class="paginate_button next  @if($page['nextPage'] == $page['current']) disabled  @endif" id="datatable_next">
                    <a href="{{ $page['nextUrl'] }}" ria-controls="datatable" data-dt-idx="2" tabindex="0">Next</a>
                </li>

            </ul>
        </div>
    </div>

</div>