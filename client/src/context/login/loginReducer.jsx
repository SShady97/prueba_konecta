import { LOGIN, LOGOUT, GET_AUTH_USER, SET_LOADING, INVALID_CRED } from '../../types';

const loginReducer = (state, action) => {
    switch(action.type) {

        case LOGIN:
            sessionStorage.setItem('token', action.payload.access_token);
            return {
                ...state,
                auth: true,
                loading: false
            }

        case GET_AUTH_USER:
            return {
                ...state,
                auth: true,
                current_user: action.payload,
                loading: false
            }

        case SET_LOADING:
            return {
                ...state,
                loading: false
            }

        case LOGOUT:
            sessionStorage.clear();
            return {
                ...state,
                auth: false,
                current_user: null
            }

        case INVALID_CRED:
            return {
                ...state,
                alert: action.payload
            }

        default:
            return 'Tipo desconocido';
    }
}

export default loginReducer;