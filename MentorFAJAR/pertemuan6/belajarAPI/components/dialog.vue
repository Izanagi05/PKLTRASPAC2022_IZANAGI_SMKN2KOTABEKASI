<template>
  <div>

  <v-row>
    <v-dialog v-model="dialog">
      <template v-slot:activator="{on, attrs}">
        <v-btn v-bind="attrs" v-on="on" >
          <v-icon>
            mdi-pencil
          </v-icon>
        </v-btn>
      </template>
      <v-card>
        <h3>Ini dialog</h3>

      </v-card>

    </v-dialog>
  </v-row>
  </div>
</template>
<script>
  export default {
    data: () => ({
      dialog: false,
    }),
  }
</script>

