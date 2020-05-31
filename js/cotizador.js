$(function() { var e = document.getElementById("nombre"),
        t = document.getElementById("apellido"),
        l = document.getElementById("email"),
        u = document.getElementById("pase_completo"),
        i = document.getElementById("pase_dosdias"),
        c = document.getElementById("pase_dia"),
        n = document.getElementById("calcular"),
        d = document.getElementById("error"),
        m = (document.getElementById("btnRegistro"), document.getElementById("lista-productos")),
        y = document.getElementById("suma-total"),
        v = document.getElementById("etiquetas"),
        p = document.getElementById("camisa_evento"),
        g = document.getElementById("regalo");

    function s() { var e = c.value,
            t = i.value,
            l = u.value,
            n = [];
        0 < e && n.push("viernes"), 0 < t && n.push("viernes", "sabado"), 0 < l && n.push("viernes", "sabado", "domingo"); for (var d = 0; d < n.length; d++) document.getElementById(n[d]).style.display = "block" }

    function a() { "" == this.value ? (d.style.display = "block", d.innerHTML = "Este campo es obligatorio", this.style.border = "1px solid red", d.style.border = "1px solid red") : (d.style.display = "none", this.style.border = "1px solid #cccccc") }
    document.getElementById("calcular") && (n.addEventListener("click", function(e) { if (e.preventDefault(), "" == g.value) alert("Debes elegir un regalo"), g.focus();
        else { var t = c.value,
                l = i.value,
                n = u.value,
                d = p.value,
                s = v.value,
                a = 30 * t + 45 * l + 50 * n + 10 * d * .93 + 2 * s,
                o = [];
            1 <= t && o.push(t + " Pase/s por día"), 1 <= l && o.push(l + " Pase/s por 2 días"), 1 <= n && o.push(n + " Pase/s completos"), 1 <= d && o.push(d + " Camisa/s"), 1 <= s && o.push(s + " Etiqueta/s"), m.style.display = "block", m.innerHTML = ""; for (var r = 0; r < o.length; r++) m.innerHTML += o[r] + "<br/>";
            y.innerHTML = "$ " + a.toFixed(2), document.getElementById("total_pedido").value = a } }), c.addEventListener("blur", s), i.addEventListener("blur", s), u.addEventListener("blur", s), e.addEventListener("blur", a), t.addEventListener("blur", a), l.addEventListener("blur", a), l.addEventListener("blur", function() {-1 < this.value.indexOf("@") ? (d.style.display = "none", this.style.border = "1px solid #cccccc") : (d.style.display = "block", d.innerHTML = "debe tener al menos un @", this.style.border = "1px solid red", d.style.border = "1px solid red") }), 0 < document.getElementsByClassName("editar-registrado").length && (c.value || i.value || u.value) && s()) });