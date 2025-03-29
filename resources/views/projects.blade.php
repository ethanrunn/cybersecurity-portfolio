@extends('layouts.app')

@section('content')

<section id="project" class="gallery-section gallery-section-2 ptb-100-70">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12 sortable-gallery">
                <div class="gallery-filters">
                    <div class="section-title section-title-2">
                        <h2>Works I Have Done</h2>
                    </div>
                </div>
                <div class="projects-grid">
                @foreach($projects as $project)
                        <div class="project-card">
                            <div class="project-content">
                                <h3>{{ $project->title }}</h3>
                                <p>{{ $project->description }}</p>
                                <div class="project-meta">
                                    <span class="tech-stack">Tools Used: {{ $project->tech_stack }}</span>
                                    <span class="date">{{ $project->completion_date->format('F Y') }}</span>
                                </div>
                                <div class="project-images">
                                    @foreach(json_decode($project->images, true) ?? [] as $image)
                                        <a href="{{ asset('assets/images/projects/' . $image) }}" class="lightbox" data-lightbox-group="gall-1">
                                            <img src="{{ asset('assets/images/projects/' . $image) }}" alt="{{ $project->title }}" class="project-image img img-responsive" width="300" height="200">
                                            <div class="icon">
                                                <i class="ti-eye"></i>
                                            </div>
                                        </a>
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
                @endforeach
                </div> <!-- End of gallery-container -->
            </div> <!-- End of sortable-gallery -->
        </div> <!-- End of row -->
    </div> <!-- End of container -->
</section>

@endsection
