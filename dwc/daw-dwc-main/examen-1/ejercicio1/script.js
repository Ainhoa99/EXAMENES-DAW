'use strict';

class Cuenta {
  // constructor, titular obligatorio y cantidad opcional, con un valor por defecto de 0.0
  constructor(titular, cantidad = 0.0) {
    this._titular = titular;
    this._cantidad = cantidad;
  }

  get titular() {
    return this._titular;
  }

  get cantidad() {
    return this._cantidad;
  }

  set titular(titular) {
    this._titular = titular;
  }

  // no hay setter para cantidad ya que solo se va a modificar mediante ingresar() y retirar()

  // muestra los datos de la cuenta mediante consola
  mostrar = () => console.log(`Titular: ${this.titular}, Cantidad: ${this.cantidad}`);

  // agrega una cantidad a la cuenta, si el ingreso no es un número o es negativo no hace nada
  ingresar = (cantidad) => {
    if (typeof cantidad !== 'number' || cantidad <= 0) return;
    this._cantidad += cantidad;
  };

  // retira una cantidad de la cuenta, si el retiro no es un número, es menor que 0
  // o causa que la cantidad quede en negativo no hace nada
  retirar = (cantidad) => {
    if (typeof cantidad !== 'number' || cantidad <= 0) return;

    const resultado = this._cantidad - cantidad;
    if (resultado < 0) return;

    this._cantidad = resultado;
  };
}

console.log('crear');
const cuentas = [new Cuenta('Cuenta1', 10.1), new Cuenta('Cuenta2', 20.2)];
cuentas.forEach((cuenta) => cuenta.mostrar());

console.log('ingresos y retiradas Cuenta1');
cuentas[0].ingresar(1);
cuentas[0].mostrar(); // cantidad = 11.1
cuentas[0].retirar(1.1);
cuentas[0].mostrar(); // cantidad = 10

console.log('ingresos y retiradas Cuenta2');
cuentas[1].ingresar(2);
cuentas[1].mostrar(); // cantidad = 22.2
cuentas[1].retirar(2.2);
cuentas[1].mostrar(); // cantidad = 20

console.log('ingresos y retiradas incorrectos');
cuentas[0].ingresar('1');
cuentas[0].mostrar(); // no hay cambios

cuentas[1].retirar(1000);
cuentas[1].mostrar(); // no hay cambios
