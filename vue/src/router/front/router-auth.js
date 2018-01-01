/* eslint-disable */
import Login from '../../components/front/auth/Login'
import Register from '../../components/front/auth/Register'

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

