@include('layouts.partials.session')

@if(get_settings()['type_header'] == false)

@include('layouts.partials.header_default')

@else

@include('layouts.partials.header_to')

@endif
