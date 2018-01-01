/* eslint-disable */
import RightIndex from '../../components/admin/index/RightIndex'
import RightEditor from '../../components/admin/editor/RightEditor'
import RightMedia from '../../components/admin/media/RightMedia'

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
