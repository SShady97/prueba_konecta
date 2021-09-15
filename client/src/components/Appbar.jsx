import React, { useState, useContext } from 'react';
import {
    Toolbar,
    Typography,
    Button,
    AppBar,
    Menu,
    MenuItem,
    ListItemIcon,
    ListItemText,
    Tooltip,
    Link
} from '@material-ui/core';
import { useHistory } from "react-router-dom";
import { makeStyles, withStyles } from '@material-ui/core/styles';
import { ExitToApp } from '@material-ui/icons';
import MenuIcon from '@material-ui/icons/Menu';
import loginContext from '../context/login/loginContext';
    

const useStyles = makeStyles((theme) => ({
    root: {
        flexGrow: 1,
    },
    menuButton: {
        marginRight: theme.spacing(2),
    },
    title: {
        flexGrow: 1,
        fontWeight: 'bold',
        fontFamily: 'Arial'
    },
}));


const StyledMenu = withStyles({
    paper: {
        border: '1px solid #d3d4d5',
    },
})((props) => (
    <Menu
        elevation={0}
        getContentAnchorEl={null}
        anchorOrigin={{
            vertical: 'bottom',
            horizontal: 'center',
        }}
        transformOrigin={{
            vertical: 'top',
            horizontal: 'center',
        }}
        {...props}
    />
));

const StyledMenuItem = withStyles((theme) => ({
    root: {
        '&:focus': {
            backgroundColor: 'rgba(85,115,95,1)',
            '& .MuiListItemIcon-root, & .MuiListItemText-primary': {
                color: theme.palette.common.white,
            },
        },
    },
}))(MenuItem);

const Appbar = () => {

    const logContext = useContext(loginContext);
    const  { current_user, logout } = logContext;

    const classes = useStyles();
    let history = useHistory();

    const [anchorEl, setAnchorEl] = useState(null);

    const handleClick = (event) => {
        setAnchorEl(event.currentTarget);
    };

    const handleOption = (option) => {
        history.push(option);
    }

    const handleClose = () => {
        setAnchorEl(null);
    };

    const handleLogout = () => {
        logout();
    }
    return (

        <AppBar position="static" style={{ background: 'linear-gradient(90deg, rgba(0,0,0,1) 35%, rgba(85,115,95,1) 100%)' }}>
            <Toolbar>
                {/* <IconButton onClick={() => handleOption("/")}>
                    <Avatar src="/Logo_small.png" />
                </IconButton> */}
                <Typography variant="h5" className={classes.title} onClick={() => handleOption("/")}>
                    <Link href="" onClick={() => handleOption("/")} color="inherit" underline="none">
                        MY APP
                    </Link>
                </Typography>
                <Tooltip title="Usuario actual">
                    <Button color="inherit">{current_user}</Button>
                </Tooltip>
                <Tooltip title="Menú">
                    <Button aria-controls="customized-menu" aria-haspopup="true" className={classes.menuButton} color="inherit" aria-label="menu" onClick={handleClick}>
                        <MenuIcon />
                    </Button>
                </Tooltip>
                <StyledMenu
                    id="customized-menu"
                    anchorEl={anchorEl}
                    keepMounted
                    open={Boolean(anchorEl)}
                    onClose={handleClose}
                >
                    <StyledMenuItem onClick={handleLogout}>
                        <ListItemIcon>
                            <ExitToApp fontSize="large" />
                        </ListItemIcon>
                        <ListItemText primary="Salir" />
                    </StyledMenuItem>
                </StyledMenu>
            </Toolbar>
        </AppBar>
    );
}

export default Appbar;