@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if ($user->subscribed('main'))
                        @if ($user->subscription('main')->onGracePeriod())
                            <h3>You are still on your grace period</h3>
                            <form action="{{ route('subscriptionResume') }}" method="POST">
                                {{ csrf_field() }}
                                <button>Resume</button>
                            </form>
                        @else
                            <h3>You have already subscribed</h3>
                            <form action="{{ route('subscriptionCancel') }}" method="POST">
                                {{ csrf_field() }}
                                <button>Cancel Subscription</button>
                            </form>
                        @endif
                    @else
                        <form action="{{ route('subscriptionCreate') }}" method="POST" id="payment-form">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <button>Submit Payment</button>
                        </form>
                    @endif
                </div>
            </div>

            <script>
                (function () {
                    // Create a Stripe client.
                    var stripe = Stripe('{{ config('services.stripe.key') }}');

// Create an instance of Elements.
                    var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
                    var style = {
                        base: {
                            color: '#32325d',
                            lineHeight: '18px',
                            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                            fontSmoothing: 'antialiased',
                            fontSize: '16px',
                            '::placeholder': {
                                color: '#aab7c4'
                            }
                        },
                        invalid: {
                            color: '#fa755a',
                            iconColor: '#fa755a'
                        }
                    };

// Create an instance of the card Element.
                    var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
                    card.mount('#card-element');

// Handle real-time validation errors from the card Element.
                    card.addEventListener('change', function (event) {
                        var displayError = document.getElementById('card-errors');
                        if (event.error) {
                            displayError.textContent = event.error.message;
                        } else {
                            displayError.textContent = '';
                        }
                    });

// Handle form submission.
                    var form = document.getElementById('payment-form');
                    form.addEventListener('submit', function (event) {
                        event.preventDefault();

                        stripe.createToken(card).then(function (result) {
                            if (result.error) {
                                // Inform the user if there was an error.
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
                        form.submit();
                    }
                })();
                (function() {
                    'use strict';

                    var elements = stripe.elements({
                        fonts: [
                            {
                                cssSrc: 'https://fonts.googleapis.com/css?family=Source+Code+Pro',
                            },
                        ],
                        // Stripe's examples are localized to specific languages, but if
                        // you wish to have Elements automatically detect your user's locale,
                        // use `locale: 'auto'` instead.
                        locale: window.__exampleLocale
                    });

                    // Floating labels
                    var inputs = document.querySelectorAll('.cell.example.example2 .input');
                    Array.prototype.forEach.call(inputs, function(input) {
                        input.addEventListener('focus', function() {
                            input.classList.add('focused');
                        });
                        input.addEventListener('blur', function() {
                            input.classList.remove('focused');
                        });
                        input.addEventListener('keyup', function() {
                            if (input.value.length === 0) {
                                input.classList.add('empty');
                            } else {
                                input.classList.remove('empty');
                            }
                        });
                    });

                    var elementStyles = {
                        base: {
                            color: '#32325D',
                            fontWeight: 500,
                            fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
                            fontSize: '16px',
                            fontSmoothing: 'antialiased',

                            '::placeholder': {
                                color: '#CFD7DF',
                            },
                            ':-webkit-autofill': {
                                color: '#e39f48',
                            },
                        },
                        invalid: {
                            color: '#E25950',

                            '::placeholder': {
                                color: '#FFCCA5',
                            },
                        },
                    };

                    var elementClasses = {
                        focus: 'focused',
                        empty: 'empty',
                        invalid: 'invalid',
                    };

                    var cardNumber = elements.create('cardNumber', {
                        style: elementStyles,
                        classes: elementClasses,
                    });
                    cardNumber.mount('#example2-card-number');

                    var cardExpiry = elements.create('cardExpiry', {
                        style: elementStyles,
                        classes: elementClasses,
                    });
                    cardExpiry.mount('#example2-card-expiry');

                    var cardCvc = elements.create('cardCvc', {
                        style: elementStyles,
                        classes: elementClasses,
                    });
                    cardCvc.mount('#example2-card-cvc');

                    registerElements([cardNumber, cardExpiry, cardCvc], 'example2');
                })();
            </script>
        </div>
    </div>
    </div>
    </div>
@endsection
