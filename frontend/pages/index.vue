<template>
  <v-row justify="center" align="center">
    <v-col>
      <v-card>
        <v-img contain src="/img/shoe.jpg">
          <v-card-title style="background: rgba(0,0,0,0.79)">
            Adidas Superstar
          </v-card-title>
        </v-img>
      </v-card>
    </v-col>
    <v-col >
      <v-card>
        <v-img style="background: #ffffff"  src="/img/shoe1.png">
          <v-card-title style="backgrund: rgba(0,0,0,0.79)">
            Yeezy boost 350
          </v-card-title>
        </v-img>
      </v-card>
    </v-col>
    <v-col>
      <v-card style="height:fit-content; width: fit-content">
        <v-img  width="800" height="500"
               src="/img/shoe2.jpg">

          <v-card-title style="background: rgba(0,0,0,0.79)">
            Nike Adapt BB 2.0
          </v-card-title>
        </v-img>
      </v-card>
    </v-col>


  </v-row>
</template>

<script>

export default {
  layout:'guest'

}
</script>
