@extends('theme::layouts.guest')

@section('content')

 
    <x-system::layout.container class="my-10 max-w-5xl mx-auto   ">


            <div class="flex flex-col lg:flex-row py-5 gap-10">

                <div class="order-1 md:order-0 md:w-2/5">

                    <div class="mb-10">
                    
                        <h2 class="text-xl font-bold">Location:</h2>
                        <p>
                            Kunnumpuram, Vilappil P. O.,<br/>
                            Thiruvananthapuram,<br/>
                            Kerala, India. - 695 573 
                        </p>
                    </div>

                    <div class="mb-10">
                        <h2 class="text-xl font-bold">Call:</h2>
                        <p>
                            <b>Phone:</b> +91 471 - 22 70 299
                        </p>
                        <p>
                            <b>Mobile:</b> +91 9061 5595 72
                        </p>
                    </div>

                    <div class="mb-10">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.8988957141!2d77.0353674!3d8.5201463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05b0c84c8a0235%3A0x8e4ba065d3e86382!2sShanthinikethan%20School%2C%20Kunnumpuram!5e1!3m2!1sen!2sin!4v1795176518951!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>

                <div class="order-0 md:order-1 md:w-3/5">

                    <x-forms.contact heading=""/>

                </div>
                
            </div>

            

    </x-system::layout.container>


@endsection