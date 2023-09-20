<script>
import Swal from 'sweetalert2';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

export default {
  components: {
    AuthenticatedLayout,
    Head,
  },
  props: {
    response: Object,
  },
  data() {
    return {
      formData: {
        name: this.response?.rt_data?.name ?? '',
        price: this.response?.rt_data?.price ?? '',
        public: this.response?.rt_data?.public ?? '',
        desc: this.response?.rt_data?.desc ?? '',
      },
    };
  },
  methods: {
    submitData() {
      const { formData, response } = this;
      // 驗證
      Swal.fire({
        title: `確認更新商品: ${response?.rt_data?.name ?? ''}?`,
        showDenyButton: true,
        confirmButtonText: '更新',
        denyButtonText: '取消',
      }).then((result) => {
        if (result.isConfirmed) {
          router.visit(route('product.update'), {
            // data: { ...formData, ...{ id: response.rt_data.id } }
            method: 'put', data: { formData, id: response.rt_data.id }, preserveState: true,
            onSuccess: ({ props }) => {
              if (props.flash.message.rt_code === 1) {
                Swal.fire({
                  title: '更新成功',
                  showDenyButton: true,
                  confirmButtonText: '回列表',
                  denyButtonText: '取消',
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    router.get(route('product.list'));
                  }
                });
              }
            },
          });
        }
      });
    },
    inputClass(item) {
      if (!item) return '';
      return 'border-[red]';
    },
  },
};
</script>

<template>
  <Head title="product-create" />
  <AuthenticatedLayout>
    <template #header>
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Product 編輯商品</h2>
      </div>
    </template>
    <section id="product-create" class="px-[15px] py-[10px] bg-white mt-[30px] rounded-[6px]">
      <form @submit.prevent="submitData()" action="">
        <label>
          商品名稱:
          <input v-model="formData.name" :class="{ 'border-[red]': $page.props.errors['formData.name'] }" type="text" name="name" id="" required>
          <div>
            {{ $page.props?.errors['formData.name'] ?? '' }}
          </div>
        </label>
        <label>
          商品價格:
          <input v-model="formData.price" :class="inputClass($page.props?.errors['formData.price'])" type="text" min="0" name="price" id="" required>
          <div class="text-[red]">
            {{ $page.props?.errors['formData.price'] ?? '' }}
          </div>
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
            <button type="button" class="btn">取消編輯</button>
          </Link>
          <button type="submit" class="btn">更新</button>
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
