@extends('layouts.main')
@section('content')

    <div style="font-family: 'Quicksand', sans-serif">
        <div class="retangulo-sobre ">
            <div class="col-md-6">
                <div>
                    <h3>Sobre mim</h3>
                </div>
                <div class="sobre-mim">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when
                        looking
                        at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                        of
                        letters,
                        as opposed to using 'Content here, content here', making it look like readable English. Many
                        desktop
                        publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                        search for
                        'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                        over
                        the
                        years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-sobre" src="{!! asset('img/sobre.jpg')!!}">
            </div>
        </div>

        <section class="social-media container">
            <div class="col-md-6">
                <img class="img-social" src="{!! asset('img/social-media.jpg')!!}">
            </div>
            <div class="col-md-6" style="padding-left: 50px">
                <h3>Social Media</h3>
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                    provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga.
                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                    eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                    assumenda est, omnis dolor repellendus.
                </p><a href="/portfolio" class="btn btn-veja-mais">Veja mais</a>
            </div>
        </section>

        <section class="fotografia container">
            <div class="col-md-6" style="text-align: right;padding-right: 50px;">
                <h3 class="">Fotografia</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p><a href="/portfolio" class="btn btn-veja-mais">Veja mais</a>
            </div>
            <div class="col-md-6">
                <img class="img-fotografia" src="{!! asset('img/fotografia.jpg')!!}">
            </div>
        </section>

        <section class="identidade container">
            <div class="col-md-6">
                <img class="img-identidade" src="{!! asset('img/identidade.jpg')!!}" style="margin-bottom: 50px;">
            </div>
            <div class="col-md-6" style="padding-left: 50px">
                <h3>Identidade Visual</h3>
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                    provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga.
                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                    eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                    assumenda est, omnis dolor repellendus.
                </p><a href="/portfolio" class="btn btn-veja-mais">Veja mais</a>
            </div>
        </section>
    </div>
@endsection
