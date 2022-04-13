import Vue from 'vue'
import App from './App.vue'
import router from './router'
import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css"
import CoolLightBox from 'vue-cool-lightbox';
import 'vue-cool-lightbox/dist/vue-cool-lightbox.min.css'
import './assets/scss/style.scss'



import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret, faPlus, faEdit, faTrash } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
library.add(faUserSecret, faPlus, faEdit, faTrash)
Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.prototype.$APIUrl = "https://avrazsardar.com/gw_recipe/public/api/";
import VueQuillEditor from 'vue-quill-editor'

import 'quill/dist/quill.core.css' // import styles
import 'quill/dist/quill.snow.css' // for snow theme
import 'quill/dist/quill.bubble.css' // for bubble theme

Vue.use(VueQuillEditor, /* { default global options } */ )
    // main.js
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);
Vue.use(CoolLightBox);
Vue.config.productionTip = false

new Vue({
    router,
    render: h => h(App),
}).$mount('#app')