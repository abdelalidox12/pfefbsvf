
<x-master1 title="Hotels">

    <x-navhotel :profiler="$hotels" />
   

        <div class="box-top" >
          <!-- <i class="fa-solid fa-badge-percent"></i> -->

            <div class="box-hotel">

                  @foreach ($hotels as $profile) 
                
                
              

                  <div class="top-destination" >
               
                    <img src="{{asset($profile['image1'])}}" alt="" class="produit-img">
                  <div id="pinf"><h2 class="produit-title"><i class="fa-solid fa-hotel"></i>{{$profile['Vile_hotel']}}</h2>
                    <p class="produi-description"><a href="#">{{$profile['Vile_hotel']}}</a></p>
                   <div> <span id="star"> @for($i=0;$i<3;$i++) <i class="fa-solid fa-star"></i> @endfor</span><span  id="star2" > @for($j=3;$j<5;$j++) <i class="fa-solid fa-star"></i> @endfor</span><br></div>
                   <span class="price"><span>par personne, à partir de </span> <a href="{{ route('hotel.show' , $profile->id)}}">Découvrir</a> <br>{{$profile['id']}} DH</span></div>  
      
                  </div>


                  @endforeach
            </div>
       
      </div>
    



</x-master1>





