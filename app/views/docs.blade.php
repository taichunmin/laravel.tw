@extends('layouts.default')

@section('content')
    <section class="docs-heading">
        <div class="container">
            <h2>Documentation</h2>
            <div class="sponsor">
                <span>Sponsored By</span>
                <?php $rand = rand(0,10); ?>
                @if ($rand <= 10)
                <a href="http://www.cartalyst.com/" title="Cartalyst"><img src="{{ asset('img/cartalyst_small.png') }}"></a>
                @else
                <a href="https://besnappy.com/" title="Snappy"><img src="{{ asset('img/snappy_small.png') }}"></a>
                @endif
            </div>
        </div>
    </section>

    <section class="docs-content">
        <div class="container">
            <nav class="docs-menu">
                {{ $index }}
            </nav>
            <article class="docs-body">
                {{ $body }}
            </article>
            <div class="clearfix"></div>
        </div>
    </section>
@stop
