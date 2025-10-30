function LoginButton ({ onClick, children = 'Login' }) {
    return (
        <button type="button" onClick={onClick} className="banner__login-button">
            {children}
        </button>
    )
}

export default LoginButton
