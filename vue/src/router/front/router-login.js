/* eslint-disable */
import Login from '../../components/front/login/Login'
import Register from '../../components/front/login/Register'

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

