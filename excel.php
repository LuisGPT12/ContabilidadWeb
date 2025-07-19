<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contabilidad HeartAlert</title>
    <link rel="stylesheet" href="heartalert.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <form id="contabilidadForm">
      <h2>BALANCE GENERAL</h2>
        <h2>Activos Corriente</h2>
        Caja
        <input type="number" name="Caja" value="50.00" required>
        Banco
        <input type="number" name="Banco" value="100.00" required>
        Inventarios
        <input type="number" name="Inventarios" value="70.00" required>

        <h2>Activos No Corriente</h2>
        Equipos de Cómputo
        <input type="number" name="EquiposComputo" value="2430.00" required>
        Activos intangibles (Licencia y prototipo)
        <input type="number" name="Intangibles" value="1630.00" required>

        <h2>Pasivos Corriente</h2>
        Cuentas por Pagar
        <input type="number" name="CuentasPagar" value="125.00" required>

        <h2>Pasivos No Corriente</h2>
        Préstamos
        <input type="number" name="Prestamos" value="400.00" required>

        <h2>Capital/Patrimonio</h2>
        Capital
        <input type="number" name="Capital" value="3755.00" required>
        Aporte UTP (académico e institucional)
        <input type="number" name="AporteUTP" value="0.00" required>
        Desarrollo del equipo
        <input type="number" name="DesarrolloEquipo" value="1200.00" required>
   
        <h2>ESTADO DE RESULTADOS</h2>
        <h2>Ingresos</h2>
        subscripcion anual de la APP
        <input type="number" name="VentaApp" value="1200.00" required>
        subscripcion anual del módulo de la API (incluyendo BD)
        <input type="number" name="VentaAPI" value="300.00" required>

        <h2>Costos</h2>
        Componentes Tecnológicos
        <input type="number" name="ComponentesTec" value="40.00" required>
        Servicios Digitales
        <input type="number" name="ServiciosDigitales" value="45.00" required>
        Tiempos de prueba
        <input type="number" name="TiemposPrueba" value="200.00" required>

        <h2>Gastos</h2>
        Gastos de usabilidad
        <input type="number" name="Usabilidad" value="15.00" required>
        Luz
        <input type="number" name="Luz" value="250.00" required>
        Internet
        <input type="number" name="Internet" value="470.00" required>
        Banner
        <input type="number" name="Banner" value="16.4" required>
        Entrevista Cardiólogo
        <input type="number" name="Cardiologo" value="80.00" required>
         Honorarios profesionales
        <input type="number" name="honorarios" value="1600.00" required>

        <h2>Gastos Extraordinarios</h2>
        Pérdidas por desastre
        <input type="number" name="GastoExtra" value="100.00" required>

        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <div id="resultados"></div>

   <script>
    document.getElementById('contabilidadForm').onsubmit = function(e) {
        e.preventDefault();
        const f = e.target;

        // Activos
        const caja = +f.Caja.value;
        const banco = +f.Banco.value;
        const inventarios = +f.Inventarios.value;
        const equipos = +f.EquiposComputo.value;
        const intangibles = +f.Intangibles.value;
        const activos_corr = caja + banco + inventarios;
        const activos_nocorr = equipos + intangibles;
        const total_activos = activos_corr + activos_nocorr;

        // Pasivos
        const cuentasPagar = +f.CuentasPagar.value;
        const prestamos = +f.Prestamos.value;

        const pasivos_corr = cuentasPagar;
        const pasivos_nocorr = prestamos;
        const total_pasivos = pasivos_corr + pasivos_nocorr;

        // Patrimonio
        const capital = +f.Capital.value;
        const aporteUTP = +f.AporteUTP.value;
        const desarrollo = +f.DesarrolloEquipo.value;

        const total_patrimonio = capital + aporteUTP + desarrollo;
        const total_pasivos_patrimonio = total_pasivos + total_patrimonio;

        // Estado de resultados
        const ingresos = +f.VentaApp.value + +f.VentaAPI.value;
        const costos = +f.ComponentesTec.value + +f.ServiciosDigitales.value + +f.TiemposPrueba.value;
        const gastos = +f.Usabilidad.value + +f.Luz.value + +f.Internet.value + +f.Banner.value + +f.Cardiologo.value + +f.honorarios.value;
        const gastos_extra = +f.GastoExtra.value;

        const utilidad_bruta = ingresos - costos;
        const utilidad_operacion = utilidad_bruta - gastos;
        const utilidad_antes_imp = utilidad_operacion - gastos_extra;
        const impuesto = utilidad_antes_imp * 0.25;
        const utilidad_neta = utilidad_antes_imp - impuesto;
        const utilidad_interno=ingresos-gastos;

        document.getElementById('resultados').innerHTML = `
            <h2>Balance General</h2>
            <h3>Activos</h3>
            <p>Total Activos Corrientes: ${activos_corr}</p>
            <ul>
                <li>Caja: ${caja}</li>
                <li>Banco: ${banco}</li>
                <li>Inventarios: ${inventarios}</li>
            </ul>
            <p>Total Activos No Corrientes: ${activos_nocorr}</p>
            <ul>
                <li>Equipos de Cómputo: ${equipos}</li>
                <li>Activos intangibles: ${intangibles}</li>
            </ul>
            <p><strong>Total de Activos: ${total_activos}</strong></p>

            <h3>Pasivos</h3>
            <p>Total Pasivos Corrientes: ${pasivos_corr}</p>
            <ul><li>Cuentas por Pagar: ${cuentasPagar}</li></ul>
            <p>Total Pasivos No Corrientes: ${pasivos_nocorr}</p>
            <ul><li>Préstamos: ${prestamos}</li></ul>
            <p><strong>Total de Pasivos: ${total_pasivos}</strong></p>

            <h3>Patrimonio</h3>
            <ul>
                <li>Capital: ${capital}</li>
                <li>Aporte UTP: ${aporteUTP}</li>
                <li>Desarrollo del equipo: ${desarrollo}</li>
            </ul>
            <p><strong>Total Patrimonio: ${total_patrimonio}</strong></p>
            <p><strong>Total Pasivos + Patrimonio: ${total_pasivos_patrimonio}</strong></p>

            <h2>Estado de Resultados</h2>
            <p>Total Ingresos: ${ingresos}</p>
            <p>Total Costos: ${costos}</p>
            <p>Total Gastos: ${gastos}</p>
            <p>Gastos Extraordinarios: ${gastos_extra}</p>
            <p>Utilidad Bruta: ${utilidad_bruta}</p>
            <p>Utilidad Operación: ${utilidad_operacion}</p>
            <p>Utilidad antes de Impuestos: ${utilidad_antes_imp}</p>
            <p>Impuesto (25%): ${impuesto.toFixed(2)}</p>
            <p><strong>Utilidad Neta(basado en el basado en una analisis interno): ${utilidad_interno.toFixed(2)}</strong></p>
            <p><strong>Utilidad Neta(informe contable): ${utilidad_neta.toFixed(2)}</strong></p>
        `;
    };
</script>
 <div class="centrar">
   <button class="btn" onclick="location.href='home.php'">Volver</button>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
