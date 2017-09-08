@foreach ($courses as $courseTitle => $course)
    <div class="post-preview text-center">
        <h2 class="post-title">
            <a href="{{ $course['link'] }}" target="_blank">{{ $courseTitle }}</a>
        </h2>
        <p class="post-meta">
            Release date : {{ $course['release-date'] }} &#183;
            <br>
        </p>
        <p class="postSubtitle">
            {{ $course['description'] }}
        </p>
        <p style="font-size: 13px"><a href="{{ $course['link'] }}" target="_blank">READ MORE...</a></p>
    </div>
    <hr>
@endforeach