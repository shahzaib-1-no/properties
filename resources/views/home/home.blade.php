@extends('welcome')

@section('title')
    Home
@endsection


@section('main')
    <div>
        <section id="hero-setion" style="position:relative;">
            <div class="container-fluid hero">

                <div class="row ">
                    <div class="col-12 col-lg-6" data-aos="fade-down">
                        <span class="sr">Be SaFe</span>
                        <h2>
                            Your dream home is our top priority
                        </h2>
                        <p class="hero-p">And In Order To Make A Business, Brand Advertising And Marketing Plays An Important
                            Role. Similarly, In Making Cultivation Business A Brand, Good Slogans Are Necessary.</p>

                        <button type="button" class="btn btn-lg">Discover More <i class="fa-solid fa-plus ml-2"></i>
                        </button>
                    </div>

                </div>

            </div>
        </section>
    </div>
    @include('home.home_two')
    <div class="container-fluid" id="aboutttt">
        <div class="row text-center" data-aos="zoom-in">
            <div class="col-12">
                <img src="{{asset('images/add-size-1289x500.png')}}" class="img-fluid" srcset="" />
            </div>
        </div>
    </div>

    @include('home.home_three')
    @include('home.home_four')
    @include('home.home_five')
    @include('home.home_six')
    @include('home.home_seven')
    @include('home.home_eight')
    @include('home.faqs_home')
    @include('home.home_primium_pkg')
    @include('home.home_nine')
    @include('home.home_ten')
    @include('home.home_news')


@endsection

@push('script')
    <script>
        const $tabsToDropdown = $(".tabs-to-dropdown");

        function generateDropdownMarkup(container) {
            const $navWrapper = container.find(".nav-wrapper");
            const $navPills = container.find(".nav-pills");
            const firstTextLink = $navPills.find("li:first-child a").text();
            const $items = $navPills.find("li");
            const markup = `
    <div class="dropdown d-md-none">
      <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ${firstTextLink}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
        ${generateDropdownLinksMarkup($items)}
      </div>
    </div>
  `;
            $navWrapper.prepend(markup);
        }

        function generateDropdownLinksMarkup(items) {
            let markup = "";
            items.each(function() {
                const textLink = $(this).find("a").text();
                markup += `<a class="dropdown-item" href="#">${textLink}</a>`;
            });

            return markup;
        }

        function showDropdownHandler(e) {
            // works also
            //const $this = $(this);
            const $this = $(e.target);
            const $dropdownToggle = $this.find(".dropdown-toggle");
            const dropdownToggleText = $dropdownToggle.text().trim();
            const $dropdownMenuLinks = $this.find(".dropdown-menu a");
            const dNoneClass = "d-none";
            $dropdownMenuLinks.each(function() {
                const $this = $(this);
                if ($this.text() == dropdownToggleText) {
                    $this.addClass(dNoneClass);
                } else {
                    $this.removeClass(dNoneClass);
                }
            });
        }

        function clickHandler(e) {
            e.preventDefault();
            const $this = $(this);
            const index = $this.index();
            const text = $this.text();
            $this.closest(".dropdown").find(".dropdown-toggle").text(`${text}`);
            $this
                .closest($tabsToDropdown)
                .find(`.nav-pills li:eq(${index}) a`)
                .tab("show");
        }

        function shownTabsHandler(e) {
            // works also
            //const $this = $(this);
            const $this = $(e.target);
            const index = $this.parent().index();
            const $parent = $this.closest($tabsToDropdown);
            const $targetDropdownLink = $parent.find(".dropdown-menu a").eq(index);
            const targetDropdownLinkText = $targetDropdownLink.text();
            $parent.find(".dropdown-toggle").text(targetDropdownLinkText);
        }

        $tabsToDropdown.each(function() {
            const $this = $(this);
            const $pills = $this.find('a[data-toggle="pill"]');

            generateDropdownMarkup($this);

            const $dropdown = $this.find(".dropdown");
            const $dropdownLinks = $this.find(".dropdown-menu a");

            $dropdown.on("show.bs.dropdown", showDropdownHandler);
            $dropdownLinks.on("click", clickHandler);
            $pills.on("shown.bs.tab", shownTabsHandler);
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#news-slider").owlCarousel({

                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                navigationText: ["", ""],
                pagination: true,
                autoPlay: true
            });
        });




        $('body').on("click", ".dropdown-menu", function(e) {
            $(this).parent().is(".open") && e.stopPropagation();
        });

        $('.selectall').click(function() {
            if ($(this).is(':checked')) {
                $('.option').prop('checked', true);
                var total = $('input[name="options[]"]:checked').length;
                $(".dropdown-text").html('(' + total + ') Selected');
                $(".select-text").html(' Deselect');
            } else {
                $('.option').prop('checked', false);
                $(".dropdown-text").html('(0) Selected');
                $(".select-text").html(' Select');
            }
        });

        $("input[type='checkbox'].justone").change(function() {
            var a = $("input[type='checkbox'].justone");
            if (a.length == a.filter(":checked").length) {
                $('.selectall').prop('checked', true);
                $(".select-text").html(' Deselect');
            } else {
                $('.selectall').prop('checked', false);
                $(".select-text").html(' Select');
            }
            var total = $('input[name="options[]"]:checked').length;
            $(".dropdown-text").html('(' + total + ') Selected');
        });


        $(document).ready(function() {
            $(document).on('click', '.accordion-button', function() {
                // Close all accordion items except the one that was clicked
                $('.accordion-collapse').not($(this).data('bs-target')).collapse('hide');

                // Toggle the clicked accordion item
                $($(this).data('bs-target')).collapse('toggle');
            });
        });
    </script>
@endpush
