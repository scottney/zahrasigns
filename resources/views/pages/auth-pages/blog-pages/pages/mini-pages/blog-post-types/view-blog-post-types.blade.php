<table class="table table-striped table-secondary table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Created At</th>
            <th scope="col">Type Name</th>
            <th scope="col">Type Slug</th>
            <th scope="col">Category Type</th>
            <th scope="col">Type Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($blog_post_type_data as $bptd)
            <tr>
                <th scope="row">{{$bptd->id}}</th>
                <td>{{$bptd->created_at}}</td>
                <td>{{$bptd->blog_post_type_name}}</td>
                <td>{{$bptd->blog_post_type_slug}}</td>
                <td>{{$bptd->blog_post_categories->blog_post_category_name}}</td>
                <td>{{$bptd->blog_post_type_description}}</td>
                <td>
                    <a href="{{ route('edit-single-blog-post', $bptd->id) }}" class="fa-solid fa-pen-to-square" id="edit-button"></a>
                    <a href="{{ route('view-single-blog-post-index', $bptd->id) }}" class="fa-solid fa-eye" id="view-button"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex">{!! $blog_post_type_data->withQueryString()->links('pagination::bootstrap-5') !!}</div>



