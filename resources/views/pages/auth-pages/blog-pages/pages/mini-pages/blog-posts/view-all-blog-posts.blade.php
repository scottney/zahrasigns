<table class="table table-striped table-secondary table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Created At</th>
            <th scope="col">Blog Title</th>
            <th scope="col">Blog Excerpt</th>
            <th scope="col">Ratings</th>
            <th scope="col">Views</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($all_blog_posts as $abp)
            <tr>
                <th scope="row">{{$abp->id}}</th>
                <td>{{$abp->created_at}}</td>
                <td>{{$abp->blog_title}}</td>
                <td>{{$abp->blog_excerpt}}</td>
                <td>{{$abp->ratings}}</td>
                <td>{{$abp->views}}</td>
                <td>
                    <a href="{{ route('blog.edit', $abp->id) }}" class="fa-solid fa-pen-to-square" id="edit-button"></a>
                    <a href="{{ route('blog.show', $abp->id) }}" class="fa-solid fa-eye" id="view-button"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex">{!! $all_blog_posts->withQueryString()->links('pagination::bootstrap-5') !!}</div>



