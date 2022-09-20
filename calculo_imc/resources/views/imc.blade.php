<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instruções</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem calculará o seu imc com base no seu peso e altura!
                </p>
                <p>Interpretação de IMC:</p>
                <ul>
                    <li><b>MENOR QUE 18,5	MAGREZA	0
                        ENTRE 18,5 E 24,9	NORMAL	0
                        ENTRE 25,0 E 29,9	SOBREPESO	I
                        ENTRE 30,0 E 39,9	OBESIDADE	II
                        MAIOR QUE 40,0	OBESIDADE GRAVE	III</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do IMC</h2>
            <div class="conteudo-painel">
                <form action="{{url('/gasto')}}" method="get">

                    <label for="peso">Peso</label>
                    <input type="number" class="campoTexto"  name="peso" required/>

                    <label for="altura">Altura</label>
                    <input type="number" class="campoTexto" name="altura" required/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>

    </main>
</body>
</html>