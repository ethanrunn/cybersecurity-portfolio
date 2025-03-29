<section id="project" class="gallery-section gallery-section-2 ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters">
                        <div class="section-title section-title-2">
                            <h2>Work I Have Done</h2>
                        </div>
                    </div>
                    <div class="gallery-container gallery-lightbox masonry-gallery">
                        <div class="grid Print-Design Web-Application Photography">
                            <a href="{{ asset('assets/images/downloaded/3.jpg') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/downloaded/3.jpg') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
</section>

        <!-- <div class="projects-grid">
            @foreach($projects as $project)
                <div class="project-card">
                    <div class="project-content">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                        <div class="project-meta">
                            <span class="tech-stack">Tech Stack: {{ $project->tech_stack }}</span>
                            <span class="date">{{ $project->completion_date->format('F Y') }}</span>
                        </div>
                        <div class="project-images">
                        @foreach(json_decode($project->images, true) as $image)
                            <img src="{{ asset('assets/images/projects/' . $image) }}" alt="{{ $project->title }}" width="540px" height="360px" class="project-image">
                        @endforeach
                        </div>
                        <div class="project-links">
                            <a href="{{ $project->github_link }}" target="_blank" class="btn btn-primary">GitHub</a>
                            @if($project->live_demo)
                                <a href="{{ $project->live_demo }}" target="_blank" class="btn btn-secondary">Live Demo</a>
                            @endif
                        </div>
                    </div>
                </div>
                <br><br>
            @endforeach
        </div> -->

<!-- @extends('layouts.app')

@section('content')
<section class="projects">
    <div class="container">
        <h2>My Projects</h2>
        <ul>
            @foreach($projects as $project)
                <li>
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <a href="{{ $project->github_link }}" target="_blank">View on GitHub</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection -->