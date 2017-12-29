/* eslint-disable */
import RightIndex from '@/components/admin/RightIndex'
import RightEditor from '../components/admin/RightEditor'
import RightMedia from '../components/admin/RightMedia'

export default [
    {
        path: '/',
        name: 'right-index',
        component: RightIndex,
    },
    {
        path: '/editor',
        name: 'right-editor',
        component: RightEditor,
    },
    {
        path: '/media',
        name: 'right-media',
        component: RightMedia
    }
]

