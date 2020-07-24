
<nav class="main-navbar">
    <div class="container">
        <!-- menu -->
        <ul class="main-menu">


            <li><a href="/">Home</a></li>

            @foreach($_SESSION["menu"] as $menu)
                <li><a href="/cat/{{$menu["id"]}}">{{$menu["name"]}}
                       @if($menu["badge"]!="")
                        <span class="new">{{$menu["badge"]}}</span>
                           @endif
                    </a>


                </li>
                @endforeach



            <li><a href="#">Shoes</a>
                <ul class="sub-menu">
                    <li><a href="#">Sneakers</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Formal Shoes</a></li>
                    <li><a href="#">Boots</a></li>
                    <li><a href="#">Flip Flops</a></li>
                </ul>
            </li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="./product.html">Product Page</a></li>
                    <li><a href="./category.html">Category Page</a></li>
                    <li><a href="./cart.html">Cart Page</a></li>
                    <li><a href="./checkout.html">Checkout Page</a></li>
                    <li><a href="./contact.html">Contact Page</a></li>
                </ul>
            </li>
            <li><a href="#">Blog</a></li>
        </ul>


        <!-- Right Side Of Navbar -->

    </div>
</nav>
