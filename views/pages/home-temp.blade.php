@extends('layouts.guest')

@section('content')


  <section>
    <div class="flex flex-col md:flex-row mx-auto h-full max-w-6xl mb-10">
    
        <div class="flex flex-1 flex-col items-start justify-center px-4">
            
            <h1 class="">Welcome to <span class="font-bold">Shanthiniketan School</span></h1>
            
            <p class="mt-3 text-xl mb-10">A Loving Family of Happy Learners and High Achievers</p>


            <p class="text-xl ">Admissions Open – 

              <x-alpine.button 
                variant="success"
                size="xl"
                @click="$store.modal.open('admission-enquiry')"
            >
                Register Now!
            </x-alpine.button>

            </p>
        </div>  
        <div class="flex-1 h-64 md:h-[420px]">
            

          <x-carousels.standard
              :speed="4000"
              :slides="[
                  [
                      'image' => asset('asset/carousel/corporate-1.jpg'),
                      'title' => 'Welcome',
                      'description' => 'Welcome to our website.'
                  ],
                  [
                      'image' => asset('asset/carousel/corporate-2.jpg'),
                      'title' => 'Our Services',
                      'description' => 'Discover what we offer.'
                  ],
                  [
                      'image' => asset('asset/carousel/corporate-3.jpg'),
                  ]
              ]"
          />



        </div>
    </div>

        

  </section>

  <!-- Admissions -->
  <section class="py-16">

    <div class="mb-15">
      <x-headings.two>Admissions Open</x-headings.two>
      

      <p class="text-center mb-6 text-2xl">
        Dear Parent, registrations for admissions can be made online for the academic year 2026-27.
        
      </p>
      <p class="text-center">
                <x-alpine.button 
                variant="success"
                size="xl"
                  
                  @click="$store.modal.open('admission-enquiry')"
              >

                  Register Now!
              </x-alpine.button>
      </p>

    </div>
    
    

    <div class="mx-auto grid max-w-6xl items-center gap-10 px-4 lg:grid-cols-2">
      <div>
    
        <h4 class="mb-3 mt-10 text-lg font-semibold">Plus One – Subject Combinations</h4>
        <ul class="grid grid-cols-2 gap-2 text-sm font-semibold text-brand">
          <li class="rounded bg-white px-3 py-2 shadow-sm">Bio-Maths</li>
          <li class="rounded bg-white px-3 py-2 shadow-sm">Bio-Malayalam</li>
          <li class="rounded bg-white px-3 py-2 shadow-sm">Computer Science</li>
          <li class="rounded bg-white px-3 py-2 shadow-sm">Commerce</li>
          <li class="rounded bg-white px-3 py-2 shadow-sm">Bio-Computer Science</li>
          <li class="rounded bg-white px-3 py-2 shadow-sm">Computer Science-Maths</li>
        </ul>

        <h4 class="mb-3 mt-8 text-lg font-semibold">Skill subjects from Std VI to XII</h4>
        <p>Artificial Intelligence, Art &amp; Craft, Yoga, Information Technology</p>

        <h4 class="mb-2 mt-8 text-lg font-semibold">Age limit for LKG</h4>
        <p>Should have completed 3 years and 6 months on 1st of June 2026.</p>
      </div>
      <img src="http://abc.shanthiniketanschool.com/asset/client/img/admissions-open.jpeg" alt="Admissions open 2026-27" class="w-full rounded-lg shadow-lg">
    </div>

  </section>


  <!-- About -->

  <x-layout.band class="py-16 bg-secondary/20">

    <x-layout.container class="container">
      <p class="text-xl mb-10">
        Founded by the distinguished child psychologist <strong>Dr A Nirmala</strong>, Shanthiniketan continues to see its family of learners grow within a beautiful campus setting with state of the art facilities. Our pupils are happy, confident and creative learners who come to school with a smile and leave our care with wonderful results that reflect their true potential.
        
      </p>  

      <div>

        <div class="flex gap-2">

          @foreach ( $featured_sections['home']->get('home-featured')->items as $item )
        
            <div class="flex-1">
              <x-cards.media-icon icon="home">

                  <x-slot:title>
                      {{ $item->title }}
                  </x-slot:title>

                  <x-slot:description>
                      {{ $item->description }}
                  </x-slot:description>


              </x-cards.media-icon>
            </div>
            

          @endforeach

        </div>

      </div>
    </x-layout.container>


    
  </x-layout.band>



  <x-layout.container class="my-10 py-10">

    <div class="flex  gap-10">
      <div class="flex-1 flex flex-col justify-center">
        <div class="mx-auto">
          <x-headings.two>Our Vision</x-headings.two>
          <p class="mb-4 text-xl">Our vision has the individual child at its core. We believe children can be empowered to pursue and accomplish their aspirations by harnessing their own unique strengths.</p>
          <p class="text-xl">Through this shared ethos, we strive to make the very process of learning an enjoyable experience, and create a generation of independent thinkers who are responsible and respectful citizens.</p>
        </div>
        
      </div>
      <div class="flex-1">

        
        <x-image src="http://abc.shanthiniketanschool.com/asset/client/site_images/science-exibition.jpg" alt="Students at the science exhibition" class="h-full w-full rounded-lg shadow-lg" />

      </div>
    </div>
    

  </x-layout.container>




  <x-layout.container class="my-10 py-10">

    <div class="flex  gap-10">

      <div class="flex-1 flex flex-col justify-center order-1 md:order-1">
        <div class="mx-auto">
          <x-headings.two>A Shared Space for Learning, Growth and Success</x-headings.two>
          
          <p class="mb-4 text-xl">We all enjoy our purpose-built campus which boasts a vegetable plot and state of the art facilities, including a library, an auditorium and a large open space for us to gather for our enriching assemblies. We have an extensive program of cultural events and extra-curricular enrichment throughout the year.</p>
          <p class="text-xl">Children are central to everything we do. They help organise events and are part of our Shanthiniketan family. Our young writers club even has creative input in the news section of this website as part of our aim to improve digital literacy.</p>
        </div>
        
      </div>
      <div class="flex-1 order-0 md:order-0">

        
        <x-image src="http://abc.shanthiniketanschool.com/asset/client/site_images/science-exibition.jpg" alt="Students at the science exhibition" class="h-full w-full rounded-lg shadow-lg" />

      </div>
    </div>
    

  </x-layout.container>


    

@endsection