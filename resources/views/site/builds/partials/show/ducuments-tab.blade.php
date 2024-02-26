
<div class="ck-content tab-pane fade" id="tab2" role="tabpanel">
    @if ($build->documents->count() > 0)
    <div class="downloadable-documents">
        <ul class="mt-2">
            @foreach ($build->documents as $document)
                <li>
                    <a download href="{{ $document->getUrl() }}" target="_blank"><i class="ion-android-download"></i> {{ $document->name }}</a>
                </li>
            @endforeach

        </ul>
    </div>
    @endif
</div>
