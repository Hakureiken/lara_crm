import ReactDOM from 'react-dom';
import React, { useState, useEffect } from "react";

function Test_form() {
    return (
        <div>
            <input type="text"/>
            <input type="text"/>
            <input type="text"/> 
        </div>
    );
}

// ReactDOM.render(<Test_form />, document.getElementById('test_form'))

// une structure possible à tester
const element = {
    type: 'h1',
    props: {
        className: 'greeting',
        children: 'Bonjour, monde !'
    }
};

const element1 = React.createElement(
    'h1',
    {className: 'greeting'},
    'Bonjour, monde !'
  );

// ReactDOM.render(element1, document.getElementById('test_form'))
