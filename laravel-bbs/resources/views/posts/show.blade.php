@ectend('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1>
                {{ var_dump($post)}}
                {{ $post->'title'}}
            </h1>

            <p>
                {!! nl2br(e($post->body)) !!}
            </p>

            <section>
                <h2 class="h5 mb-4">
                    コメント
                </h2>

                @forelse($post->comments as $comment)
                    <div class="border-top p-4">
                        <time class="text-secondary">
                            {{ $comment->created_atformat('Y.m.d H:i')}}
                        </time>
                        <p class="mt-2">
                            {!! nl2br(e($comment->body)) !!}
                        
                        </p>
                    </div>
                @empty
                    <p>コメントはまだありません</p>
                @endforelse
            </section>
        </div>
    </div>
@endsection






