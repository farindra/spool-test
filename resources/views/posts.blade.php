<table class="table table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author Name</th>
        <th scope="col">Author Email</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1; @endphp
        @foreach ($page['data_list'] as $item)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->user->email }}</td>
            </tr>
            @php $i++; @endphp
        @endforeach
        
        
    </tbody>
</table>