'use strict';


/*
class Header extends React.Component {
        constructor(props) {
            super(props);
            this.state = {
                favoritecolor: "red"
            };
        }
        componentDidMount() {
            const script = document.createElement("script");
            script.src = "../assets/js/test.js";
            script.async = true;
            document.head.appendChild(script);
        }
        render() {
            return ( < > < />);
            }
        }

        ReactDOM.render( < Header / > , document.head);



function getCss(path) {
    const element = ( < link rel = "stylesheet"
        href = {path} / >
    );
    ReactDOM.render(element, document.getElementById('test'));
}
*/

//getCss2('../assets/css/bootstrap.min.css')

var getCss2 = function(name){ 
    alert('test');
   const e = React.createElement;
    
    var element2 = e(
  'link', { rel: "stylesheet",
        href: name }
);
    
 ReactDOM.render(element2, document.getElementById('test'));
}
