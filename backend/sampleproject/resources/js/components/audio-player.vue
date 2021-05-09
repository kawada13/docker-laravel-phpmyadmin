<script>
import VueHowler from "vue-howler";
export default {
  mixins: [VueHowler],
};
</script>

<template>
  <div>
    <!-- <span>Total duration: {{ duration }} seconds</span>
    <span>Progress: {{ progress * 100 }}%</span> -->
    <v-btn @click="togglePlayback">{{ playing ? "Pause" : "Play" }}</v-btn>
    <v-btn @click="stop">Stop</v-btn>
  </div>
</template>
