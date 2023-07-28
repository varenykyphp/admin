@hasSection('title')
    <div class="py-3 border-bottom sticky-top" id="topbar">
        <div class="container">
            <div class="row">
                <div class="@hasSection('long-button') col-4 @else col-7 @endif">

                   <ul class="list-inline mb-0">
                    <h1 class="list-inline-item me-5">@yield('title')</h1>
                    <li class="list-inline-item">
                       <form action="{{route('search')}}" method="post" id="searchbar">
                        @csrf
                        <input type="text" class="form-control d-inline-block" id="search_term" name="search_term" placeholder="search...">
                    </form>
                    </li>
                </ul>
                </div>

                <div class="@hasSection('long-button') col-8 @else col-5 @endif text-end">
                    @hasSection('back-btn')
                        <a href="@yield('back-btn')" class="btn btn-dark"><i class="fas fa-angle-left me-1"></i>{{ __('labels.back') }}</a>
                    @endif
                    @hasSection('download-btn')
                        <a href="@yield('download-btn')" class="btn btn-info" target="_blank"><i class="fas fa-save me-1"></i>{{ __('labels.download') }}</a>
                    @endif
                    @hasSection('create-btn')
                        <a href="@yield('create-btn')" class="btn btn-success"><i class="fas fa-plus me-1"></i>{{ __('labels.create') }}</a>
                    @endif
                    @hasSection('save-btn')
                        <button class="btn btn-success" onclick='window.$("#nopulpForm").submit();'><i class="fa fa-save me-1"></i>{{ __('labels.save') }}</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif
