 @foreach($data as $v)
            <tr>
                <td>{{$v->brand_id}}</td>
                <td><img src="{{env('UPLOAD_URL')}}{{$v->brand_logo}}" width="50" height="50"/>{{$v->brand_name}}</td>
                <td>{{$v->brand_url}}</td>
                <td>{{$v->brand_desc}}</td>
                <td><a href="{{url('/brand/edit',$v->brand_id)}}" class="btn btn-info">编辑</a>
                    <a href="{{url('/brand/destroy',$v->brand_id)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
           @endforeach
   
        <tr>
            <td colspan="4">{{$data->appends($query)->links()}}</td>
        </tr>