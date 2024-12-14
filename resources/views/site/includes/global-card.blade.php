@foreach ($allData as $data)
    <div class="col-lg-4 mb-5 mb-lg-0">
        <article class="blog_item">
            <div class="blog_item_img">
                <img class="card-img blog-card-img rounded-0" src="{{ asset($data->image) }}" alt="">
                <a href="#" class="blog_item_date">
                    <h3>{{ $data->created_at->format('d') }}</h3>
                    <p>{{ $data->created_at->format('M') }}</p>
                </a>
            </div>
            <div class="blog_details">
                <a class="d-inline-block"
                    href="{{ !empty($routePrefix) ? route($routePrefix, ['slug' => $data->slug]) : '#' }}">
                    <h2>{{ \Illuminate\Support\Str::limit($data->title, 20, '...') }}</h2>
                </a>

                <p>{{ \Illuminate\Support\Str::limit(strip_tags($data->description), 99, '...') }}</p>
                <ul class="blog-info-link">
                    @if (!empty($data->author->name))
                        <li><a href="#"><i class="fa fa-user"></i> {{ $data->author->name }}</a></li>
                    @endif
                    <li><a href="#"><i class="fa fa-calendar"></i>
                            {{ $data->created_at->format('d M Y') }}</a></li>
                </ul>
            </div>
        </article>
    </div>
@endforeach
