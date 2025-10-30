import logo from './logo.svg';
import './App.css';
import Banner from './components/Banner/Banner';
import LoginButton from './components/LoginButton/LoginButton';
import SingUp from './components/SingUpButton/SingUpButton';

function App() {
  return (
    <div className="App">

    <Banner />
    <LoginButton /> 
    <SingUp />
      
    </div>
  );
}

export default App;
