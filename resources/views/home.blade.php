@extends('layouts.frontend')

@section('style')
<style>
    .garis {
        max-width: 60%;
        border: 1px #444 solid;
    }
</style>
@endsection

@section('content')
<section id="home">
    <div class="jumbotron">
        <div class="container">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, deserunt.</h3>
            <p>Lorem ipsum dolor sit amet.</p>
            <hr class="my-4">
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptate voluptatibus quam deserunt laborum laudantium corrupti, blanditiis, ducimus ipsum id nihil natus ex aperiam totam maxime dicta quisquam corporis sunt quae doloribus deleniti expedita? Ipsam doloribus, quis nemo maiores quae id iste eligendi eum ad, sed a vitae. Ad, ipsam.</p>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quae, praesentium dignissimos pariatur excepturi autem optio ea! Aut tenetur enim incidunt aliquam facere voluptatum quo?</p>
        </div>
    </div>
</section>

<div class="container">
    <section id="about">
        <div class="row text-center my-5">
            <div class="col-lg-12">
                <h1>About</h1>
                <hr class="garis">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quaerat hic quae nesciunt officia itaque veritatis. Voluptatem fuga tempora ipsum placeat numquam ipsa fugit officia temporibus at assumenda beatae laborum, sed officiis cupiditate facilis nesciunt molestiae. Quia cupiditate, corporis eligendi, architecto quod delectus omnis ullam neque in, qui temporibus fugiat autem maxime exercitationem placeat voluptates libero suscipit nesciunt veritatis quasi dolore quisquam? Quasi ratione reprehenderit dolores, vitae eligendi repellat architecto earum iure rem? Ratione ea ullam repellendus debitis vero qui, vitae necessitatibus quo, totam officia, odio quidem cum excepturi atque fugit fuga? Est, et ratione inventore dignissimos aspernatur voluptate quo perspiciatis, accusamus fugit doloremque temporibus, quia eum nihil sequi. Adipisci quia deserunt veniam repellendus culpa vitae similique ea aperiam nesciunt voluptatum molestias quas quos ipsa, porro iste ipsum odit voluptas laborum dolores sapiente iure. Praesentium earum quas quisquam deleniti aliquam, consequatur dolorem animi corporis consectetur, fugit asperiores vitae nihil quae et, pariatur at repellendus! Maxime, voluptatem amet veritatis quod, neque non esse labore minus nesciunt nostrum dolorem soluta! Quisquam, laboriosam cumque! Facilis, ea architecto. Enim culpa dolore quisquam minus molestias recusandae, neque illum a quo, consectetur sint est eaque voluptatem ex fugit similique animi maxime blanditiis odio esse vero praesentium.</p>
            </div>
            <div class="col-lg-6">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis porro illum omnis aspernatur dicta iure rem doloribus amet, pariatur minus, repellendus reprehenderit enim architecto quo veniam accusamus commodi molestias asperiores laboriosam cumque excepturi odio voluptatum quod necessitatibus. Ipsam odit reprehenderit dolorum similique ex assumenda, voluptatibus doloribus est id magni fuga facilis natus. Rerum ipsum odio ex assumenda eos? Accusamus libero dolorum nisi doloremque quis ad, explicabo illo laborum voluptatibus assumenda iusto a reiciendis saepe iste quos quibusdam id voluptates. Optio dignissimos et corporis, repellat ipsam, sunt architecto totam maxime ducimus officiis, nobis quibusdam labore fuga veritatis soluta quod non nihil! Vitae libero cupiditate eius, amet fugiat, omnis est possimus officiis nam debitis quisquam ut esse soluta sequi corporis iusto? Atque molestias, harum porro ullam ea veritatis dolorum enim eligendi perspiciatis nesciunt iste quidem officiis voluptas fugiat amet hic maiores! A iure deleniti nam labore, similique necessitatibus, recusandae ea provident voluptate neque facere ut accusantium sequi quia, eum consectetur accusamus eos amet reprehenderit. Rem minus culpa qui reprehenderit cum, perferendis sint nisi dolores, nam incidunt magnam. Magni assumenda sed natus praesentium.</p>
            </div>
        </div>
    </section>
    <section id="article">
        <div class="row text-center my-5">
            <div class="col-lg-12">
                <h1>News Article</h1>
                <hr class="garis">
            </div>
        </div>
        <div class="row my-4">
            @foreach ($article as $a)
            <div class="col-md-6 mt-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('/storage/article/picture/' . $a->picture) }}" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <a href="{{ route('home.showarticle', $a->id) }}">
                                        {{ Str::limit($a->title, 30) }}
                                    </a>
                                </h4>
                                <p>{{ Str::limit($a->content, 120) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section id="contact">
        <div class="row text-center my-5">
            <div class="col-lg-12">
                <h1>Contact</h1>
                <hr class="garis">
            </div>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="row my-4">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name..">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..">
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12">
                    <div class="form-group">
                        <textarea name="message" id="message" rows="10" class="form-control" placeholder="Your Message.."></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-outline-primary px-5" style="border-radius: 0px;">Send!</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>

<div class="row">
    <div class="col-lg-12">
        <hr>
        <p class="text-center">Presented by &copy; Yoni Widhi 2021</p>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('.card').mouseover(function() {
        $(this).addClass('shadow-lg');
    }).mouseleave(function() {
        $(this).removeClass('shadow-lg');
    });
});
</script>
@endsection