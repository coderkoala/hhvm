<?hh // partial
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *
 */

function f(): mixed {
  return (array<int> $a) ==> {
    // This statement will not parse in Hack, but we should not raise an error
    // in decl mode.
    break 100;
  };
}
