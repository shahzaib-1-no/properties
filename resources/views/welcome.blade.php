@include('header.header')




{{-- @include('about.about-about')

@include('about.about-faqs') --}}
@stack('harder_script')
@yield('main')
@stack('footer_script')
@include('footer.footer')

