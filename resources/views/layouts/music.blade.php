<div class="position-fixed d-flex m-4 p-0" style="bottom: 0; right: 0px; z-index: 20;">
    <button id="musicControl" class="btn m-auto c-pointer d-flex flex-column btn-control">
        <i id="playPause" class="icofont icofont-music-alt mx-auto my-auto">Play Music</i>
    </button>
    <audio id="music" loop>
        <source src="{{ asset('audio/GWCangatMerengangPacung.mp3') }}" type="audio/mpeg">
    </audio>
</div>