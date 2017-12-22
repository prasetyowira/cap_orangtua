Campaign

@if(count($datas) > 0)
    @foreach($datas as $data)
        {{$data->name}}
    @endforeach
@endif