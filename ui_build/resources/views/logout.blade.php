@if ((Session::has('home')))
    {{!! Session::flush() !!}}
    {{!! redirect()->to('/') !!}}
@else
    {{!! redirect()->to('/') !!}}
@endif
