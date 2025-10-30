import "./LoginButton.css"

function LoginButton ({ onClick, children = 'Login' }) {
    return (
        <button type="button" onClick={onClick} className="login-button">
            {children}
        </button>
    )
}

export default LoginButton
