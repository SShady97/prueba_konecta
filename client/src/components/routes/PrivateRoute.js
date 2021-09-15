import React, { useContext, useEffect } from 'react'

import { Route, Redirect } from 'react-router-dom';
import loginContext from '../../context/login/loginContext';

const PrivateRoute = ({ component: Component, ...props }) => {
    
    const logContext = useContext(loginContext);
    
    const { auth, loading, getAuthUser } = logContext;

    useEffect(() => {
        getAuthUser();
    }, []);

    return (
        <Route { ...props } render={ props => !auth && !loading ? (
                <Redirect to="/login" />
            ) : (
                <Component { ...props } />
            )}
        />
    );
}

export default PrivateRoute;