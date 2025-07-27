<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato de Exportación SG-SST</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: white; font-size: 12px;">
    
    <!-- Sección de encabezado -->
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="border: 1px solid #ccc; padding: 10px; width: 100px; text-align: center; background-color: #f5f5f5; vertical-align: center;" colspan="2" align="center">
                <img 
                    src="https://w7.pngwing.com/pngs/653/323/png-transparent-customer-relationship-management-business-customer-service-rent-miscellaneous-angle-text-thumbnail.png" 
                    width="80" 
                    height="80"
                    alt="{{ $cliente->nombre }}"
                />
            </td>
            <td style="border: 1px solid #ccc; padding: 10px; width: 300px; vertical-align: center;" colspan="5" align="center">
                AUTOEVALUACIÓN DE ACUERDO A LOS ESTÁNDARES MÍNIMOS SG-SST EMPRESA:  <b>{{ strtoupper($cliente->nombre) }}</b> <br>
                <span style="font-size: 10px; color: #666;">Fecha de realización: {{ date('d/m/Y') }}</span>
            </td>
            <td style="border: 1px solid #ccc; padding: 10px; width: 200px; vertical-align: center;" colspan="2" align="center">
                <span style="border: 1px solid #ccc; padding: 5px; width: 100%; box-sizing: border-box; margin-bottom: 5px;">
                    Version 1.0
                </span>
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="border: 1px solid #ccc; padding: 10px; width: 100%; text-align: center; background-color: #f5f5f5; vertical-align: top;" colspan="9" align="center">
                TABLA DE VALORES Y CALIFICACIÓN
            </td>
        </tr>
    </table>
    
    <!-- Tabla principal -->
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 80px; font-size: 11px; vertical-align: middle;">Ciclo</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 450px; font-size: 11px; vertical-align: middle;" colspan="2">Estándar</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 400px; font-size: 11px; vertical-align: middle;">Ítem del Estándar</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 60px; font-size: 11px; vertical-align: middle;">Valor</th>
                <th colspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; font-size: 11px;">PUNTAJE POSIBLE</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 400px; font-size: 11px; vertical-align: middle;">Observación</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 80px; font-size: 11px; vertical-align: middle;">Calificación</th>
            </tr>
            <tr>
                <th style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; font-size: 11px; width: 120px;">Cumple</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; font-size: 11px; width: 120px;">Justifica</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr style="background-color: #dce6f1;">
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px;">{{ $item['ciclo'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px; width: 550px;">{{ $item['estandar'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px; width: 400px;">{{ $item['subestandar'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px; width: 550px;">{{ $item['itemdelestandar'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: center; font-size: 11px;">{{ $item['valor'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: center; font-size: 11px;"> {{ $item['cumple'] === null ? '' : ($item['cumple'] ? '✓' : '✗') }} </td> <!-- cumple  -->
                <td style="border: 1px solid #000; padding: 8px; text-align: center; font-size: 11px;"> {{ $item['justifica'] === null ? '' : ($item['justifica'] ? '✓' : '✗') }} </td> <!-- justifica  -->
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px;">{{ $item['observacion'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: center; font-size: 11px;">{{ $item['calificacion'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 80px; font-size: 11px; vertical-align: middle;">Ciclo</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 80px; font-size: 11px; vertical-align: middle;">Calificación Posible</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #e8e8e8; font-weight: bold; text-align: center; width: 80px; font-size: 11px; vertical-align: middle;">Calificación Obtenida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resumen as $item)
            <tr>
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px; width: 120px;">{{ $item['ciclo'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px; width: 160px;">{{ $item['calificacion_posible'] }}</td>
                <td style="border: 1px solid #000; padding: 8px; text-align: left; font-size: 11px; width: 160px;">{{ $item['calificacion_obtenida'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>