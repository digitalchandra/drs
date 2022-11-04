import chalk from "chalk";

console.log(chalk.blueBright("hello Dearwalk"));
console.log(chalk.red("error"));
console.log(chalk.green.bgGray.bold("success"));

console.log(chalk.bgGreen.bold("Dear"), '+', chalk.bgMagenta.bold("Walk"));
console.log(chalk.underline.bold.green("hello world"))