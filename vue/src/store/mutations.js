import  {
    SEND_NOTIFICATION,
    CLOSE_NOTIFICATION
} from "./mutation-types";

export default {
    [SEND_NOTIFICATION] (state, notification) {
        state.notifications.push(notification);
    },
    [CLOSE_NOTIFICATION] (state, index) {
        state.notifications.splice(index, 1);
    }
}