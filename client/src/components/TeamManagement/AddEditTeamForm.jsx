import React, { Component } from 'react';
import {
    Form,
    Input,
    TextArea,
    Dropdown
} from 'semantic-ui-react';

class AddEditTeamForm extends Component {
    constructor(props) {
        super(props);
        this.state = {
            form: this.props.infoTeam === undefined ? {
                name: '',
                pic: '',
                description: ''
            } : this.props.infoTeam
        }
    }

    handleChange(value, key) {
        let { form } = this.state
        form[key] = value
        this.setState({
            form
        });
    }

    render() {
        let { form } = this.state;
        return (
            <Form className='add-form'>
                <Form.Field
                    label="Name"
                    control={Input}
                    placeholder="Paviot"
                    required
                    value={form.name}
                    onChange={(e, { value }) => { this.handleChange(value, 'name') }}
                />
                <Form.Field>
                    <label>PIC</label>
                    <Dropdown
                        label='PIC' placeholder='Select Member'
                        fluid search
                        value={form.name}
                        selection
                        onChange={(e, { value }) => { this.handleChange(value, 'pic') }}
                        value={this.state.form.pic}
                        options={this.props.listMember}
                    />
                </Form.Field>
                <Form.Field>
                    <label>Description</label>
                    <TextArea
                        className='textarea-form'
                        placeholder='We are number 2, no one is number 1'
                        value={form.description}
                        onChange={(e, { value }) => { this.handleChange(value, 'description') }}
                    />
                </Form.Field>
            </Form>
        )
    }
}

export default AddEditTeamForm