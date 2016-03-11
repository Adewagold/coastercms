@if ($is_first)
<section class="banners">
    <div class="container">
@endif

        @if ($is_first || $count % 4 == 1)
        <div class="row">
        @endif
            <div class="col-sm-4">
                {{ PageBuilder::block('banner_image', ['class' => 'responsive']) }}
            </div>
        @if ($is_last || $count % 4 == 0)
        </div>
        @endif

@if ($is_last)
    </div>
</section>
@endif
