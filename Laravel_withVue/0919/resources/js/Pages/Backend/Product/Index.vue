<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import Swal from 'sweetalert2';

export default {
  components: {
    AuthenticatedLayout,
    Head,
  },
  props: {
    response: Object,
  },
  methods: {
    isPublic(num = 0) {
      if (![1, 2].includes(num)) return '';
      return num === 1 ? '公開' : '非公開';
    },
    deleteProduct(id) {
      Swal.fire({
        title: '確定要刪除嗎?',
        showDenyButton: true,
        confirmButtonText: '刪除',
        denyButtonText: '取消',
      }).then((result) => {
        if (result.isConfirmed) {
          console.log(id);
          router.visit(route('product.delete'), { method: 'delete', data: { id: id } });
        }
      });
    },
  },
};
</script>

<template>
  <Head title="product" />
  <AuthenticatedLayout>
    <template #header>
      <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Product</h2>
        <Link :href="route('product.create')">
          <button type="button" class="font-semibold text-xl text-gray-800 leading-tight border border-black p-2 rounded-[6px]">新增商品</button>
        </Link>
      </div>
    </template>
    <section id="product" class="px-[15px] py-[10px] bg-white mt-[30px] rounded-[6px]">
      <table class="w-full">
        <thead>
          <th>#</th>
          <th>商品圖片</th>
          <th>商品名稱</th>
          <th>商品價格</th>
          <th>公開/非公開</th>
          <th>建立時間</th>
          <th>商品描述</th>
          <th>操作</th>
        </thead>
        <tbody>
          <tr v-for="(item, index) in response.rt_data" :key="item.id">
            <td>{{ index + 1 }}</td>
            <td>
              <img class="w-[150px] aspect-[4/3] object-cover m-auto" :src="item.img_path" alt="">
            </td>
            <td>{{ item.name }}</td>
            <td>${{ item.price }}</td>
            <td>{{ isPublic(item.public) }}</td>
            <td>{{ item.timeFormat }}</td>
            <td>{{ item.desc }}</td>
            <td>
              <div class="flex justify-center gap-3">
                <Link :href="route('product.edit', { id: item.id })">
                  <button type="button" class="border border-black px-3 py-2 rounded-[5px]">編輯</button>
                </Link>
                <button type="button" class="border border-black px-3 py-2 rounded-[5px] bg-red-800 text-white" @click="deleteProduct(item.id)">刪除</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </AuthenticatedLayout>
</template>

<style lang="scss" scoped>
#product {
  @apply w-full h-full overflow-y-auto;
  table{
    th{
      @apply border border-black;
    }
    td{
      @apply text-center border border-black;
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
