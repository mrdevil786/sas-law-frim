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
                    <li><a href="#"><i class="fa fa-calendar"></i> {{ $data->created_at->format('d M Y') }}</a>
                    </li>
                </ul>
                <!-- Share Button Section -->
                <div class="share-buttons mt-3">
                    <button class="btn btn-sm btn-primary" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="fas fa-share-alt"></i> Share </button>
                    <div class="dropdown-menu">
                        <!-- Share to WhatsApp -->
                        <a class="dropdown-item py-3"
                            href="https://api.whatsapp.com/send?text={{ urlencode($data->title . ' - ' . route($routePrefix, ['slug' => $data->slug])) }}" target="_blank">
                            <i class="fab fa-whatsapp" style="color: #25D366;"></i> WhatsApp
                        </a>
                        <!-- Share to Facebook -->
                        <a class="dropdown-item py-3"
                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route($routePrefix, ['slug' => $data->slug])) }}" target="_blank">
                            <i class="fab fa-facebook" style="color: #1877F2;"></i> Facebook</a>
                        <!-- Share to Instagram (Instagram doesn't allow direct sharing like other platforms) -->
                        <!-- Share to Instagram (Mobile approach - Instagram app) -->
                        <a class="dropdown-item py-3"
                            href="instagram://share?text={{ urlencode($data->title . ' - ' . route($routePrefix, ['slug' => $data->slug])) }}" target="_blank">
                            <i class="fab fa-instagram" style="color: #c13584"></i> Instagram</a>
                        <!-- Share to LinkedIn -->
                        <a class="dropdown-item py-3"
                            href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route($routePrefix, ['slug' => $data->slug])) }}&title={{ urlencode($data->title) }}" target="_blank">
                            <i class="fab fa-linkedin" style="color: #0077b5;"></i> LinkedIn</a>
                        <!-- Copy Link Button -->
                        <a class="dropdown-item py-3" href="javascript:void(0);"
                            onclick="copyToClipboard('{{ route($routePrefix, ['slug' => $data->slug]) }}')">
                            <i class="fas fa-link" style="color: #C0C0C0;"></i> Copy Link</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endforeach

<!-- JavaScript for copying the link -->
<script>
    function copyToClipboard(url) {
        var dummy = document.createElement("input");
        document.body.appendChild(dummy);
        dummy.value = url;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("Link copied to clipboard!");
    }
</script>
