@props(['news'])

<article class="news-card">
  <img
    class="news-card__img"
    src="{{ count($news->images) != 0 ? asset('files/news/' . $news->images[0]->img) : '' }}"
    width="360"
    height="180">

  <time
    class="news-card__date"
    datetime="{{ $news->date }}">
    {{ Carbon\Carbon::create($news->date)->isoFormat('DD.MM.YYYY') }}
  </time>

  <h3 class="news-card__title">{{ $news->title }}</h3>

  <div class="news-card__description">{!! $news->content !!}</div>

  <a class="news-card__link" href="{{ route('news.show', $news->slug) }}">@lang('Подробнее')</a>
</article>
