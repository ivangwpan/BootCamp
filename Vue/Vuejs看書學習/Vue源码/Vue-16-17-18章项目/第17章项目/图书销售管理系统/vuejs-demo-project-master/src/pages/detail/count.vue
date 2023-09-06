<template>
  <div class="sales-board">
      <div class="sales-board-intro">
        <h2>Excel报表一劳永逸（数据+函数+表格）</h2>
        <p>Excel工作解决之道 报表一劳永逸 不加班 升职加薪案头书</p>
      </div>
      <div class="sales-board-form">
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  产品类型：
              </div>
              <div class="sales-board-line-right">
                  <v-chooser :selections="buyTypes"></v-chooser>
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  适用软件：
              </div>
              <div class="sales-board-line-right">
                  <v-selection :selections="districts"></v-selection>
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  售后时间：
              </div>
              <div class="sales-board-line-right">
                  半年
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">
                  总价：
              </div>
              <div class="sales-board-line-right">
                  50 元
              </div>
          </div>
          <div class="sales-board-line">
              <div class="sales-board-line-left">&nbsp;</div>
              <div class="sales-board-line-right">
                  <div class="button">
                    立即购买
                  </div>
              </div>
          </div>
      </div>
      <div class="sales-board-des">
        <h2>产品说明</h2>
        <p>Excel工作解决之道 报表一劳永逸 不加班 升职加薪案头书，解决在工作中遇到的各种表格问题</p>

        <table class="sales-board-table">
          <tbody>
              <tr class="ui-table-row">
                  <td class="col-first">
                      <div class="intro-pic">
                          <label>揭秘Excle报表制作三步法，一劳永逸地解决Excle报表问题。采集数据：数据往往分散存储于多个地方，本书教给你如何将它们集中采集到Excel中，并进一步处理和分析。加工整合：介绍各种格式转换以及加工处理技巧，让数据即标准又规范，为下一步的分析工作打下基础。分析呈现：使用Excel的内置功能及外部插件或工具进行分析，生成各种数据报表或图表，彻底解决工作难题。</label>
                      </div>
                  </td>
                 
              </tr>
          </tbody>
      </table>
      </div>
  </div>
</template>

<script>
import VSelection from '../../components/base/selection'
import VChooser from '../../components/base/chooser'
export default {
  components: {
    VChooser,
    VSelection
  },
  data () {
    return {
      buyTypes: [
        {
          label: '红色版',
          value: 0
        },
        {
          label: '绿色版',
          value: 1
        },
        {
          label: '紫色版',
          value: 2
        }
      ],
      districts: [
        {
          label: 'window',
          value: 0
        },
        {
          label: 'unix',
          value: 1
        },
      ]
    }
  }
}
</script>

Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
