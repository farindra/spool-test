@foreach ($page['data_list'] as $item)
    <h2>{{ $item['name'] }}</h2>
    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Post</th>
            <th scope="col">Comments</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            
            @foreach ( $item['comments'] as $comment)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $comment->post->title }}</td>
                    <td>{{ $comment->comment }}</td>
                </tr>
                @php $i++; @endphp
            
            @endforeach
            
        </tbody>
    </table>
@endforeach
