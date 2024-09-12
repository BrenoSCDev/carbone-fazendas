@extends('layouts.client')

@section('links')
    <link href="{{asset('assets/css/sobrenos.css?v=1.1')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="background-overlay"></div>
    <section class="px-2 py-4 md:px-0">
        <div class="flex flex-col justify-center container items-center max-w-6xl px-8 mx-auto xl:px-5 text-center relative">
            <img src="{{asset('assets/img/main-logo.png')}}" class="img-logo-display"/>
            <h1 x-data="{
                startingAnimation: { opacity: 0, scale: 4 },
                endingAnimation: { opacity: 1, scale: 1, stagger: 0.07, duration: 1, ease: 'expo.out' },
                addCNDScript: true,
                animateText() {
                    $el.classList.remove('invisible');
                    gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                },
                splitCharactersIntoSpans(element) {
                    text = element.innerHTML;
                    modifiedHTML = [];
                    for (var i = 0; i < text.length; i++) {
                        attributes = '';
                        if(text[i].trim()){ attributes = 'class=\'inline-block\''; }
                        modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                    }
                    element.innerHTML = modifiedHTML.join('');
                },
                addScriptToHead(url) {
                    script = document.createElement('script');
                    script.src = url;
                    document.head.appendChild(script);
                }
            }"
            x-init="
                splitCharactersIntoSpans($el);
                if(addCNDScript){
                    addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                }
                gsapInterval = setInterval(function(){
                    if(typeof gsap !== 'undefined'){
                        animateText();
                        clearInterval(gsapInterval);
                    }
                }, 5);
            "
            class="invisible block text-3xl sm:text-4xl md:text-6xl font-bold text-white custom-font my-6">
            Quem Somos Nós
            </h1>
        </div>
    </section>
    <section class="px-2 py-4 md:px-0">
        <div class="flex flex-col justify-center container items-center max-w-6xl px-8 mx-auto xl:px-5 text-center relative">
            <p class="text-lg sm:text-xl md:text-2xl text-white">
                {{$sobrenos->texto}}
            </p>
        </div>
    </section>
@endsection