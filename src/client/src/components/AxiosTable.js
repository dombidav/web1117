import React from 'react';

import axios from 'axios';

export default class AxiosTable extends React.Component {
    state = {
        campuses: []
    }

    componentDidMount() {
        axios.defaults.headers.get['Access-Control-Allow-Origin'] = '*'
        axios.get(`http://127.0.0.1:8000/campus`)
            .then(res => {
                const campuses = res.data;
                this.setState({ campuses });
            })
    }

    render() {
        return (
            <table>
                { this.state.campuses.map(person => <tr><td>{person.name}</td></tr>)}
            </table>
        )
    }
}
