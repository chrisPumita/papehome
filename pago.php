<!DOCTYPE html>
<html>
<body>
<body>
<!-- Add step #2 -->
<!-- Step #2 -->
<form id="form-checkout" >
    <input type="text" name="cardNumber" id="form-checkout__cardNumber" />
    <input type="text" name="expirationDate" id="form-checkout__expirationDate" />
    <input type="text" name="cardholderName" id="form-checkout__cardholderName"/>
    <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail"/>
    <input type="text" name="securityCode" id="form-checkout__securityCode" />
    <select name="issuer" id="form-checkout__issuer"></select>
    <select name="identificationType" id="form-checkout__identificationType"></select>
    <input type="text" name="identificationNumber" id="form-checkout__identificationNumber"/>
    <select name="installments" id="form-checkout__installments"></select>
    <button type="submit" id="form-checkout__submit">Pagar</button>
    <progress value="0" class="progress-bar">Cargando...</progress>
</form>

<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
    const mp = new MercadoPago('TEST-7ee75943-ceca-49c3-88aa-06ff207dd291');
    // Add step #3
    // Step #3
    const cardForm = mp.cardForm({
        amount: "100.5",
        autoMount: true,
        form: {
            id: "form-checkout",
            cardholderName: {
                id: "form-checkout__cardholderName",
                placeholder: "Titular de la tarjeta",
            },
            cardholderEmail: {
                id: "form-checkout__cardholderEmail",
                placeholder: "E-mail",
            },
            cardNumber: {
                id: "form-checkout__cardNumber",
                placeholder: "Número de la tarjeta",
            },
            expirationDate: {
                id: "form-checkout__expirationDate",
                placeholder: "Fecha de vencimiento (MM/YYYY)",
            },
            securityCode: {
                id: "form-checkout__securityCode",
                placeholder: "Código de seguridad",
            },
            installments: {
                id: "form-checkout__installments",
                placeholder: "Cuotas",
            },
            identificationType: {
                id: "form-checkout__identificationType",
                placeholder: "Tipo de documento",
            },
            identificationNumber: {
                id: "form-checkout__identificationNumber",
                placeholder: "Número de documento",
            },
            issuer: {
                id: "form-checkout__issuer",
                placeholder: "Banco emisor",
            },
        },
        callbacks: {
            onFormMounted: error => {
                if (error) return console.warn("Form Mounted handling error: ", error);
                console.log("Form mounted");
            },
            onSubmit: event => {
                event.preventDefault();

                const {
                    paymentMethodId: payment_method_id,
                    issuerId: issuer_id,
                    cardholderEmail: email,
                    amount,
                    token,
                    installments,
                    identificationNumber,
                    identificationType,
                } = cardForm.getCardFormData();

                fetch("./process_payment.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        token,
                        issuer_id,
                        payment_method_id,
                        transaction_amount: Number(amount),
                        installments: Number(installments),
                        description: "Descripción del producto",
                        payer: {
                            email,
                            identification: {
                                type: identificationType,
                                number: identificationNumber,
                            },
                        },
                    }),
                });
            },
            onFetching: (resource) => {
                console.log("Fetching resource: ", resource);

                // Animate progress bar
                const progressBar = document.querySelector(".progress-bar");
                progressBar.removeAttribute("value");

                return () => {
                    progressBar.setAttribute("value", "0");
                };
            }
        },
    });
</script>
</body>
</body>
</html>