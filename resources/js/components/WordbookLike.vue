<template>
  <div>
    <button
      type="button"
      class="btn m-0 p-1 shadow-none"
    >
      <i class="fas fa-heart mr-1"
        :class="{'red-text':this.isLikedBy, 'animated animation-target fast':this.gotToLike}"
        @click="clickLike" 
      />
    </button>
    {{ countLikes }} 
  </div>
</template>

<script>
  export default {
    props: {
      initialIsLikedBy: {
        type: Boolean,
        default: false,
      },
      initialCountLikes: {
        type: Number,
        default: 0,
      },
      authorized: {
        type: Boolean,
        default: false,
      },
      endpoint: {
        type: String,
      },
    },
    data() {
      return {
        isLikedBy: this.initialIsLikedBy,
        countLikes: this.initialCountLikes,
        gotToLike: false,
      }
    },
    methods: {
      clickLike() {
        if (!this.authorized) {
          alert('いいね機能はログイン中のみ使用できます')
          return
        }

        this.isLikedBy
          ? this.unlike()
          : this.like()
      },
      async like() {
        const response = await axios.put(this.endpoint)

        this.isLikedBy = true
        this.countLikes = response.data.countLikes
        this.gotToLike = true
      },
      async unlike() {
        const response = await axios.delete(this.endpoint)

        this.isLikedBy = false
        this.countLikes = response.data.countLikes
        this.gotToLike = false
      },
    },
  }
</script>

<style lang="scss">
.fa-heart {
   color: rgb(112, 112, 112);
}
.red-text {
 color: #e54747;
 }







.animation-target {
  -webkit-animation: animation 1000ms linear both;
  animation: animation 1000ms linear both;
}

/* Generated with Bounce.js. Edit at http://bouncejs.com#%7Bs%3A%5B%7BT%3A%22c%22%2Ce%3A%22b%22%2Cd%3A1000%2CD%3A0%2Cf%3A%7Bx%3A2%2Cy%3A2%7D%2Ct%3A%7Bx%3A1%2Cy%3A1%7D%2Cs%3A1%2Cb%3A10%7D%5D%7D */

@-webkit-keyframes animation { 
  0% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  2.2% { -webkit-transform: matrix3d(1.632, 0, 0, 0, 0, 1.632, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.632, 0, 0, 0, 0, 1.632, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.4% { -webkit-transform: matrix3d(1.084, 0, 0, 0, 0, 1.084, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.084, 0, 0, 0, 0, 1.084, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  6.61% { -webkit-transform: matrix3d(0.654, 0, 0, 0, 0, 0.654, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.654, 0, 0, 0, 0, 0.654, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  8.81% { -webkit-transform: matrix3d(0.502, 0, 0, 0, 0, 0.502, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.502, 0, 0, 0, 0, 0.502, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  11.21% { -webkit-transform: matrix3d(0.638, 0, 0, 0, 0, 0.638, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.638, 0, 0, 0, 0, 0.638, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.61% { -webkit-transform: matrix3d(0.922, 0, 0, 0, 0, 0.922, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.922, 0, 0, 0, 0, 0.922, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  16.02% { -webkit-transform: matrix3d(1.16, 0, 0, 0, 0, 1.16, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.16, 0, 0, 0, 0, 1.16, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.42% { -webkit-transform: matrix3d(1.241, 0, 0, 0, 0, 1.241, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.241, 0, 0, 0, 0, 1.241, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  20.82% { -webkit-transform: matrix3d(1.171, 0, 0, 0, 0, 1.171, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.171, 0, 0, 0, 0, 1.171, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  23.22% { -webkit-transform: matrix3d(1.033, 0, 0, 0, 0, 1.033, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.033, 0, 0, 0, 0, 1.033, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  25.63% { -webkit-transform: matrix3d(0.92, 0, 0, 0, 0, 0.92, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.92, 0, 0, 0, 0, 0.92, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  27.93% { -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 0.883, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.883, 0, 0, 0, 0, 0.883, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  32.73% { -webkit-transform: matrix3d(0.984, 0, 0, 0, 0, 0.984, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.984, 0, 0, 0, 0, 0.984, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  37.44% { -webkit-transform: matrix3d(1.057, 0, 0, 0, 0, 1.057, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.057, 0, 0, 0, 0, 1.057, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  46.95% { -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.972, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.972, 0, 0, 0, 0, 0.972, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  56.56% { -webkit-transform: matrix3d(1.013, 0, 0, 0, 0, 1.013, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.013, 0, 0, 0, 0, 1.013, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  66.07% { -webkit-transform: matrix3d(0.994, 0, 0, 0, 0, 0.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.994, 0, 0, 0, 0, 0.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  75.58% { -webkit-transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  85.09% { -webkit-transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  94.69% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}

@keyframes animation { 
  0% { -webkit-transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  2.2% { -webkit-transform: matrix3d(1.632, 0, 0, 0, 0, 1.632, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.632, 0, 0, 0, 0, 1.632, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  4.4% { -webkit-transform: matrix3d(1.084, 0, 0, 0, 0, 1.084, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.084, 0, 0, 0, 0, 1.084, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  6.61% { -webkit-transform: matrix3d(0.654, 0, 0, 0, 0, 0.654, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.654, 0, 0, 0, 0, 0.654, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  8.81% { -webkit-transform: matrix3d(0.502, 0, 0, 0, 0, 0.502, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.502, 0, 0, 0, 0, 0.502, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  11.21% { -webkit-transform: matrix3d(0.638, 0, 0, 0, 0, 0.638, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.638, 0, 0, 0, 0, 0.638, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  13.61% { -webkit-transform: matrix3d(0.922, 0, 0, 0, 0, 0.922, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.922, 0, 0, 0, 0, 0.922, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  16.02% { -webkit-transform: matrix3d(1.16, 0, 0, 0, 0, 1.16, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.16, 0, 0, 0, 0, 1.16, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  18.42% { -webkit-transform: matrix3d(1.241, 0, 0, 0, 0, 1.241, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.241, 0, 0, 0, 0, 1.241, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  20.82% { -webkit-transform: matrix3d(1.171, 0, 0, 0, 0, 1.171, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.171, 0, 0, 0, 0, 1.171, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  23.22% { -webkit-transform: matrix3d(1.033, 0, 0, 0, 0, 1.033, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.033, 0, 0, 0, 0, 1.033, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  25.63% { -webkit-transform: matrix3d(0.92, 0, 0, 0, 0, 0.92, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.92, 0, 0, 0, 0, 0.92, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  27.93% { -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 0.883, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.883, 0, 0, 0, 0, 0.883, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  32.73% { -webkit-transform: matrix3d(0.984, 0, 0, 0, 0, 0.984, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.984, 0, 0, 0, 0, 0.984, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  37.44% { -webkit-transform: matrix3d(1.057, 0, 0, 0, 0, 1.057, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.057, 0, 0, 0, 0, 1.057, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  46.95% { -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.972, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.972, 0, 0, 0, 0, 0.972, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  56.56% { -webkit-transform: matrix3d(1.013, 0, 0, 0, 0, 1.013, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.013, 0, 0, 0, 0, 1.013, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  66.07% { -webkit-transform: matrix3d(0.994, 0, 0, 0, 0, 0.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.994, 0, 0, 0, 0, 0.994, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  75.58% { -webkit-transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.003, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  85.09% { -webkit-transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(0.998, 0, 0, 0, 0, 0.998, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  94.69% { -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1.001, 0, 0, 0, 0, 1.001, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); }
  100% { -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); } 
}

</style>