grecaptcha.ready(function () {
	grecaptcha
		.execute("6LeEpZYgAAAAAJ8jyEDeUfh9hPKOZ1np8_jRDAOq", { action: "submit" })
		.then(function (token) {
			// Add your logic to submit to your backend server here.
			document.querySelector("#recaptchaResponse").value = token;
		});
});

//form validation
function validateForm() {
	const nom = document.querySelector("#nom");
	const email = document.querySelector("#email");
	const message = document.querySelector("#message");
	let isOk = true;

	if (nom.value.length > 0) {
		nom.classList.add("is-success");
	} else {
		nom.classList.add("is-danger");
		isOk = false;
	}

	let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

	if (regex.test(email.value)) {
		email.classList.add("is-success");
	} else {
		email.classList.add("is-danger");
		isOk = false;
	}

	if (message.value.length >= 10) {
		message.classList.add("is-success");
	} else {
		message.classList.add("is-danger");
		isOk = false;
	}

	if (!isOk)
		document.querySelector("#resmail").textContent =
			"Au moins un champs n'est pas correctement renseigné";

	return isOk;
}

document.querySelector("#contactForm").onsubmit = validateForm;

//result send mail
const url = new URL(document.location.href);
const res = url.searchParams.get("res");

if (res) {
    const cssClass = (res === "ok") ? 'success' : 'danger';
    const msg = (res === "ok") ? 'Message envoyé avec <strong>succès</strong> !' : "Une <strong>erreur</strong> s'est produite lors de l'envoi du message"
	
	document.querySelector("#resmail").innerHTML = `
    <article class="message is-${cssClass}">
        <div class="message-header">
            <p>${cssClass}</p>
            <button class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body">
            ${msg}
        </div>
    </article>
    `;
}
