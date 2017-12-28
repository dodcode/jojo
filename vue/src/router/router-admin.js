/* eslint-disable */
import Login from '@/components/Login'
import Register from '@/components/Register'

export default [
    {
        path: '/',
        name: 'login',
        component: Login,
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    }
]

