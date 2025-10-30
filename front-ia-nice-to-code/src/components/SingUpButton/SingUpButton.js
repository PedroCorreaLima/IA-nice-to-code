import "./SingUpButton.css"

function SingUp ({ onClick, children = 'Sing-Up' }) {
    return (
        <button type="button" onClick={onClick} className="sing-up-button">
            {children}
        </button>
    )
}

export default SingUp