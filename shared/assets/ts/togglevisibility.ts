function toggleVisibility(hideEl: string, showEl: string) {
  const willBeHidden = document.querySelector(hideEl);
  const willBeShown = document.querySelector(showEl);

  willBeHidden!.classList.remove("visibility-visible");
  willBeHidden!.classList.add("visibility-hidden");

  willBeShown!.classList.remove("visibility-hidden");
  willBeShown!.classList.add("visibility-visible");

}