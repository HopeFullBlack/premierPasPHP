//gerer la fermeture des notifications
document.addEventListener("DOMContentLoaded", () => {
	(document.querySelectorAll(".notification .delete") || []).forEach(
		($delete) => {
			const $notification = $delete.parentNode;

			$delete.addEventListener("click", () => {
				$notification.parentNode.removeChild($notification);
			});
		}
	);

	//gestion de la fenêtre modal

	// Functions to open and close a modal
	function openModal($el) {
		$el.classList.add("is-active");
	}

	function closeModal($el) {
		$el.classList.remove("is-active");
	}

	function closeAllModals() {
		(document.querySelectorAll(".modal") || []).forEach(($modal) => {
			closeModal($modal);
		});
	}

	// Add a click event on buttons to open a specific modal
	(document.querySelectorAll(".js-modal-trigger") || []).forEach(($trigger) => {
		const modal = $trigger.dataset.target;
		const $target = document.getElementById(modal);

		$trigger.addEventListener("click", (e) => {
			openModal($target);
			//configure le formulaire de suppression a envoyer sur le click de "Oui"
			const deleteForm = e.target.parentElement.childNodes[3]
			document.querySelector('#deleteBtn').addEventListener('click', ()=>{
				deleteForm.submit()
			})
		});
	});

	// Add a click event on various child elements to close the parent modal
	(
		document.querySelectorAll(
			".modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button"
		) || []
	).forEach(($close) => {
		const $target = $close.closest(".modal");

		$close.addEventListener("click", () => {
			closeModal($target);
		});
	});

	// Add a keyboard event to close all modals
	document.addEventListener("keydown", (event) => {
		const e = event || window.event;

		if (e.key === "Escape") {
			// Escape key
			closeAllModals();
		}
	});
});
