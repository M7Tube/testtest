<div>
    <div class="hero hero-single route bg-image" style="background-image: url({{ asset('/img/overlay-bg.jpg') }}">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="hero-title mb-4">{{ $post->main_title }}</h2>
                    {{-- <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-box">
                            <div class="post-thumb">
                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $post->picture)) !!}" class="img-fluid" style="width: 100%;
                                height: 50vw;
                                object-fit: fill;">
                            </div>
                            <div class="post-meta">
                                <h1 class="article-title">{{ $post->title }}</h1>
                                <ul>
                                    <li>
                                        <span class="bi bi-person"></span>
                                        <a href="#">{{ $post->user->name }}</a>
                                    </li>
                                    {{-- <li>
                                        <span class="bi bi-tag"></span>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <span class="bi bi-chat-left-text"></span>
                                        <a href="#">14</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="article-content">
                                <p>
                                    {!! $post->body !!}
                                </p>
                                {{-- <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Integer posuere erat a ante.</p>
                                </blockquote> --}}
                            </div>
                        </div>
                        {{-- <div class="box-comments">
                            <div class="title-box-2">
                                <h4 class="title-comments title-left">Comments (34)</h4>
                            </div>
                            <ul class="list-comments">
                                <li>
                                    <div class="comment-avatar">
                                        <img src="{{ asset('/img/testimonial-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="comment-author">Oliver Colmenares</h4>
                                        <span>18 Sep 2017</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                                            reprehenderit, provident cumque
                                            ipsam temporibus maiores
                                            quae natus libero optio, at qui beatae ducimus placeat debitis voluptates
                                            amet corporis.
                                        </p>
                                        <a href="3">Reply</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-avatar">
                                        <img src="{{ asset('/img/testimonial-4.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="comment-author">Carmen Vegas</h4>
                                        <span>18 Sep 2017</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                                            reprehenderit, provident cumque
                                            ipsam temporibus maiores
                                            quae natus libero optio, at qui beatae ducimus placeat debitis voluptates
                                            amet corporis,
                                            veritatis deserunt.
                                        </p>
                                        <a href="3">Reply</a>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="comment-avatar">
                                        <img src="{{ asset('/img/testimonial-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="comment-author">Oliver Colmenares</h4>
                                        <span>18 Sep 2017</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                                            reprehenderit, provident cumque
                                            ipsam temporibus maiores
                                            quae.
                                        </p>
                                        <a href="3">Reply</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-avatar">
                                        <img src="{{ asset('/img/testimonial-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="comment-author">Oliver Colmenares</h4>
                                        <span>18 Sep 2017</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores
                                            reprehenderit, provident cumque
                                            ipsam temporibus maiores
                                            quae natus libero optio.
                                        </p>
                                        <a href="3">Reply</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-comments">
                            <div class="title-box-2">
                                <h3 class="title-left">
                                    Leave a Reply
                                </h3>
                            </div>
                            <form class="form-mf">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-mf" id="inputName"
                                                placeholder="Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control input-mf" id="inputEmail1"
                                                placeholder="Email *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="url" class="form-control input-mf" id="inputUrl"
                                                placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="button button-a button-big button-rouded">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    <div class="col-md-4">
                        {{-- <div class="widget-sidebar sidebar-search">
                            <h5 class="sidebar-title">Search</h5>
                            <div class="sidebar-content">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                            aria-label="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary btn-search" type="button">
                                                <span class="bi bi-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        {{-- <div class="widget-sidebar">
                            <h5 class="sidebar-title">Recent Post</h5>
                            <div class="sidebar-content">
                                <ul class="list-sidebar">
                                    <li>
                                        <a href="#">Atque placeat maiores.</a>
                                    </li>
                                    <li>
                                        <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    </li>
                                    <li>
                                        <a href="#">Nam quo autem exercitationem.</a>
                                    </li>
                                    <li>
                                        <a href="#">Atque placeat maiores nam quo autem</a>
                                    </li>
                                    <li>
                                        <a href="#">Nam quo autem exercitationem.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-sidebar">
                            <h5 class="sidebar-title">Archives</h5>
                            <div class="sidebar-content">
                                <ul class="list-sidebar">
                                    <li>
                                        <a href="#">September, 2017.</a>
                                    </li>
                                    <li>
                                        <a href="#">April, 2017.</a>
                                    </li>
                                    <li>
                                        <a href="#">Nam quo autem exercitationem.</a>
                                    </li>
                                    <li>
                                        <a href="#">Atque placeat maiores nam quo autem</a>
                                    </li>
                                    <li>
                                        <a href="#">Nam quo autem exercitationem.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-sidebar widget-tags">
                            <h5 class="sidebar-title">Tags</h5>
                            <div class="sidebar-content">
                                <ul>
                                    <li>
                                        <a href="#">Web.</a>
                                    </li>
                                    <li>
                                        <a href="#">Design.</a>
                                    </li>
                                    <li>
                                        <a href="#">Travel.</a>
                                    </li>
                                    <li>
                                        <a href="#">Photoshop</a>
                                    </li>
                                    <li>
                                        <a href="#">Corel Draw</a>
                                    </li>
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
</div>
