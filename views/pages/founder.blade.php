@extends('layouts.guest')

@section('content')



<x-container>

    

    <div class="flex flex-col md:flex-row mb-20 gap-8">
        <div class="w-1/5">
            <x-image src="http://abc.shanthiniketanschool.com/asset/client/img/nirmala_a.jpg" class="w-60"/>
        </div>
        <div class="w-2/3">
            <h4 class="font-bold">Nirmala A</h4>
            <p class="mb-3">Founder, Child Psycologist</p>
            <p>
                Dr. Nirmala A has been a compassionate advocate for holistic pedagogy all her life. She holds a doctoral degree in Child Psychology and her doctoral thesis focuses on creative thinking in preschool children. After having served as the head of an educational institution for over a decade, she established Shanthiniketan School with a clear vision in mind. Over the years she has been able to actualise that vision with her organisational acumen, sound scholarship and compassion. As a gifted child psychologist, she has been a mentor to thousands of students and parents. She has written numerous articles for leading newspapers and magazines and is regularly invited to appear on shows that discuss child development and our Educational System. 
            </p>
        </div>
    </div>
    <div class="flex flex-col md:flex-row mb-20 gap-8">
        <div class="w-1/5 order-0 md:order-1 flex justify-end">
            <x-image src="http://abc.shanthiniketanschool.com/asset/client/img/arjun_sivakumar.jpg" class="w-60"/>
        </div>
        <div class="w-2/3 order-1 md:order-0">
            <h4 class="font-bold">Arjun Sivakumar</h4>
            <p class="mb-3">Director of Learning</p>
            <p>
                Arjun Sivakumar recently joined the board of directors after completing his Master’s in School improvement and Educational leadership from the University of Birmingham, UK. He has a diverse educational background and experience; his first degree is in Civil Engineering from TKM college of Engineering and he held a number of posts as an engineer after graduating before committing to the field of education. He is passionate about education and continually strives to incorporate innovative management strategies to the school in order to improve the learning environment of students. His own research interests incorporate comparative approaches of learning environments and pedagogical techniques in India and the UK. Since his appointment he has been instrumental in forging links between students and staff at schools and universities in the UK; something he further hopes to develop within his role. 
            </p>
        </div>
    </div>
     

     


</x-container>


@endsection

