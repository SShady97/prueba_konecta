import React, { Fragment, useEffect, useContext } from 'react';

import Appbar from '../Appbar';
import loginContext from '../../context/login/loginContext';

const Home = () => {
    
    const logContext = useContext(loginContext);
    
    const  { getAuthUser } = logContext;

    useEffect(() => {
        getAuthUser();
    }, []);

    return (
        <Fragment>
            <Appbar />
            <h1>Desde el Home</h1>
        </Fragment>
    );
}

export default Home;