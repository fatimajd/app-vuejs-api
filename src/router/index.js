import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import acc from "../views/accueil.vue";
import rdv from "../views/rdv.vue";
import newuser from "../views/newUser.vue";
import ourReservation from "../views/ourReservation.vue";
import newRendezVous from "../views/newRendezVous.vue";


Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue"),
  },
  {
    path: "/accv",
    name: "acc",
    component: acc,
  },
  {
    path: "/rdv",
    name: "rdv",
    component: rdv,
  },{
  path: "/newuser",
  name: "newuser",
  component: newuser,
},
{
  path: "/ourReservation",
  name: "ourReservation",
  component: ourReservation,
},{
  path: "/newRendezVous",
  name: "newRendezVous",
  component: newRendezVous,
},
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
});

export default router;
