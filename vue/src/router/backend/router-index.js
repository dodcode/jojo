/* eslint-disable */
import RightIndex from '../../components/backend/index/RightIndex'
import Article from '../../components/backend/contents/Article'
import RightMedia from '../../components/backend/media/RightMedia'

export default [
    {
        path: '/',
        name: 'right-index',
        component: RightIndex,
    },
    {
        path: '/article',
        name: 'article',
        component: Article,
    },
    {
        path: '/media',
        name: 'right-media',
        component: RightMedia
    }
]

