@extend('layouts.layout')
@section('content')
@foreach ($products as $key => $product) {
     
    $output.='<tr>'.
     
    '<td>'.$product->id.'</td>'.
     
    '<td>'.$product->team_name.'</td>'.
     
    '<td>'.$product->captain_name.'</td>'.
     
    '<td>'.$product->cnic.'</td>'.
   
    '<td>'.'<a href='.'show'.$product->id.' >'.'Get player Names'.'</a>'.'</td>'.

    '<td>'.'<a href='.'match'.$product->id.' >'.'Get Matches'.'</a>'.'</td>'.
   
    '</tr>';
}
@endforeach

@endsection