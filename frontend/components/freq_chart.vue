<script>
import { Bar } from 'vue-chartjs'

export default {
  name: "freq-chart",
  extends: Bar,
  props: ['chartdata', 'options'],
  mounted () {
    console.info(this.chartdata)
    this.renderChart(this.chartdata, this.options)
  }
}
</script>

<style scoped>

</style>
