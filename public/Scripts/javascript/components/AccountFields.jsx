/**
 * @jsx React.DOM
 */
var React = require('react')

var AccountFields = React.createClass({
  render: function() {
    return (
      <div>
        <h2>Patient Information</h2>
        <ul className="form-fields">
          <li>
            <label>First Name</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.name} />
          </li>
          <li>
            <label>Middle Initial</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.MiddleInitial} />
          </li>
          <li>
            <label>Last Name</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.LastName} />
          </li>
          <li>
            <label>Mailing Address</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.MailingAddress} />
          </li>          
          <li>
            <label>City</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.City} />
          </li>
          <li>
            <label>State</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.State} />
          </li>
          <li>
            <label>Zip</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.Zip} />
          </li>
          <li>
            <label>Phone</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.Phone} />
          </li>          
          <li>
            <label>Email Address</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.EmailAddress} />
          </li>
          <li>
            <label>Date of Birth</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.DateOfBirth} />
          </li>
          <li>
            <label>Social Security Number</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.SocialSecurityNumber} />
          </li>
          
          <li>
            <label>Sex</label>
            <input type="radio" ref="name" value="male" defaultValue={this.props.fieldValues.Sex} >Male
            <input type="radio" ref="name" value="female" defaultValue={this.props.fieldValues.Sex} >Female
          </li>
          
          <li>
            <label>Marital Status</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.MaritalStatus} />
          </li>
          
          <li>
            <label>Reason for Visit</label>
            <input type="text" ref="name" defaultValue={this.props.fieldValues.ReasonForVisit} />
          </li>          
          <li className="form-footer">
            <button className="btn -primary pull-right" onClick={this.nextStep}>Save &amp; Continue</button>
          </li>
        </ul>
      </div>
    )
  },

  nextStep: function(e) {
    e.preventDefault()

    // Get values via this.refs
    var data = {
      name     : this.refs.name.getDOMNode().value,
      password : this.refs.password.getDOMNode().value,
      email    : this.refs.email.getDOMNode().value,
    }

    this.props.saveValues(data)
    this.props.nextStep()
  }
})

module.exports = AccountFields