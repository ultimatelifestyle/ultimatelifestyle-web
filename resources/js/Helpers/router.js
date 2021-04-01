import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)

import DailyRecord from '../components/DailyRecord'
import Users from '../components/Users'
import Inv from '../components/Investigation'
const routes = [
    {
        path:'/dailyrecord',
        component: DailyRecord
    },
    {
        path:'/users',
        component: Users
    },
    {
        path:'/investigation',
        component: Inv
    }
]

const router = new VueRouter({
    routes,
    mode: 'history'
})

export default router