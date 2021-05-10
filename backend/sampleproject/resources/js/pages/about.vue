<template>
  <div>
    <h1>about</h1>
    <audio-player :sources="songs[0].src" :loop="true"></audio-player>
    <hr />
    <h1>listen to {{ songs[0].title }}</h1>
    <!-- <audio ref="audio" :src="songs[0].src" preload loop id="audio" muted></audio> -->
  </div>
</template>

<script>
// import sound from "./午後のウクレレ.mp3";
export default {
  data() {
    return {
      audioSources: [
        "https://cdn.glitch.com/751add3e-c1c2-4ac9-b519-3747a3aee10e%2FSan%20Holo-%20I%20Still%20See%20Your%20Face%20(neutral.%20Remix).wav?1522023120586",
      ],
      audioURL: ["https://example.com/some_audio.mp3"],
      current: {},
      index: 0,
      songs: [
        {
          title: "その１",
          artist: "sono1",
          src: ["./午後のウクレレ.mp3"],
        },
        {
          title: "その2",
          artist: "sono2",
          src: "./おはよう.mp3",
        },
      ],
      player: new Audio(),
    };
  },
  created() {
    // this.current = this.songs[this.index];
    // this.player = this.current.src;
    // this.player.play();
    // var audio = new Audio(sound);
    // audio.play();
  },
};
</script>
