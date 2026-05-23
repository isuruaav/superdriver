
/* ══════════════════════════════════════════
   1. CONTENT PROTECTION
══════════════════════════════════════════ */
(function () {
  const ALERT_MSG =
    "⚠️ This content is protected.\n\n" +
    "Copying, saving or reproducing content from this site is not permitted.\n\n" +
    "━━━━━━━━━━━━━━━━━━━━━━━━\n" +
    "🏢 ISD TechHub (Pvt) Ltd\n" +
    "📞 Call     : +94 70 322 2210\n" +
    "💬 WhatsApp : +94 71 905 9250\n" +
    "━━━━━━━━━━━━━━━━━━━━━━━━";

  document.addEventListener("contextmenu", function (e) {
    e.preventDefault(); alert(ALERT_MSG);
  });

  document.addEventListener("keydown", function (e) {
    const k = e.key.toLowerCase();
    if (e.key === "F12") { e.preventDefault(); alert(ALERT_MSG); return; }
    if (e.ctrlKey || e.metaKey) {
      if (["u", "s", "c", "a", "p"].includes(k)) { e.preventDefault(); alert(ALERT_MSG); return; }
      if (e.shiftKey && ["i", "j", "c", "k"].includes(k)) { e.preventDefault(); alert(ALERT_MSG); return; }
    }
  });

  document.addEventListener("selectstart", function (e) { e.preventDefault(); });
  document.addEventListener("dragstart",   function (e) { e.preventDefault(); });
  document.addEventListener("copy",  function (e) { e.preventDefault(); alert(ALERT_MSG); });
  document.addEventListener("cut",   function (e) { e.preventDefault(); alert(ALERT_MSG); });

  window.addEventListener("beforeprint", function () { alert(ALERT_MSG); });

  const noSelectStyle = document.createElement("style");
  noSelectStyle.textContent = `
    * { -webkit-user-select:none!important; -moz-user-select:none!important; user-select:none!important; }
    input, textarea { -webkit-user-select:text!important; user-select:text!important; }
  `;
  document.head.appendChild(noSelectStyle);

  const THRESHOLD = 160;
  let devOpen = false;
  setInterval(function () {
    const wDiff = window.outerWidth  - window.innerWidth;
    const hDiff = window.outerHeight - window.innerHeight;
    if ((wDiff > THRESHOLD || hDiff > THRESHOLD) && !devOpen) {
      devOpen = true; alert(ALERT_MSG);
    } else if (wDiff <= THRESHOLD && hDiff <= THRESHOLD) {
      devOpen = false;
    }
  }, 1000);
})();
