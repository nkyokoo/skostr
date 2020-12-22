<template>
  <div>
    <v-row>
      <v-col>

      </v-col>
      <v-col>
        <v-card>
          <v-card-title>Hyppighed over sko størrelser</v-card-title>
          <v-card-text>Neden under af graf over internet brugers skostørrelser</v-card-text>
        </v-card>
      </v-col>
      <v-col>

      </v-col>
    </v-row>
    <v-row>
      <v-col>

      </v-col>
      <v-col>
        <v-card>
          <freq-chart v-if="loaded" :chartdata="this.chartData" :options="this.options">

          </freq-chart>
        </v-card>

      </v-col>
      <v-col>

      </v-col>
    </v-row>
    <v-row>
      <v-col>

      </v-col>
      <v-col>
        <v-card>
          <v-card-title>
              Her kan du indtaste dine egne data
          </v-card-title>
          <v-btn to='createshoesize'>
            Gå til form
          </v-btn>
        </v-card>

      </v-col>
      <v-col>

      </v-col>
    </v-row>
    <v-card>


  </v-card>
  </div>
</template>

<script>
import freq_chart from '../components/freq_chart.vue';

export default {
  name: "usershoesizes",
  layout:'guest',
  components:{
    'freq-chart': freq_chart,
  },
  data(){
    return {
      loaded:false,
      chartData:{
        labels: [],
        datasets: [
          {
            label: 'Sko størrelser',
            backgroundColor: '#35557e',
            data: []
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      },
      formattedData:{
        sizes:[],
        freq:[],
      }
    }
  },
  methods: {
    async getShoeSizesData(){
      await this.$axios.get('/shoesizes').then( res => {
        this.formatData(res.data.data);
      })
    },
    formatData(data){
      for (const item of data){
        this.formattedData.sizes.push(item.size)
        this.formattedData.freq.push(item.freq)
      }
      this.chartData.datasets[0].data = this.formattedData.freq
      this.chartData.labels = this.formattedData.sizes
      this.loaded = true;

    }
  },
  mounted() {
    this.getShoeSizesData()

  }
}
</script>

<style scoped>

</style>
