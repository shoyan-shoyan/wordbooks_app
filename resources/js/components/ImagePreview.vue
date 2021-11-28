<template>
  <div>
    <div>
      プロフィール画像選択
        <div>
            <input type="file" name="img_name" ref="preview" v-on:change="show">
        </div>
    </div>
    <div class="preview-box" v-if="url">
      <img class="image-preview" v-bind:src="url"　width="200" height="200">
    </div>
  </div>


</template>

<script>
  export default {

    data() {
        return {
            url:""
        }
    },
    methods: {
        show() {
            const file = this.$refs.preview.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
  }
</script>