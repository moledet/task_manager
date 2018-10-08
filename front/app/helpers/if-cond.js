import { helper } from '@ember/component/helper';

export function ifCond(params) {
  let [v1, operator, v2] = params;

  switch (operator) {
    case '==':
      return (v1 == v2);
    case '===':
      return (v1 === v2);
    case '!=':
      return (v1 != v2);
    case '!==':
      return (v1 !== v2);
    case '<':
      return (v1 < v2);
    case '<=':
      return (v1 <= v2);
    case '>':
      return (v1 > v2);
    case '>=':
      return (v1 >= v2);
    case '&&':
      return (v1 && v2);
    case '||':
      return (v1 || v2);
    default:
      return false;
  }}

export default helper(ifCond);
