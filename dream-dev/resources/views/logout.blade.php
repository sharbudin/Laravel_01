@if ((Session::has('ID')))
    {{!! Session::flush() !!}}
    {{!! redirect()->to('login') !!}}
@else
    {{!! redirect()->to('login') !!}}
@endif

