<table class="table table-striped table-secondary table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Created At</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Slug</th>
            <th scope="col">Category Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($blog_post_categories as $blog_post_category)
            <tr>
                <th scope="row">{{$blog_post_category->id}}</th>
                <td>{{$blog_post_category->created_at}}</td>
                <td>{{$blog_post_category->blog_post_category_name}}</td>
                <td>{{$blog_post_category->blog_post_category_slug}}</td>
                <td>{{$blog_post_category->blog_post_category_description}}</td>
                <td>
                    <a href="{{ route('edit-blog-post-category', $blog_post_category->id) }}" class="fa-solid fa-pen-to-square" id="edit-button"></a> 
                    <a href="{{ route('show-blog-post-category', $blog_post_category->id) }}" class="fa-solid fa-eye" id="view-button"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex">{!! $blog_post_categories->withQueryString()->links('pagination::bootstrap-5') !!}</div>



