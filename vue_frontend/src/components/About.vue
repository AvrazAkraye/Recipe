<template>
  <div class="gw_team_about">
    <div class="about_image">
      <img src="../assets/img/slider/1.jpg" alt="about" />
    </div>
    <!-- End .about_image -->

    <div class="description">
      <h3 class="name">Avraz Sardar / Full Stack</h3>
      <div class="description_inner">
        <div class="left">
          <p>
            Hello, I'm a UI/UX Designer & Full Stack Web Developer & Full Stack App Developer from Duhok,Iraq. I hold a computer science degree from UOD University.
          </p>
          <div class="gw_team_button">
            <button class="ib-button" @click="showModal">Read More</button>
          </div>
        </div>
        <!-- End .left -->

        <div class="right">
          <ul>
            <li>
              <p><span>Birthday:</span> 20 April, 1992</p>
            </li>
            <li>
              <p><span>Age:</span>29</p>
            </li>
            <li>
              <p><span>Address:</span>KRO 42001, Duhok, Iraq</p>
            </li>
            <li>
              <p>
                <span>Email:</span
                ><a href="avrazxp@gmail.com">avrazxp@gmail.com</a>
              </p>
            </li>
            <li>
              <p>
                <span>Phone:</span
                ><a href="tel:+9647507110224">+964 750 711 0224</a>
              </p>
            </li>
            <li>
              <p><span>Study:</span>(CS) Univercity of Duhok</p>
            </li>
            <li>
              <p><span>Freelance:</span>Available</p>
            </li>
          </ul>
          <!-- End ul -->
        </div>
        <!-- End .right -->
      </div>
    </div>

    <!-- Start Modalbox -->
    <transition name="fade">
      <!-- Modal -->
      <div
        :class="{ 'modal-mask': isActive }"
        id="modal"
        @click="closeModal"
        v-if="isVisible"
      >
        <div
          class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-user"
          @click.stop
        >
          <div class="modal-content">
            <div class="gw_team_modalbox_about">
              <div class="close" @click="closeModal">
                <img
                  class="svg"
                  src="../assets/img/svg/cancel.svg"
                  alt="cancel-img"
                />
              </div>
              <!-- End .close -->
              <div class="my_box">
                <div class="left">
                  <div class="about_title">
                    <h3>Programming Skills</h3>
                  </div>
                  <!-- End .abut_title -->
                  <div class="gw_progress">
                    <div class="progress_inner">
                      <span
                        ><span class="label">Web Developer</span
                        ><span class="number">95%</span></span
                      >
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:95%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                    <div class="progress_inner">
                      <span
                        ><span class="label">Native App Developer</span
                        ><span class="number">80%</span></span
                      >
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                    <div class="progress_inner">
                      <span
                        ><span class="label">Database Managment</span
                        ><span class="number">90%</span></span
                      >
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:90%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                  </div>
                  <!-- End .gw_progress -->
                </div>
                <!-- End .left -->
                <div class="right">
                  <div class="about_title">
                    <h3>Language Skills</h3>
                  </div>
                  <div class="gw_progress">
                    <div class="progress_inner">
                      <span
                        ><span class="label">English</span
                        ><span class="number">90%</span></span
                      >
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:90%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress_inner">
                      <span
                        ><span class="label">Kurdish</span
                        ><span class="number">95%</span></span
                      >
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:90%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress_inner">
                      <span
                        ><span class="label">Arabian</span
                        ><span class="number">99%</span></span
                      >
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:85%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End .right -->
              </div>
              <div class="counter">
                <div class="about_title">
                  <h3>Some Facts</h3>
                </div>
                <ul>
                  <li>
                    <div class="list_inner">
                      <h3>100+</h3>
                      <span>Projects Completed</span>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <h3>+15 Year</h3>
                      <span>Experience</span>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <h3>+100</h3>
                      <span>Happy Clints</span>
                    </div>
                  </li>
                </ul>
                <!-- End ul -->
              </div>
              <!-- End .counter -->

            </div>
            <!-- End .gw_team_modalbox_about -->
          </div>
        </div>
      </div>
    </transition>
    <!-- End Modalbox -->
  </div>
</template>

<script>

export default {

  data() {
    return {
      isActive: false,
      isVisible: false,
    };
  },
  methods: {
    showModal: function() {
      this.isActive = true;
      this.isVisible = true;
    },
    closeModal: function() {
      this.isActive = false;
      this.isVisible = false;
    },
  },
};
</script>
