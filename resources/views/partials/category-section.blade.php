<div class="container" style="max-width:1140px; margin:50px auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- Section Header -->
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
        <h2 style="font-size:28px; font-weight:bold; color:#2c3e50;">Polar Category</h2>
        <a href="#" style="background-color:#2c3e50; color:white; padding:10px 20px; border-radius:5px; text-decoration:none; font-weight:bold;">Polar Category</a>
    </div>

    <!-- Cards/Grid -->
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(300px, 1fr)); gap:20px;">

        <!-- Card Start -->
        @php
            $links = [
                [
                    'title' => 'Book Call Girls in Delhi – Cash Payment & Instant Booking 24/7',
                    'description' => 'Book Call Girls in Delhi with cash payment and instant booking. Enjoy trusted, safe, and discreet service with 24/7 availability for your satisfaction.',
                    'url' => 'https://delhi.fitgirl08.com/'
                ],
                [
                    'title' => 'Call Girls In Agra ₹2500/- Cash Payment Home Delivery',
                    'description' => 'Meet Real Call Girls in Agra @ 2500/- INR, here you Can Get Amazing Agra Call Girls and Live Chat With our High Profile Call Girls 24/7 Service',
                    'url' => 'https://agra.rakhiescort.in/'
                ],
                // Add more links here...
                [
                    'title' => 'Russian Escort Gurgaon',
                    'description' => 'Trusted Russian Escort Service in Gurgaon and nearby areas.',
                    'url' => 'https://kavyachoudhary.com/russian-escort-gurgaon/'
                ],
                [
                    'title' => 'Russian Escort Service in Noida',
                    'description' => 'Professional Russian Escorts available in Noida.',
                    'url' => 'https://kavyachoudhary.com/russian-escort-service-in-noida/'
                ],
                // Continue all other links similarly...
            ];
        @endphp

        @foreach($links as $link)
        <div style="background:#fff; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.1); overflow:hidden;">
            <div style="padding:15px 20px; font-weight:bold; font-size:16px; color:#2c3e50;">
                {{ $link['title'] }}
            </div>
            <div style="padding:0 20px 15px 20px; color:#555; font-size:14px;">
                {{ $link['description'] }}
            </div>
            <div style="padding:0 20px 15px 20px;">
                <a href="{{ $link['url'] }}" target="_blank" style="color:#fff; background-color:#2c3e50; padding:8px 15px; border-radius:5px; text-decoration:none;">Visit Link</a>
            </div>
        </div>
        @endforeach
        <!-- Card End -->

    </div>
</div>
<div id="profiles">
    @include('partials.testinomial-tags')
</div>