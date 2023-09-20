<script>
export default {
  props: {
    productInfo: {
      type: Object,
      required: true,
      default: () => {
        return {};
      },
    },
    response: {
      type: Object,
      required: false,
      default: () => ({}),
    },
  },
  data() {
    return {
      title: 'Hello World !',
    };
  },
  created() {
  },
};
</script>

<template>
  <section class="card">
    <img :src="productInfo.img_path" class="w-full aspect-[4/3] object-cover" alt="">
    <h3 class="name">商品名稱:{{ productInfo.name }}</h3>
    <h3 class="price">商品價格:{{ productInfo.price }}</h3>
    <h3 class="desc">商品描述:{{ productInfo.desc }}</h3>
  </section>
</template>

<style lang="scss" scoped>
.card {
  @apply border w-[calc(25%-22.5px)] p-6;
    h3 {
      @apply pb-3 border-b-2;
    }
  .title {
    @apply text-[6.25rem] text-center;
  }

  .btn-base {
    @apply p-1.5 border-2 rounded-md border-green-500 cursor-pointer;
  }
}
</style>
