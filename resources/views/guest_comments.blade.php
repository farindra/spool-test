    <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Comments</th>
            <th scope="col">Post</th>
            <th scope="col">Guest Name</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            
            @foreach ( $page['data_list'] as $item)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $item->comment }}</td>
                    <td>{{ $item->post->title }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
                @php $i++; @endphp
            
            @endforeach
            
        </tbody>
    </table>
