<template>
  <hooper 
    class="hooper-slides"
    :itemsToShow="1" 
    :centerMode="false" 
    pagination="no" 
    :vertical="false" 
    @slide="slide"
    :wheelControl = "false"
  >
    <slide class="hooper-slides__slide text-center btn-dark btn-lg btn-block py-1" id="answerButton">
        解答 (左へスライド)
    </slide>
    <slide class="hooper-slides__hooper text-center border rounded py-1 text-break" id="answerText">
      <h3 >
            {{ aText }}
      </h3>
    </slide>
    <slide class="hooper-slides__slide text-center border rounded py-1" id="answerText">
      <h3 >
        次の問題へ
      </h3>
    </slide>

  </hooper>
</template>

<script>
import { Hooper, Slide } from 'hooper';
import 'hooper/dist/hooper.css';

export default {
  name: 'App',
  components: {
    Hooper,
    Slide
  },
  props: {
    answerText: {
    },
    nextQuiz: {
      type: String, 
    },
  },  
  data() {
    return {
      aText: this.answerText,
      nQuizURL: this.nextQuiz,
      currentSlide: 0,
    }
  },
  methods: {
    // @slideからスライドイベントを取得
    slide(currentSlide) {
      // スライド番号を代入
       this.currentSlide = currentSlide.currentSlide;
       if(this.currentSlide >= 2){
         setTimeout(this.nextQ, 300)
       }
    },
    nextQ() {
      window.location = this.nQuizURL
    }
  },
};
</script>


<style lang="scss">
  .hooper-slides {
    text-align: center;
    &__hooper {
          background-color: #d5d5d5;
    }
    &__slide {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  }
</style>