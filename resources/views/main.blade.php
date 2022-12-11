@php($list=['saff','affgg','dsbb']);
@foreach($list as $name)
    @include('partials.partials',['name'=>$name])
@endforeach
@each('partials.partials',$list,'name')
