import ReactDOM from 'react-dom';
import React, { useState, useEffect } from "react";

const App = () => {
    const [name, setName] = useState("");
    const [time, setTime] = useState(new Date().toLocaleTimeString());
    const [random, setRandom] = useState(Math.round(Math.random() * 10));
  
    useEffect(() => {

        const interval = setInterval(() => {
            setTime(new Date().toLocaleTimeString());
            setRandom(Math.round(Math.random() * 10));
            
        }, 10000);

        const url = "http://127.0.0.1:8000/api/rooms"; // https://api.adviceslip.com/advice

        const fetchData = async () => {
            try {
                const response = await fetch(url);
                const data = await response.json();
                console.log(data);
                setName(data[random].name);
            } catch (error) {
                console.log("error", error);
            }
        };

        fetchData();
        return () => clearInterval(interval);

    }, []);

    return (
        <div>
            <p>{name}</p>
            <p>Nom généré à : {time}</p>
        </div>
    );

};


const rootElement = document.getElementById("root");

ReactDOM.render(<React.StrictMode><App /></React.StrictMode>,rootElement);

// autre manière de faire sans fetch

// function tick() {
//     const element = (
//         <div>
//             <h1>Bonjour, monde !</h1>
//             <h2>Il est {new Date().toLocaleTimeString()}.</h2>
//         </div>
//     );
//     // highlight-next-line
//     ReactDOM.render(element, document.getElementById('root2'));
// }
  
//   setInterval(tick, 1000);

// setInterval(App, 2000);

export default App;
