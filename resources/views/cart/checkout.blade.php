@extends('layouts.main')
@section('title', 'Checkout Page')
@section('style')
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus{
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection
@section('content')

    <div class="container mb-5">
        <div class="row justify-content-center" height="60px">
            <div class="col-md-6 checkout-paymentBox">
                <p class="mb-4 mt-3 mx-3 text-white">
                    Total Amount is <strong> € {{ $amount }} </strong>
                </p>

                <form action="{{ url('/charge') }}" method="post" id="payment-form">
                    @csrf
                    <div class="mx-3">
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        <label for="card-element">
                        Credit or debit card
                        </label>
                        <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display Element errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <button class="btn btn-dark my-3 ml-3">Submit Payment</button>
                    <p id="loading" style="display:none;"> Payment in Process. Please wait </p>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        window.onload = function () {
            var stripe = Stripe('pk_test_51GrKUBIM6ax7IQRDzEWzIPoDKVFYSZfszkmWujUWtzN3ZABsr21qos1D54c3oca0uTuyiOHaylYh6BFfOkyd44wC006k3eGhcN');
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: '#32325d',
            },
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

           // Create a token or display an error when the form is submitted.
            var form = document.getElementById('payment-form');
                form.addEventListener('submit', function(event) {
                event.preventDefault();

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                var loading = document.getElementById('loading')
                loading.style.display = "block";
                form.submit();
            }
        }
    </script>
@endsection