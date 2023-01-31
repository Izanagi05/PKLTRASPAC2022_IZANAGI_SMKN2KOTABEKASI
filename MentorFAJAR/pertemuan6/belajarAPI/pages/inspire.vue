<template>
  <div>
    <div class="title">
      <v-toolbar-title> <h1>List Data Users</h1> </v-toolbar-title>
    </div>
    <div class="add">
      <v-btn @click="addDialog = true">Add Data User</v-btn>
    </div>
    <div class="table">
      <v-simple-table dark data-app>
        <template>
          <v-row justify="center">
            <v-dialog v-model="dialog" max-width="290">
              <v-card>
                <v-card-title class="text-h5"> Data Users </v-card-title>
                <v-card-text>
                  <v-container>
                    <v-text-field
                      type="text"
                      v-model="datadialog.id"
                      label="ID"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.name"
                      label="Name"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.username"
                      label="Username"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.email"
                      label="E-mail"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.phone"
                      label="Phone"
                      outline
                    ></v-text-field>
                    <v-card-actions>
                      <v-spacer></v-spacer>
                      <v-btn @click="dialog = false">Close</v-btn>
                      <v-spacer></v-spacer>
                    </v-card-actions>
                  </v-container>
                </v-card-text>
              </v-card>
            </v-dialog>
            <v-dialog v-model="addDialog" max-width="290">
              <v-card>
                <v-card-title class="text-h5"> Data Users </v-card-title>
                <v-card-text>
                  <v-container>
                    <v-text-field
                      type="text"
                      v-model="datadialog.id"
                      label="Name"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.name"
                      label="Name"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.username"
                      label="Username"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.email"
                      label="E-mail"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.phone"
                      label="Phone"
                      outline
                    ></v-text-field>
                    <v-card-actions>
                      <v-spacer></v-spacer>
                      <v-btn @click="addDialog = false">Close</v-btn>
                      <v-spacer></v-spacer>

                      <v-btn @click="addData()"> Save</v-btn>
                    </v-card-actions>
                  </v-container>
                </v-card-text>
              </v-card>
            </v-dialog>

            <v-dialog v-model="updatedialog" max-width="290">
              <v-card>
                <v-card-title class="text-h5"> Data Users </v-card-title>
                <v-card-text>
                  <v-container>
                    <v-text-field
                      type="text"
                      v-model="datadialog.id"
                      label="Name"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.name"
                      label="Name"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.username"
                      label="Username"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.email"
                      label="E-mail"
                      outline
                    ></v-text-field>
                    <v-text-field
                      type="text"
                      v-model="datadialog.phone"
                      label="Phone"
                      outline
                    ></v-text-field>
                    <v-card-actions>
                      <v-spacer></v-spacer>
                      <v-btn @click="updatedialog = false">Close</v-btn>
                      <v-spacer></v-spacer>
                      <v-btn @click="addData()">Save</v-btn>
                    </v-card-actions>
                  </v-container>
                </v-card-text>
              </v-card>
            </v-dialog>
            <v-dialog v-model="dialogDelete" max-width="500px">
              <v-card>
                <v-card-title class="text-h5"
                  >Are you sure you want to delete this item?</v-card-title
                >
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn color="blue darken-1" text @click="closeDelete"
                    >Cancel</v-btn
                  >
                  <v-btn color="blue darken-1" text @click="deleteConfirm"
                    >OK</v-btn
                  >
                  <v-spacer></v-spacer>
                </v-card-actions>
              </v-card>
            </v-dialog>
          </v-row>
        </template>

        <thead>
          <tr>
            <th class="text-left">Id</th>
            <th class="text-left">Name</th>
            <th class="text-left">Username</th>
            <th class="text-left">E-Mail</th>
            <th class="text-left">Phone</th>
            <th class="text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(data, index) in datausers" :key="index">
            <td>{{ data.id }}</td>
            <td>{{ data.name }}</td>
            <td>{{ data.username }}</td>
            <td>{{ data.email }}</td>
            <td>{{ data.phone }}</td>
            <td>
              <v-btn @click="details(data)"> See Details </v-btn>
            </td>
            <td>
              <v-btn @click="dialogDelete = true">
                <v-icon> mdi-delete </v-icon>
              </v-btn>
            </td>
            <td>
              <v-btn @click="updateData(data)">
                <v-icon> mdi-pencil </v-icon>
              </v-btn>
            </td>
          </tr>
        </tbody>
      </v-simple-table>
    </div>
  </div>
</template>
<script>
export default {
  name: "IndexPage",
  data: () => ({
    datausers: [],
    dialog: false,
    addDialog: false,
    dialogDelete: false,
    updatedialog: false,
    datadialog: {

      id:0,
      name: "",
      username: "",
      email: "",
      phone: "",
  },
    index: -1,
    changedData: {
      id:0,
      name: "",
      username: "",
      email: "",
      phone: "",
    },
  }),
  methods: {
    async fetch() {
      this.datausers = await fetch(
        "https://jsonplaceholder.typicode.com/users"
      ).then((res) => res.json());
    },
    details(data) {
      this.datadialog = Object.assign({}, data);
      this.dialog = true;
    },
    deleteData(data) {
      this.changedData = Object.assign({}, data);
      this.dialogDelete = true;
    },
    updateData(data) {
      this.index = this.datausers.indexOf(data);
      this.datadialog = Object.assign({}, data);
      this.updatedialog = true;
    },
    addData() {
      if (this.index > -1) {
        Object.assign(this.datausers[this.index], this.datadialog);
      } else {
        this.datausers.push(this.datadialog);
      }
      this.closeAdd();
    },
    deleteConfirm() {

      this.datausers.splice(this.index, 1);
      this.closeDelete();
    },
    closeDelete() {
      this.dialogDelete = false;
    },
    closeAdd() {
      this.addDialog = false;
      this.updatedialog = false;
    },
  },
  created() {
    this.fetch();
  },
  computed: {
    // formTitle () {
    //   return this.index === -1 : 'Edit Item'
    // },
  },
};
</script>
<style>
.title {
  font-family: "Poppins", sans-serif;

  margin-top: 20px;
  margin-bottom: 10px;
  margin-left: 7px;
}
.title h1 {
  font-weight: 700;
}
.add {
  margin-top: -40px;
  margin-bottom: 30px;
  margin-left: 1150px;
}
.table {
  font-family: "Poppins", sans-serif;
}
</style>
