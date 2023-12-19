import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../components/Home.vue'
import Manhwa from '../components/Manhwa.vue';
import Reader from '../components/Reader.vue';
import create from '../components/reader/create.vue';
import About from '../components/About.vue';
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: "/manhwa", // Example route for the manhwa component
      name: "manhwa",
      component: Manhwa,
    },
    {
      path: "/reader", // Example route for the reader component
      name: "reader",
      component: Reader,
    },
    {
    path: "/reader/create",
    name: "create",
    component: create,
    },

    {
      path: "/about",
      name: "about",
      component: About,
      },
  ]
  //Wala ko mag gamit og katong loading/loader sir, eager man tingali pangan ani ako ge gamit hehehe
})

export default router
