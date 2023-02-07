<template>
  <div>
    <div class="home" id="home" style="background-color: blue;">
      <div class="toolbars">
        <template>
          <v-toolbar dark>
            <v-toolbar-title>Home</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn depressed href="#home">Home</v-btn>
            <v-btn depressed href="#about">About</v-btn>
            <v-btn depressed href="#porto">Portofolio</v-btn>
          </v-toolbar>
        </template>
      </div>
      <div class="home-content white--text">
        <pre>
            <h1>
                I'm
                Delshady
            </h1>
          </pre>
        <p>
          I’m a student at Vocational School 2 Bekasi City. Currently i'm became
          an internship participant at TRASPAC.
        </p>
      </div>
    </div>
    <div class="about" id="about">
      <div class="toolbars">
        <template>
          <v-toolbar dark>
            <v-toolbar-title>About</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn depressed href="#home">Home</v-btn>
            <v-btn depressed href="#about">About</v-btn>
            <v-btn depressed href="#porto">Portofolio</v-btn>
          </v-toolbar>
        </template>
      </div>
      <center>
        <div class="ac-atas">
            <v-row>
            <v-col>
              <div class="abt-content1">
                <img
                  src="~/assets/pjku1.jpg"
                  width="250px"
                  height="255px"
                  alt=""
                />
              </div>
            </v-col>
            <v-col>
              <div class="abt-text1">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."
              </div>
            </v-col>
          </v-row>
          </div>
        <div class="ac-bawah">
        <v-row>
            <v-col>
              <div class="abt-text2">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."
              </div>
            </v-col>
            <v-col>
              <div class="abt-content2">
                <img
                  src="~/assets/pjku1.jpg"
                  width="250px"
                  height="255px"
                  alt=""
                />
              </div>
            </v-col>
          </v-row>
          </div>
      </center>
    </div>
    <div class="porto" id="porto">
      <div class="toolbars">
        <template>
          <v-toolbar dark>
            <v-toolbar-title>Portofolio</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn depressed href="#home">Home</v-btn>
            <v-btn depressed href="#about">About</v-btn>
            <v-btn depressed href="#porto">Portofolio</v-btn>
          </v-toolbar>
        </template>
      </div>
      <div class="porto-content">
        <center>
          <tr>
            <div class="pc-atas">
              <td>
                <div class="pc1">
                  <!-- <img src="~assets/Rectangle 56.jpg" width="200px" alt="" /> -->
                </div>
              </td>
              <td>
                <div class="pc2">
                  <!-- <img src="~assets/Rectangle 58.jpg" width="200px" alt="" /> -->
                </div>
              </td>
              <td>
                <div class="pc3">
                  <!-- <img src="~assets/Rectangle 57.jpg" width="200px" alt="" /> -->
                </div>
              </td>
            </div>
          </tr>
        </center>
        <center>
          <tr>
            <div class="pc-bawah">
              <td>
                <div class="pc4">
                  <!-- <img src="~assets/Rectangle 59.jpg" width="200px" alt="" /> -->
                </div>
              </td>
              <td>
                <div class="pc5">
                  <!-- <img src="~assets/Rectangle 60.jpg" width="200px" alt="" /> -->
                </div>
              </td>
            </div>
          </tr>
        </center>
      </div>
    </div>
  </div>
</template>
<style>
.home {
  /* background: url("file:///C:/Users/user_rpl/Downloads/download%201%20(1).svg"); */
  background-size: cover;
  height: 100vh;
}
.toolbars {
  font-family: "Poppins", sans-serif;
}
.home-content {
  margin-top: 50px;
}
.home-content h1 {
  margin-top: 27px;
  font-family: "Kaushan Script", sans-serif;
  font-size: 70px;
}
.home-content p {
  font-family: "Kameron", sans-serif;
  height: 117px;
  width: 389px;
  margin-left: 800px;
  margin-top: -270px;
}
.sub-header {
  margin-top: 10px;
}
.about {
  background: conic-gradient(
    from 180deg at 50% 50%,
    rgba(142, 43, 43, 0.785203) -63.75deg,
    #8e2b2b 43.12deg,
    rgba(142, 43, 43, 0.473139) 217.5deg,
    rgba(142, 43, 43, 0.864036) 271.87deg,
    rgba(142, 43, 43, 0.785203) 296.25deg,
    #8e2b2b 403.12deg
  );
  background-size: cover;
  height: 100vh;
}
.porto {
  background: conic-gradient(
    from 180deg at 50% 50%,
    rgba(142, 43, 43, 0.785203) -63.75deg,
    #8e2b2b 43.12deg,
    rgba(142, 43, 43, 0.473139) 217.5deg,
    rgba(142, 43, 43, 0.864036) 271.87deg,
    rgba(142, 43, 43, 0.785203) 296.25deg,
    #8e2b2b 403.12deg
  );
  background-size: cover;
  height: 100vh;
}
.ac-atas {
  margin-top: 25px;
}
.abt-text1 {
  /* width: 500px; */
  margin-left: 70px;
  margin-top: 20px;/**/
}
.ac-bawah {
  margin-top: 10px;
}
.abt-text2 {
  margin-top: 20px;/**/
  /* margin-top: -100px; */
  /* width: 500px; */
  margin-right: 70px;
}
.pc-atas {
  margin-top: 65px;
}
.pc1 {
  margin-right: 70px;
}
.pc3 {
  margin-left: 70px;
}
.pc-bawah {
  margin-top: 60px;
}
.pc4 {
  margin-right: 50px;
}
.pc5 {
  margin-left: 50px;
}
</style>
