import React, { Component } from "react";
import Intro from "../Intro";
import "./App.css";

class App extends Component {
  state = {
    series: []
  };

  ComponentDidMount() {
    const series = ["Vikings", "Game Of Thrones"];

    setTimeout(() => {
      this.setState({ series: series });
    }, 2000);
  }

  render() {
    return (
      <div className="App">
        <header className="App-header">Beta App</header>
        <Intro message="here you can find all of your most loved series" />
        the length of series array -{this.state.series.length}
      </div>
    );
  }
}

export default App;
