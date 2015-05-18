
var FormPaymentModal = React.createClass({
	render: function() {
		return (
			<div className="FormPaymentModal">FormPaymentModal</div>
		);
	}
});

var NewPaymentButton = React.createClass({
	// Creating a modal event from the global JS script
	modal: function(event){
		var form = <FormPaymentModal />;
		console.log(form.toString());
		// modal(<FormPaymentModal />);
	},
	render: function() {
		return (
			<a className="ui left labeled icon black button no-data-button" onClick={this.modal.bind(this)}>
				  <i className="plus icon"></i>
				  	Create your first payment
			</a>
		);
	}
});

var Form = React.createClass({
	render: function() {
		return (
			<div className="ui form">
				<NewPaymentButton />
			</div>
		);
	}
});

React.render(<Form />,document.getElementById('container'));

