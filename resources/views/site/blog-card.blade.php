@foreach ($blogs as $blog)
    <div class="col-lg-4 mb-5 mb-lg-0">
        <article class="blog_item">
            <div class="blog_item_img">
                <img class="card-img blog-card-img rounded-0" src="{{ asset($blog->image) }}"
                    alt="">
                <a href="#" class="blog_item_date">
                    <h3>{{ $blog->created_at->format('d') }}</h3>
                    <p>{{ $blog->created_at->format('M') }}</p>
                </a>
            </div>
            <div class="blog_details">
                <a class="d-inline-block" href="{{ route('site.single-blog', ['slug' => $blog->slug]) }}">
                    <h2>{{ \Illuminate\Support\Str::limit($blog->title, 20, '...') }}</h2>
                </a>
                <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 99, '...') }}</p>
                <ul class="blog-info-link">
                    <li><a href="#"><i class="fa fa-user"></i> {{ $blog->author->name }}</a></li>
                    <li><a href="#"><i class="fa fa-calendar"></i>
                            {{ $blog->created_at->format('d M Y') }}</a></li>
                </ul>
            </div>
        </article>
    </div>
@endforeach
