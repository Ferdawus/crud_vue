import { createRouter, createWebHistory } from 'vue-router'
// import Home from '../views/Home.vue'
import Add from '../crud/AddNew.vue'
import List from '../crud/List.vue'
import Edit from '../crud/Edit.vue'
const routes = [

  {
    path: '/',
    name: 'List',
    component: List
  },
  {
    path: '/add-new',
    name: 'Add',
    component: Add
  },
  {
    path: '/student/edit/:id',
    name: 'Edit',
    component: Edit
  },
//   {
//     path: '/about',
//     name: 'About',
//     // route level code-splitting
//     // this generates a separate chunk (about.[hash].js) for this route
//     // which is lazy-loaded when the route is visited.
//     component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
//   }
]
const router = createRouter({
  history: createWebHistory(),
  routes
})
export default router
