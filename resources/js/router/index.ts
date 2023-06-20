import { createRouter, createWebHistory, RouteRecordRaw, RouteLocationNormalized, NavigationGuardNext } from 'vue-router';

import Cookies from 'js-cookie';
import Swal from 'sweetalert2';
import CryptoJS from 'crypto-js';


const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'home',
    component: import('../views/HomeView.vue')
  },
  // {
  //   path: '/premium',
  //   name: 'homepremuim',
  //   component: HomeView
  // },
  {
    path: '/sell-your-startup',
    name: 'sellstartup',
    component: import('../views/SellStarupView.vue')
  },
  {
    path: '/adminarea',
    name: 'AdminArea',
    component: import('../views/AdminAreaView.vue'),
    meta: { requiresAuth: true },
  },
  {
    path: '/startup-listings',
    name: 'startup-listings',
    component: import('../views/StartupDetailsView.vue'),
    props : (route) => ({id:route.query.id}),
  },
  // {
  //   path: '/:catchAll(.*)',
  //   name: 'NotFound',
  //   component: ,
  // }
];

const router = createRouter({
  history: createWebHistory('/'),
  routes,
});

router.beforeEach((to: RouteLocationNormalized, from: RouteLocationNormalized, next: NavigationGuardNext) => {
  if (to.meta.requiresAuth) {
    const adminRole = '2';
    const user = Cookies.get('Role') === CryptoJS.SHA256(adminRole).toString(); 

    if (user) {
      // User is authenticated, allow access to the route
      next();
    } else {
      // User is not authenticated, redirect to login page
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "error",
        title: "You Can't Navigated To This Page ",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
      });

      next('/');
    }
  } else {
    // Route does not require authentication, allow access
    next();
  }
});

export default router;