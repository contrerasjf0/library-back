<header class="row header">
                    <div class="col header__content">
                        <nav class="navbar navbar-toggleable-md navbar-light header__nav">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand mb-0" href="#">
                            <img src="{{asset('img/book64x64.png')}}" alt="logo" class="header__nav-icon">
                            Naboo Library
                        </a>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.planetadelibros.com/coleccion-star-wars-novelas/0NOVELAS.W" target="_blank">Planet Book</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">New books</a>
                                </li>
                                @if(Route::currentRouteName() !== "book.create")
                                <li>
                                    <a class="btn btn-success" href="{{route('book.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add Book</a>
                                </li>
                                @endif
                            </ul>
                            </div>
                        </nav>
                    </div>
</header>