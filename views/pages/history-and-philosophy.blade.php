@extends('layouts.guest')

@section('content')



<x-container>

    
    <div class="max-w-5xl mx-auto">

        <div class="mb-10">
            <h4 class="mb-3 text-xl font-bold">Our History</h4>
        
            <p>Shanthiniketan school stemmed from a visionary child psychologist's dream of setting up an institution with a sound and inclusive educational system. The realisation of Dr. A Nirmala's vision began with the establishment of a kindergarten on May 8th 1997. From these humble beginnings, Shanthiniketan is now heralded as one of the best schools in Trivandrum and hosts 1500 students and employs 90 staff members. Each student is a valued member of our growing community, which is situated in a five-acre, eco-friendly, quaint, campus located in Kunnumpuram, Vilappill.</p>
        </div>
        
        <div class="flex flex-col md:flex-row gap-5">
            <div class="md:flex-1">
                <x-image src="http://abc.shanthiniketanschool.com/asset/client/site_images/areal_view.jpg"/>
            </div>
            <div class="md:flex-1">
                <x-image src="http://abc.shanthiniketanschool.com/asset/client/site_images/school_courtyard.jpg"/>
            </div>
            
        </div>
        <div class="text-secondary/70 text-center mt-3 mb-10">Our Beautiful Surroundings</div>

        <div class="mb-10">
            <p>
                We encourage our children to be inclusive and respectful, with school as an extension of family. Our ‘Shanthiniketan Family’ values hard work and mutual respect for each other and our environment. The co-creation of a peaceful, positive, learning environment embodies our school and provides a continuity from preschool into adulthood. Giving our Shanthiniketan children the space and the freedom to learn allows high achievers to flourish; evident from our outstanding results.
            </p>
        </div>

        <div>
            <x-image class="mx-auto" src="http://abc.shanthiniketanschool.com/asset/client/site_images/achievers-2018.jpg"/>
        </div>
        <div class="text-secondary/70 text-center mt-3 mb-10">Our Happy High Achievers, 2018.</div>

        <div class="mb-10">
            <h4 class="mb-3 text-xl font-bold">Our Philosophy: the ‘Shanthiniketan Way’</h4>
        
            <p class="text-xl">Achieving our potential with a modern approach rooted in traditional values and mutual respect </p>
            <p>
                In a fast-paced, ever changing, world, we strive to move forward and modernise our education, whilst anchoring the children in good values, excellent communication skills and respect for each and every family member. We aim to encourage the children to develop an awareness of their own unique skills so the children leave here as young adults with a strong sense of self, a belief in their abilities and a mutual respect for each other’s qualities and the world around them. 
            </p>
        </div>
        
        <div class="flex gap-5">
            <div class="flex flex-col w-1/3">
                <x-image src="http://abc.shanthiniketanschool.com/asset/client/img/nirmala_a.jpg"/>
                <div class="text-secondary/70 text-center mt-3 mb-10">Our Founder</div>
            </div>
            <div class="flex flex-col gap-3 justify-center w-2/3">

                <p class="text-xl">Our philosophy stems from our founder and principal, Dr Nirmala. Her advocacy for a supportive and inclusive education permeates the school and drives us all forward in achieving our maximum potential. With this, a team spirit, each and every child and member of staff, past and present, is a valued and loved member of the Shanthiniketan family.</p>
                <p class="text-xl">Each and every child, following this the “Shanthiniketan way” leaves school with excellent results and as well-rounded individuals ready for higher education and the world of work.</p>

            </div>
            
        </div>

        <div class="mb-10">
            <p>
                Besides the excellent academic results consistently achieved, Shanthiniketan prides itself on pursuing every child’s holistic development. Students are guided to share and cultivate an environment of camaraderie and are never coerced to engage in competition. Children are encouraged to think out of the box- divergently and creatively. Shanthiniketan employs pedagogical techniques that are child-oriented, interactive, engaging and stress-free. Children at Shanthiniketan are never forced to conform but allowed the freedom of thought and expression instrumental to a child’s comprehensive growth and affirmation of self. 
            </p>
        </div>


        <div class="mb-10 flex flex-col md:flex-row gap-5">
            <div class="md:flex-1">
                <x-image src="http://abc.shanthiniketanschool.com/asset/client/site_images/happy_learners.jpg"/>
            </div>
            <div class="md:flex-1">
                <x-image src="http://abc.shanthiniketanschool.com/asset/client/site_images/student_craft.jpg"/>
            </div>
        </div>

        <div>
            <h4 class="mb-3 text-xl font-bold">Our Curriculum</h4>
            
            <div class=" flex flex-col gap-3">
                <p>In our early years education, Dr Nirmala’s research in education and learning through play means we are at the cutting-edge of innovative techniques. From this early age, our mission to develop a positive approach to learning begins, while our dedicated preschool staff work hard to instil the elementary skills needed to begin learning, listening and contributing in school.</p>
                <p>By middle school, we are striving for children to flourish in core subjects taught by our team of experienced, nurturing, subject specialists.</p>
                <p>Our high school begins preparing children for their exams. We encourage these children to set a model example for the younger students as a cohort of bright and thoughtful independent thinkers. Our aim is for these children to express their ideas and exercise their intellect through writing, project work and public speaking, as well as in exam preparation. </p>
            </div>

        </div>


    </div>
    
     

     


</x-container>


@endsection

