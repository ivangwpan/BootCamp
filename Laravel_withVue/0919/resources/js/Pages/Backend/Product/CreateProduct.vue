<script>
import Swal from 'sweetalert2';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

export default {
  components: {
    AuthenticatedLayout,
    Head,
  },
  data() {
    return {
      formData: {
        name: '',
        image: '',
        price: '',
        public: '',
        desc: '',
      },
    };
  },
  methods: {
    submitData() {
      // 驗證
      router.visit(route('product.store'), {
        method: 'post',
        data: this.formData,
        preserveState: true,
        onSuccess: ({ props }) => {
          if (props.flash.message.rt_code === 1) {
            Swal.fire({
              title: '新增成功',
              showDenyButton: true,
              confirmButtonText: '回列表',
              denyButtonText: '取消',
            }).then((result) => {
              if (result.isConfirmed) {
                router.get(route('product.list'));
              }
            });
          }
        },
      });
    },
    uploadImage(event) {
      const reader = new FileReader();
      reader.readAsDataURL(event.target.files[0]);
      reader.onload =  () => {
        this.formData.image = reader.result;
      };
      reader.onerror = (error) => {
        console.log('Error: ', error);
      };
    },
  },
};
</script>

<template>
  <Head title="product-create" />
  <AuthenticatedLayout>
    <template #header>
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Product 新增商品</h2>
      </div>
    </template>
    <section id="product-create" class="px-[15px] py-[10px] bg-white mt-[30px] rounded-[6px]">
      <form @submit.prevent="submitData()" action="">
        <label>
          商品名稱:
          <input v-model="formData.name" type="text" name="name" id="" required>
        </label>
        <label>
          商品照片:
          <div class="relative inline-block">
            <div v-if="!formData.image" for="image" class="border border-dashed w-[200px] aspect-[4/3] flex justify-center items-center text-[48px] cursor-pointer">
              +
            </div>
            <img v-else :src="formData.image" class="w-[200px] aspect-[4/3] object-cover" alt="">
            <input class="absolute top-1/2 left-1/2 w-1 h-1 opacity-0" type="file" name="image" id="image" required @change="(event) => uploadImage(event)">
          </div>
        </label>
        <label>
          商品價格:
          <input v-model="formData.price" type="text" min="0" name="price" id="" required>
        </label>
        <div class="flex items-center gap-[10px]">
          公開/非公開:
          <label for="">
            <input v-model="formData.public" type="radio" name="public" id="" value="1" required>
          </label>
          <label for="">
            <input v-model="formData.public" type="radio" name="public" id="" value="2">
          </label>
        </div>
        <label>
          商品描述:
          <input v-model="formData.desc" type="text" name="desc" id="" required>
        </label>
        <div class="flex justify-center items-center gap-[45px]">
          <Link :href="route('product.list')">
            <button type="button" class="btn">取消新增</button>
          </Link>
          <button type="submit" class="btn">確認新增</button>
        </div>
      </form>
    </section>
  </AuthenticatedLayout>
</template>

<style lang="scss" scoped>
#product-create {
  @apply w-full h-full overflow-y-auto;
  form{
    @apply flex flex-col gap-[10px];
    .btn{
      @apply border border-[gray] font-bold bg-gray-400 px-[15px] py-[10px] rounded-[5px];
    }
  }

  .title {
    @apply text-[6.25rem] text-center;
  }

  .btn-base {
    @apply p-1.5 border-2 rounded-md border-green-500 cursor-pointer;
  }
}
</style>
