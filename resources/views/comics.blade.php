@extends('layouts.mainlayout')
@section('page-name')
    DC | COMICS
@endsection
@section('main-content')
<section id="comic-info">
    <div class="container">
        <div class="comic-detail w-50">
            <h1>CIAO</h1>
            <div class="available">
                <div class="w-75">
                    <div class="price-info">U.S. Price </div>
                    <div class="status">AVAILABLE</div>
                </div>
                <div class="w-25">
                    <p>Check Availability<i class="fas fa-angle-down"></i></p>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, autem natus voluptate ea velit pariatur modi eius? Itaque adipisci minus voluptate maxime sed voluptatem. Nostrum esse ipsam reprehenderit nulla autem blanditiis tenetur quibusdam repellendus quis numquam, tempora fuga quos modi nesciunt accusantium architecto facilis ullam atque. Cum earum sit dolorum explicabo placeat molestias natus ipsa ipsum porro inventore! Eligendi iusto similique ipsum est ut, rerum eum molestiae sit delectus odit expedita esse quos ullam numquam eius dolores suscipit! Perferendis omnis quod et ea dolores expedita sapiente quam alias facilis, dicta itaque dolore! Numquam nam blanditiis repellat porro, odit iusto dolorum exercitationem provident quia ut magnam eum, voluptatem rerum laborum inventore repellendus molestiae recusandae? Animi earum ea suscipit eveniet ad architecto culpa dolore! Reiciendis temporibus earum doloribus praesentium, sed itaque soluta qui numquam vero officiis iste architecto sint quisquam nobis. Deleniti in voluptates asperiores consequuntur, quibusdam tenetur cupiditate sunt, commodi laborum animi vero non cumque quam excepturi! Fuga voluptates reprehenderit, sunt dolore dignissimos quia laborum impedit dolorem. Aliquid itaque quae laboriosam corporis vero modi architecto in totam, vitae neque ipsum dicta provident ullam?</p>
        </div>
        <div class="comic-poster w-25">
            <p>ADVERTISEMENT</p>
            <img src="{{asset('../images/adv.jpg')}}" alt="">
        </div>
    </div>
</section>
<section id="comic-statistics">
    <div class="container">
        <div class="w-50">
            <h2 class="py-1">Talent</h2>
            <div class="d-flex my-3">
                <div class="w-25 py-1">Art By:</div>
                <div class="w-75 py-1"></div>
            </div>
            <div class="d-flex my-3">
                <div class="w 25 py-1">Written By:</div>
                <div class="w-75 py-1"></div>
            </div>
        </div>
        <div class="w-25">
            <h2 class="py-1">Specs</h2>
            <div class="d-flex my-3">
                <div class="w-25 py-1"></div>
                <div class="w-75 py-1"></div>
            </div>
            <div class="d-flex my-3">
                <div class="w-25 py-1"></div>
                <div class="w-75 py-1"></div>
            </div>
            <div class="d-flex my-3">
                <div class="w-25 py-1"></div>
                <div class="w-75 py-1"></div>
            </div>
        </div>
    </div>
</section>
@endsection