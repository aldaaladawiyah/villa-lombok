@extends('page.layouts.master')

@section('content')
<section id="content">
    <div class="container_12">  
      <div class="grid_8">
        <h2 class="top-1 p3">About renting</h2>
        <p>Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae malesuada donec pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur:</p>
        <div class="lists-2">
            <ul class="list-1">
                <li><a href="#">Maecenas mattis venena</a></li>
                <li><a href="#">Nam accumsan miac</a></li>
                <li><a href="#">Rhoncus luctus erat nisl</a></li>
                <li><a href="#">Ultrices neque vel</a></li>
                <li><a href="#">Morbi ut augue ut risus</a></li>
            </ul>
            <ul class="list-1">
                <li><a href="#">Interdum mattis uisque</a></li>
                <li><a href="#">Eget erat eget mi laoreet</a></li>
                <li><a href="#">Pharetra eget tortor</a></li>
                <li><a href="#">Vestibulum scelerisque</a></li>
                <li><a href="#">Tristique ullamcorper</a></li>
            </ul>
            <ul class="list-1 last">
                <li><a href="#">Integer eros massa</a></li>
                <li><a href="#">Viverra quis pharetra</a></li>
                <li><a href="#">Ultrices mauris phasellus</a></li>
                <li><a href="#">Purus sapiepiscing</a></li>
                <li><a href="#">Tempus eget faucibus</a></li>
            </ul>
        </div>
        <a href="#" class="button">Read more</a>
        <h2 class="top-2 p3">Renting guide</h2>
        <p class="p5">Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean.</p>
        <div class="wrap block-2">
            <a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border"></a>
            <a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border"></a>
            <a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border"></a>
            <a href="#" class="last"><img src="images/page2-img4.jpg" alt="" class="img-border"></a>
        </div>
      </div>
<!--==============================Tab_Filter==========================================================-->
      <div class="grid_4">
        <div class="left-1">
            <h2 class="top-1 p3">Find your villa</h2>
            <form id="form-1" class="form-1 bot-1">
                <div class="select-1">
                    <label>Villa type</label>
                    <select name="select" >
                        <option>Private Villa</option>
                        <option>Bungalows</option>
                        <option>Resort</option>
                    </select>   
                    </div>
                <div class="select-2">
                    <label>Beds</label>
                    <select name="select" >
                        <option>1 BR</option>
                        <option>2 BR</option>
                        <option>Up to 2 BR</option>
                    </select>   
                </div>
                <div class="select-2 last">
                    <label>Baths</label>
                    <select name="select" >
                        <option>1</option>
                        <option>2</option>
                    </select>   
                </div> 
                <div class="select-3">
                <label>Price</label>
                 <select name="select" >
                        <option>Under 2.000.000</option>
                        <option>Up to 2.000.000</option>
                        <option>Up to 5.000.000</option>
                    </select>
                </div>
                <div class="select-4">
                    <label>Location</label>
                    <select name="select" >
                        <option>West Lombok</option>
                        <option>Center Lombok</option>
                        <option>East Lombok</option>
                        <option>Gili Island</option>
                    </select> 
                </div>
                <div class="select-5">
                    <label>View</label>
                    <select name="select" >
                        <option>Ocean View</option>
                        <option>Garden View</option>
                        <option>Mountain View</option>
                        <option>Field View</option>
                    </select>  
                </div>
                <a onClick="document.getElementById('form-1').submit()" class="button">Search</a>
                <div class="clear"></div>
<!--==============================Add_Note==========================================================-->
            </form>
            <h2 class="p3">Our Contacts</h2>
             <dl>
                <dt class="color-1 p2"><strong>Majapahit Road,<br>Mataram City.</strong></dt>
                <dd><span>Telephone:</span>(0370) 636 001</dd>
                <dd><span>E-mail:</span><a href="#" class="link">madinalombok@gmail.com</a></dd>
            </dl>
        </div>
      </div>
      <div class="clear"></div>
    </div>  
</section> 
@endsection