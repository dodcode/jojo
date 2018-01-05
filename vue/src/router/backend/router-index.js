/* eslint-disable */
import RightIndex from '../../components/backend/index/RightIndex'
import RightEditor from '../../components/backend/editor/RightEditor'
import RightMedia from '../../components/backend/media/RightMedia'

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

