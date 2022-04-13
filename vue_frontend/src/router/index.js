import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [{
    path: "/",
    name: "HomeLight",
    meta: {
        title: 'GW ICT'
    },
    component: () =>
        import ("../views/HomeLight.vue"),
}];
const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior(savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
})


router.afterEach((to) => {
    if (to.meta && to.meta.title) {
        document.title = to.meta.title + ' | GW ';
    }
});


export default router;