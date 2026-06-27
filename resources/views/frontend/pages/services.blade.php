@extends('frontend.layouts.app')

@section('title', 'Services | Monty Tutor')
@section('meta_description', 'Explore Monty Tutor services including Renaissance STAR assessments, tutoring options, consultation support, and academic recommendations.')

@section('content')

    @php
        $services = [
            [
                'title' => 'Renaissance STAR Assessments Now Available Through Monty Tutor',
                'subtitle' => 'Accurate, adaptive, and actionable math and reading assessment support.',
                'flyer' => asset('image/flayer1.jpg'),
                'form_url' => 'https://forms.gle/e2M7sZFDcncF3zjD7',
                'button_label' => 'Open Assessment Form',
                'video_url' => 'https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F849818034861262%2F&show_text=false&width=394&t=0',
                'video_width' => '394',
                'video_height' => '476',
            ],
            [
                'title' => 'Schedule Your Free 15-Minute Consultation Today!',
                'subtitle' => 'Learn about flexible tutoring options, assessments, and academic support.',
                'flyer' => asset('image/flayer2.jpg'),
                'form_url' => null,
                'button_label' => null,
                'video_url' => 'https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1525552009294281%2F&show_text=false&width=417&t=0',
                'video_width' => '417',
                'video_height' => '476',
            ],
        ];
    @endphp

    <div class="service-page">

        <section class="service-hero">
            <div class="page-container">
                <div class="mx-auto max-w-4xl text-center">
                    <p class="section-label">Services</p>

                    <h1 class="service-page-title">
                        Tutoring, assessments, and academic support in one place.
                    </h1>

                    <p class="service-page-text">
                        Explore Monty Tutor services, watch the service videos, and complete the form when registration is
                        needed.
                    </p>
                </div>
            </div>
        </section>

        <section class="service-list-section">
            <div class="page-container">

                <div class="grid items-stretch gap-8 lg:grid-cols-2">
                    @foreach ($services as $index => $service)
                        <article class="service-card service-hover-card">

                            <div class="service-card-header">
                                <span>0{{ $index + 1 }}</span>

                                <div>
                                    <h2>{{ $service['title'] }}</h2>
                                    <p>{{ $service['subtitle'] }}</p>
                                </div>
                            </div>

                            <div class="service-flyer-box">
                                <img src="{{ $service['flyer'] }}" alt="{{ $service['title'] }}" class="service-flyer-img">
                            </div>

                            <div class="service-card-actions">
                                @if (!empty($service['form_url']))
                                    <a href="{{ $service['form_url'] }}" target="_blank" rel="noopener noreferrer"
                                        class="service-form-btn">
                                        {{ $service['button_label'] ?? 'Open Form' }}
                                    </a>
                                @endif

                                @if (!empty($service['video_url']))
                                    <button type="button" class="service-video-btn" data-video-url="{{ $service['video_url'] }}"
                                        data-video-width="{{ $service['video_width'] }}"
                                        data-video-height="{{ $service['video_height'] }}">
                                        Play Video
                                    </button>
                                @endif
                            </div>

                        </article>
                    @endforeach
                </div>

            </div>
        </section>

        <section class="service-note-section">
            <div class="page-container">
                <div class="service-note-card service-hover-card">
                    <div>
                        <p class="section-label">Need Help?</p>

                        <h2>
                            Not sure which service is right?
                        </h2>

                        <p>
                            Contact Monty Tutor before choosing an assessment, tutoring package, or consultation option.
                        </p>
                    </div>

                    <a href="{{ route('contact') }}" class="btn-primary">
                        Contact Me
                    </a>
                </div>
            </div>
        </section>

    </div>

    <div id="serviceVideoModal" class="service-video-modal hidden">
        <div class="service-video-overlay"></div>

        <div class="service-video-card">
            <button type="button" id="serviceVideoClose" class="service-video-close">
                ×
            </button>

            <div id="serviceVideoContent" class="service-video-content"></div>
        </div>
    </div>

@endsection