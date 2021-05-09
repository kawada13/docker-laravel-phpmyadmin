<template>
  <div>
    <h1>about</h1>
    <audio-player :sources="audioSources" :loop="true"></audio-player>
  </div>
</template>

<script>
export default {
  components: {},

  data() {
    return {
      audioSources: [
        "https://cdn.glitch.com/751add3e-c1c2-4ac9-b519-3747a3aee10e%2FSan%20Holo-%20I%20Still%20See%20Your%20Face%20(neutral.%20Remix).wav?1522023120586",
      ],
    };
  },
};
</script>
