import { EslintStack } from '@premierstacks/eslint-stack';
import globals from 'globals';

// eslint-disable-next-line no-restricted-exports
export default EslintStack.create()
  .base()
  .globals({
    ...globals.node,
    ...globals.es2024,
  })
  .ignores([...EslintStack.Selectors.GlobalIgnore])
  .ignores(['node_modules', 'vendor', '.phpunit.cache', '.phpunit.coverage', '.phpunit.result.cache', '.php-cs-fixer.cache'])
  .recommended()
  .stylistic()
  .sonarjs()
  .build();
