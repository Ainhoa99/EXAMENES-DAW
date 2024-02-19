Number.prototype.esPar = function () {
  return this % 2 === 0;
};

const n = new Number(2);
console.log(n.esPar());
