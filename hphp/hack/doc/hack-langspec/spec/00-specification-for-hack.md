<!-- This file is autogenerated, do not edit it manually -->
<!-- Run tools/toc.php instead -->

<style type = "text/css">
  header {
    border-color: red;
    border-width: .25em;
    border-style: solid;
    padding: .25em;
  }
</style>
<header>
NOTICE: This spec is currently very out of date and does not reflect the current version of Hack.
</header>

# Specification for Hack
Facebook has dedicated all copyright to this specification to the public
domain worldwide under the CC0 Public Domain Dedication located at
<http://creativecommons.org/publicdomain/zero/1.0/>. This specification
is distributed without any warranty.

(Initially written by Facebook, Inc., February 2015)

**Table of Contents**
- [Introduction](01-introduction.md#introduction)
- [Conformance](02-conformance.md#conformance)
- [Terms and Definitions](03-terms-and-definitions.md#terms-and-definitions)
- [Basic Concepts](04-basic-concepts.md#basic-concepts)
  - [Program Structure](04-basic-concepts.md#program-structure)
  - [Program Start-Up](04-basic-concepts.md#program-start-up)
  - [Program Termination](04-basic-concepts.md#program-termination)
  - [The Memory Model](04-basic-concepts.md#the-memory-model)
    - [General](04-basic-concepts.md#general)
    - [Reclamation and Automatic Memory Management](04-basic-concepts.md#reclamation-and-automatic-memory-management)
    - [Assignment](04-basic-concepts.md#assignment)
      - [General](04-basic-concepts.md#general-1)
      - [Value Assignment of Scalar Types to a Local Variable](04-basic-concepts.md#value-assignment-of-scalar-types-to-a-local-variable)
      - [Value Assignment of Object and Resource Types to a Local Variable](04-basic-concepts.md#value-assignment-of-object-and-resource-types-to-a-local-variable)
      - [ByRef Assignment for Scalar Types with Local Variables](04-basic-concepts.md#byref-assignment-for-scalar-types-with-local-variables)
      - [Byref Assignment of Non-Scalar Types with Local Variables](04-basic-concepts.md#byref-assignment-of-non-scalar-types-with-local-variables)
      - [Value Assignment of Array Types to Local Variables](04-basic-concepts.md#value-assignment-of-array-types-to-local-variables)
      - [Deferred Array Copying](04-basic-concepts.md#deferred-array-copying)
      - [General Value Assignment](04-basic-concepts.md#general-value-assignment)
      - [General ByRef Assignment](04-basic-concepts.md#general-byref-assignment)
    - [Argument Passing](04-basic-concepts.md#argument-passing)
    - [Value Returning](04-basic-concepts.md#value-returning)
    - [Cloning objects](04-basic-concepts.md#cloning-objects)
  - [Scope](04-basic-concepts.md#scope)
  - [Storage Duration](04-basic-concepts.md#storage-duration)
- [Types](05-types.md#types)
  - [General](05-types.md#general)
  - [The Boolean Type](05-types.md#the-boolean-type)
  - [The Integer Type](05-types.md#the-integer-type)
  - [The Floating-Point Type](05-types.md#the-floating-point-type)
  - [The Numeric Type](05-types.md#the-numeric-type)
  - [The String Type](05-types.md#the-string-type)
  - [The Array Key Type](05-types.md#the-array-key-type)
  - [The Null Type](05-types.md#the-null-type)
  - [Enumerated Types](05-types.md#enumerated-types)
  - [The Void Type](05-types.md#the-void-type)
  - [Array Types](05-types.md#array-types)
  - [Class Types](05-types.md#class-types)
  - [Interface Types](05-types.md#interface-types)
  - [Trait Types](05-types.md#trait-types)
  - [The `this` Type](05-types.md#the-this-type)
  - [Tuple Types](05-types.md#tuple-types)
  - [Shape Types](05-types.md#shape-types)
  - [Closure Types](05-types.md#closure-types)
  - [Resource Types](05-types.md#resource-types)
  - [Nullable Types](05-types.md#nullable-types)
  - [Generic Types](05-types.md#generic-types)
  - [The Classname Type](05-types.md#the-classname-type)
  - [Type Aliases](05-types.md#type-aliases)
  - [Supertypes and Subtypes](05-types.md#supertypes-and-subtypes)
  - [Type Side Effects](05-types.md#type-side-effects)
  - [Type Inferencing](05-types.md#type-inferencing)
- [Constants](06-constants.md#constants)
  - [General](06-constants.md#general)
  - [Context-Dependent Constants](06-constants.md#context-dependent-constants)
  - [Core Predefined Constants](06-constants.md#core-predefined-constants)
  - [User-Defined Constants](06-constants.md#user-defined-constants)
- [Variables](07-variables.md#variables)
  - [General](07-variables.md#general)
  - [Kinds of Variables](07-variables.md#kinds-of-variables)
    - [Local Variables](07-variables.md#local-variables)
    - [Array Elements](07-variables.md#array-elements)
    - [Function Statics](07-variables.md#function-statics)
    - [Instance Properties](07-variables.md#instance-properties)
    - [Static Properties](07-variables.md#static-properties)
    - [Class and Interface Constants](07-variables.md#class-and-interface-constants)
- [Conversions](08-conversions.md#conversions)
  - [General](08-conversions.md#general)
  - [Converting to Boolean Type](08-conversions.md#converting-to-boolean-type)
  - [Converting to Integer Type](08-conversions.md#converting-to-integer-type)
  - [Converting to Floating-Point Type](08-conversions.md#converting-to-floating-point-type)
  - [Converting to Number Type](08-conversions.md#converting-to-number-type)
  - [Converting to String Type](08-conversions.md#converting-to-string-type)
  - [Converting to Array Key Type](08-conversions.md#converting-to-array-key-type)
  - [Converting to Array Type](08-conversions.md#converting-to-array-type)
  - [Converting to Object Type](08-conversions.md#converting-to-object-type)
  - [Converting to Interface Type](08-conversions.md#converting-to-interface-type)
  - [Converting to Resource Type](08-conversions.md#converting-to-resource-type)
  - [Converting to Mixed Type](08-conversions.md#converting-to-mixed-type)
- [Lexical Structure](09-lexical-structure.md#lexical-structure)
  - [Scripts](09-lexical-structure.md#scripts)
  - [Grammars](09-lexical-structure.md#grammars)
  - [Grammar ambiguities](09-lexical-structure.md#grammar-ambiguities)
  - [Lexical Analysis](09-lexical-structure.md#lexical-analysis)
    - [General](09-lexical-structure.md#general)
    - [Comments](09-lexical-structure.md#comments)
    - [White Space](09-lexical-structure.md#white-space)
    - [Tokens](09-lexical-structure.md#tokens)
      - [General](09-lexical-structure.md#general-1)
      - [Names](09-lexical-structure.md#names)
      - [Keywords](09-lexical-structure.md#keywords)
      - [Literals](09-lexical-structure.md#literals)
        - [General](09-lexical-structure.md#general-2)
        - [Boolean Literals](09-lexical-structure.md#boolean-literals)
        - [Integer Literals](09-lexical-structure.md#integer-literals)
        - [Floating-Point Literals](09-lexical-structure.md#floating-point-literals)
        - [String Literals](09-lexical-structure.md#string-literals)
          - [Single-Quoted String Literals](09-lexical-structure.md#single-quoted-string-literals)
          - [Double-Quoted String Literals](09-lexical-structure.md#double-quoted-string-literals)
          - [Heredoc String Literals](09-lexical-structure.md#heredoc-string-literals)
          - [Nowdoc String Literals](09-lexical-structure.md#nowdoc-string-literals)
        - [The Null Literal](09-lexical-structure.md#the-null-literal)
      - [Operators and Punctuators](09-lexical-structure.md#operators-and-punctuators)
- [Expressions](10-expressions.md#expressions)
  - [General](10-expressions.md#general)
  - [Restrictions on Arithmetic Operations](10-expressions.md#restrictions-on-arithmetic-operations)
  - [Operations on Operands Having One or More Subtypes](10-expressions.md#operations-on-operands-having-one-or-more-subtypes)
  - [Primary Expressions](10-expressions.md#primary-expressions)
    - [General](10-expressions.md#general-1)
    - [Intrinsics](10-expressions.md#intrinsics)
      - [General](10-expressions.md#general-2)
      - [array](10-expressions.md#array)
      - [echo](10-expressions.md#echo)
      - [exit](10-expressions.md#exit)
      - [invariant](10-expressions.md#invariant)
      - [list](10-expressions.md#list)
    - [Collection Literals](10-expressions.md#collection-literals)
    - [Tuple Literals](10-expressions.md#tuple-literals)
    - [Shape Literals](10-expressions.md#shape-literals)
    - [Anonymous Function-Creation](10-expressions.md#anonymous-function-creation)
    - [Async Blocks](10-expressions.md#async-blocks)
  - [Postfix Operators](10-expressions.md#postfix-operators)
    - [General](10-expressions.md#general-3)
    - [The `clone` Operator](10-expressions.md#the-clone-operator)
    - [The `new` Operator](10-expressions.md#the-new-operator)
    - [Array Creation Operator](10-expressions.md#array-creation-operator)
    - [Subscript Operator](10-expressions.md#subscript-operator)
    - [Function Call Operator](10-expressions.md#function-call-operator)
    - [Member-Selection Operator](10-expressions.md#member-selection-operator)
    - [Null-Safe Member-Selection Operator](10-expressions.md#null-safe-member-selection-operator)
    - [Postfix Increment and Decrement Operators](10-expressions.md#postfix-increment-and-decrement-operators)
    - [Scope-Resolution Operator](10-expressions.md#scope-resolution-operator)
    - [Exponentiation Operator](10-expressions.md#exponentiation-operator)
  - [Unary Operators](10-expressions.md#unary-operators)
    - [General](10-expressions.md#general-4)
    - [Prefix Increment and Decrement Operators](10-expressions.md#prefix-increment-and-decrement-operators)
    - [Unary Arithmetic Operators](10-expressions.md#unary-arithmetic-operators)
    - [Error Control Operator](10-expressions.md#error-control-operator)
    - [Cast Operator](10-expressions.md#cast-operator)
    - [Await Operator](10-expressions.md#await-operator)
  - [`instanceof` Operator](10-expressions.md#instanceof-operator)
  - [Multiplicative Operators](10-expressions.md#multiplicative-operators)
  - [Additive Operators](10-expressions.md#additive-operators)
  - [Bitwise Shift Operators](10-expressions.md#bitwise-shift-operators)
  - [Relational Operators](10-expressions.md#relational-operators)
  - [Equality Operators](10-expressions.md#equality-operators)
- [# Bitwise AND Operator](10-expressions.md#-bitwise-and-operator)
  - [Bitwise Exclusive OR Operator](10-expressions.md#bitwise-exclusive-or-operator)
  - [Bitwise Inclusive OR Operator](10-expressions.md#bitwise-inclusive-or-operator)
  - [Logical AND Operator](10-expressions.md#logical-and-operator)
  - [Logical Inclusive OR Operator](10-expressions.md#logical-inclusive-or-operator)
  - [Conditional Operator](10-expressions.md#conditional-operator)
  - [Coalesce Operator](10-expressions.md#coalesce-operator)
  - [Pipe Operator](10-expressions.md#pipe-operator)
  - [Lambda Expressions](10-expressions.md#lambda-expressions)
  - [Assignment Operators](10-expressions.md#assignment-operators)
    - [General](10-expressions.md#general-5)
    - [Simple Assignment](10-expressions.md#simple-assignment)
    - [Compound Assignment](10-expressions.md#compound-assignment)
  - [`yield` Operator](10-expressions.md#yield-operator)
  - [Constant Expressions](10-expressions.md#constant-expressions)
- [Statements](11-statements.md#statements)
  - [General](11-statements.md#general)
  - [Compound Statements](11-statements.md#compound-statements)
  - [Labeled Statements](11-statements.md#labeled-statements)
  - [Expression Statements](11-statements.md#expression-statements)
  - [Selection Statements](11-statements.md#selection-statements)
    - [General](11-statements.md#general-1)
    - [The `if` Statement](11-statements.md#the-if-statement)
    - [The `switch` Statement](11-statements.md#the-switch-statement)
  - [Iteration Statements](11-statements.md#iteration-statements)
    - [General](11-statements.md#general-2)
    - [The `while` Statement](11-statements.md#the-while-statement)
    - [The `do` Statement](11-statements.md#the-do-statement)
    - [The `for` Statement](11-statements.md#the-for-statement)
    - [The `foreach` Statement](11-statements.md#the-foreach-statement)
  - [Jump Statements](11-statements.md#jump-statements)
    - [General](11-statements.md#general-3)
    - [The `continue` Statement](11-statements.md#the-continue-statement)
    - [The `break` Statement](11-statements.md#the-break-statement)
    - [The `return` Statement](11-statements.md#the-return-statement)
    - [The `throw` Statement](11-statements.md#the-throw-statement)
  - [The `try` Statement](11-statements.md#the-try-statement)
- [Script Inclusion Operators](12-script-inclusion.md#script-inclusion-operators)
  - [General](12-script-inclusion.md#general)
  - [The `require` Directive](12-script-inclusion.md#the-require-directive)
  - [The `require_once` Directive](12-script-inclusion.md#the-require_once-directive)
- [Enums](13-enums.md#enums)
  - [General](13-enums.md#general)
  - [Enum Declarations](13-enums.md#enum-declarations)
  - [The Predefined Enumerated Type Methods](13-enums.md#the-predefined-enumerated-type-methods)
- [Generic Types, Methods, and Functions](14-generic-types-methods-and-functions.md#generic-types-methods-and-functions)
  - [General](14-generic-types-methods-and-functions.md#general)
  - [Type Parameters](14-generic-types-methods-and-functions.md#type-parameters)
  - [Type Constraints](14-generic-types-methods-and-functions.md#type-constraints)
  - [Type Arguments](14-generic-types-methods-and-functions.md#type-arguments)
  - [Open and Closed Generic Types](14-generic-types-methods-and-functions.md#open-and-closed-generic-types)
  - [Type Inferencing Revisited](14-generic-types-methods-and-functions.md#type-inferencing-revisited)
- [Functions](15-functions.md#functions)
  - [General](15-functions.md#general)
  - [Function Calls](15-functions.md#function-calls)
  - [Function Definitions](15-functions.md#function-definitions)
  - [Anonymous Functions](15-functions.md#anonymous-functions)
  - [Asynchronous Functions](15-functions.md#asynchronous-functions)
- [Classes](16-classes.md#classes)
  - [General](16-classes.md#general)
  - [Class Declarations](16-classes.md#class-declarations)
  - [Class Members](16-classes.md#class-members)
  - [Dynamic Methods](16-classes.md#dynamic-methods)
  - [Constants](16-classes.md#constants)
  - [Properties](16-classes.md#properties)
  - [Methods](16-classes.md#methods)
  - [Constructors](16-classes.md#constructors)
  - [Destructors](16-classes.md#destructors)
  - [Type Constants](16-classes.md#type-constants)
  - [Methods with Special Semantics](16-classes.md#methods-with-special-semantics)
    - [General](16-classes.md#general-1)
    - [Method `__call`](16-classes.md#method-__call)
    - [Method `__callStatic`](16-classes.md#method-__callstatic)
    - [Method `__clone`](16-classes.md#method-__clone)
    - [Method `__sleep`](16-classes.md#method-__sleep)
    - [Method `__toString`](16-classes.md#method-__tostring)
    - [Method `__wakeup`](16-classes.md#method-__wakeup)
  - [Serialization](16-classes.md#serialization)
  - [Predefined Classes](16-classes.md#predefined-classes)
    - [Class `AsyncGenerator`](16-classes.md#class-asyncgenerator)
    - [Class `Generator`](16-classes.md#class-generator)
    - [Class `__PHP_Incomplete_Class`](16-classes.md#class-__php_incomplete_class)
    - [Class `Shapes`](16-classes.md#class-shapes)
    - [Class `stdClass`](16-classes.md#class-stdclass)
- [Interfaces](17-interfaces.md#interfaces)
  - [General](17-interfaces.md#general)
  - [Interface Declarations](17-interfaces.md#interface-declarations)
  - [Interface Members](17-interfaces.md#interface-members)
  - [Constants](17-interfaces.md#constants)
  - [Methods](17-interfaces.md#methods)
  - [Predefined Interfaces](17-interfaces.md#predefined-interfaces)
    - [Interface `ArrayAccess`](17-interfaces.md#interface-arrayaccess)
    - [Interface `AsyncIterator`](17-interfaces.md#interface-asynciterator)
    - [Interface `AsyncKeyedIterator`](17-interfaces.md#interface-asynckeyediterator)
    - [Interface `Awaitable`](17-interfaces.md#interface-awaitable)
    - [Interface `Container`](17-interfaces.md#interface-container)
    - [Interface `IMemoizeParam`](17-interfaces.md#interface-imemoizeparam)
    - [Interface `Iterator`](17-interfaces.md#interface-iterator)
    - [Interface `IteratorAggregate`](17-interfaces.md#interface-iteratoraggregate)
    - [Interface `KeyedContainer`](17-interfaces.md#interface-keyedcontainer)
    - [Interface `KeyedTraversable`](17-interfaces.md#interface-keyedtraversable)
    - [Interface  `Serializable`](17-interfaces.md#interface--serializable)
    - [Interface `Stringish`](17-interfaces.md#interface-stringish)
    - [Interface `Traversable`](17-interfaces.md#interface-traversable)
- [Traits](18-traits.md#traits)
  - [General](18-traits.md#general)
  - [Trait Declarations](18-traits.md#trait-declarations)
  - [Trait Members](18-traits.md#trait-members)
- [Exception Handling](19-exception-handling.md#exception-handling)
  - [General](19-exception-handling.md#general)
  - [Class `Exception`](19-exception-handling.md#class-exception)
  - [Tracing Exceptions](19-exception-handling.md#tracing-exceptions)
  - [User-Defined Exception Classes](19-exception-handling.md#user-defined-exception-classes)
- [Namespaces](20-namespaces.md#namespaces)
  - [General](20-namespaces.md#general)
  - [Name Lookup](20-namespaces.md#name-lookup)
  - [Defining Namespaces](20-namespaces.md#defining-namespaces)
  - [Namespace Use Declarations**](20-namespaces.md#namespace-use-declarations)
- [Attributes](21-attributes.md#attributes)
  - [General](21-attributes.md#general)
  - [Attribute Specification](21-attributes.md#attribute-specification)
  - [Predefined Attributes](21-attributes.md#predefined-attributes)
    - [General](21-attributes.md#general-1)
    - [Attribute `__ConsistentConstruct`](21-attributes.md#attribute-__consistentconstruct)
    - [Attribute `__Memoize`](21-attributes.md#attribute-__memoize)
    - [Attribute `__Override`](21-attributes.md#attribute-__override)
- [Grammar](22-grammar.md#grammar)
  - [General](22-grammar.md#general)
  - [Lexical Grammar](22-grammar.md#lexical-grammar)
    - [General](22-grammar.md#general-1)
    - [Comments](22-grammar.md#comments)
    - [White Space](22-grammar.md#white-space)
    - [Tokens](22-grammar.md#tokens)
      - [General](22-grammar.md#general-2)
      - [Names](22-grammar.md#names)
    - [Keywords](22-grammar.md#keywords)
    - [Literals](22-grammar.md#literals)
      - [General](22-grammar.md#general-3)
      - [Boolean Literals](22-grammar.md#boolean-literals)
      - [Integer Literals](22-grammar.md#integer-literals)
      - [Floating-Point Literals](22-grammar.md#floating-point-literals)
      - [String Literals](22-grammar.md#string-literals)
      - [The Null Literal](22-grammar.md#the-null-literal)
    - [Operators and Punctuators](22-grammar.md#operators-and-punctuators)
  - [Syntactic Grammar](22-grammar.md#syntactic-grammar)
    - [Program Structure](22-grammar.md#program-structure)
    - [Types](22-grammar.md#types)
      - [General](22-grammar.md#general-4)
      - [Array Types](22-grammar.md#array-types)
      - [Tuple Types](22-grammar.md#tuple-types)
      - [Shape Types](22-grammar.md#shape-types)
      - [Closure Types](22-grammar.md#closure-types)
      - [Nullable Types](22-grammar.md#nullable-types)
      - [The Classname Type](22-grammar.md#the-classname-type)
      - [Type Aliases](22-grammar.md#type-aliases)
    - [Variables](22-grammar.md#variables)
    - [Expressions](22-grammar.md#expressions)
      - [Primary Expressions](22-grammar.md#primary-expressions)
      - [Postfix Operators](22-grammar.md#postfix-operators)
      - [Unary Operators](22-grammar.md#unary-operators)
      - [instanceof Operator](22-grammar.md#instanceof-operator)
      - [Multiplicative Operators](22-grammar.md#multiplicative-operators)
      - [Additive Operators](22-grammar.md#additive-operators)
      - [Bitwise Shift Operators](22-grammar.md#bitwise-shift-operators)
      - [Relational Operators](22-grammar.md#relational-operators)
      - [Equality Operators](22-grammar.md#equality-operators)
      - [Bitwise Logical Operators](22-grammar.md#bitwise-logical-operators)
      - [Logical Operators](22-grammar.md#logical-operators)
      - [Conditional Operator](22-grammar.md#conditional-operator)
      - [Pipe Operator](22-grammar.md#pipe-operator)
      - [Lambda Expressions](22-grammar.md#lambda-expressions)
      - [Assignment Operators](22-grammar.md#assignment-operators)
      - [yield Operator](22-grammar.md#yield-operator)
      - [Constant Expressions](22-grammar.md#constant-expressions)
    - [Statements](22-grammar.md#statements)
      - [General](22-grammar.md#general-5)
      - [Compound Statements](22-grammar.md#compound-statements)
      - [Labeled Statements](22-grammar.md#labeled-statements)
      - [Expression Statements](22-grammar.md#expression-statements)
      - [Iteration Statements](22-grammar.md#iteration-statements)
      - [Jump Statements](22-grammar.md#jump-statements)
      - [The try Statement](22-grammar.md#the-try-statement)
    - [Script Inclusion](22-grammar.md#script-inclusion)
    - [Enums](22-grammar.md#enums)
    - [Generic Types, Methods and Functions](22-grammar.md#generic-types-methods-and-functions)
    - [Functions](22-grammar.md#functions)
    - [Classes](22-grammar.md#classes)
    - [Interfaces](22-grammar.md#interfaces)
    - [Traits](22-grammar.md#traits)
    - [Namespaces](22-grammar.md#namespaces)
    - [Attributes](22-grammar.md#attributes)
- [Differences from PHP](23-differences-from-php.md#differences-from-php)
  - [General](23-differences-from-php.md#general)
  - [Program Start-Up](23-differences-from-php.md#program-start-up)
  - [Constants](23-differences-from-php.md#constants)
  - [Variables](23-differences-from-php.md#variables)
  - [Conversions](23-differences-from-php.md#conversions)
  - [Lexical Structure](23-differences-from-php.md#lexical-structure)
    - [Comments](23-differences-from-php.md#comments)
    - [Names](23-differences-from-php.md#names)
    - [Keywords](23-differences-from-php.md#keywords)
  - [Expressions](23-differences-from-php.md#expressions)
    - [Primary Expressions](23-differences-from-php.md#primary-expressions)
      - [General](23-differences-from-php.md#general-1)
      - [Intrinsics](23-differences-from-php.md#intrinsics)
      - [Anonymous Function-Creation](23-differences-from-php.md#anonymous-function-creation)
    - [Postfix Operators](23-differences-from-php.md#postfix-operators)
      - [The `new` Operator](23-differences-from-php.md#the-new-operator)
      - [Array Creation Operator](23-differences-from-php.md#array-creation-operator)
      - [Function call operator](23-differences-from-php.md#function-call-operator)
      - [Member-Selection Operator](23-differences-from-php.md#member-selection-operator)
      - [Postfix Increment and Decrement Operators](23-differences-from-php.md#postfix-increment-and-decrement-operators)
      - [Exponentiation Operator](23-differences-from-php.md#exponentiation-operator)
    - [Unary Operators](23-differences-from-php.md#unary-operators)
      - [Prefix Increment and Decrement Operators](23-differences-from-php.md#prefix-increment-and-decrement-operators)
      - [Unary Arithmetic Operators](23-differences-from-php.md#unary-arithmetic-operators)
      - [Shell Command Operator](23-differences-from-php.md#shell-command-operator)
      - [Cast Operator](23-differences-from-php.md#cast-operator)
      - [Variable-Name Creation Operator](23-differences-from-php.md#variable-name-creation-operator)
    - [`instanceof` Operator](23-differences-from-php.md#instanceof-operator)
    - [Multiplicative Operators](23-differences-from-php.md#multiplicative-operators)
    - [Bitwise Shift Operators](23-differences-from-php.md#bitwise-shift-operators)
    - [Bitwise `AND` Operator](23-differences-from-php.md#bitwise-and-operator)
    - [Bitwise Exclusive `OR` Operator](23-differences-from-php.md#bitwise-exclusive-or-operator)
    - [Bitwise Inclusive `OR` Operator](23-differences-from-php.md#bitwise-inclusive-or-operator)
    - [Assignment Operators](23-differences-from-php.md#assignment-operators)
      - [byRef Assignment](23-differences-from-php.md#byref-assignment)
    - [Logical `AND`, `OR`, `XOR` Operators (Alternate Forms)](23-differences-from-php.md#logical-and-or-xor-operators-alternate-forms)
    - [String Literals](23-differences-from-php.md#string-literals)
  - [Statements](23-differences-from-php.md#statements)
    - [General](23-differences-from-php.md#general-2)
    - [Labeled Statements](23-differences-from-php.md#labeled-statements)
    - [The `if` Statement](23-differences-from-php.md#the-if-statement)
    - [The `switch` Statement](23-differences-from-php.md#the-switch-statement)
    - [The `while` Statement](23-differences-from-php.md#the-while-statement)
    - [The `for` Statement](23-differences-from-php.md#the-for-statement)
    - [The `foreach` Statement](23-differences-from-php.md#the-foreach-statement)
    - [The `goto` Statement](23-differences-from-php.md#the-goto-statement)
    - [The `continue` Statement](23-differences-from-php.md#the-continue-statement)
    - [The `break` Statement](23-differences-from-php.md#the-break-statement)
    - [The `return` Statement](23-differences-from-php.md#the-return-statement)
    - [The declare Statement](23-differences-from-php.md#the-declare-statement)
  - [Script Inclusion](23-differences-from-php.md#script-inclusion)
  - [Functions](23-differences-from-php.md#functions)
  - [Classes](23-differences-from-php.md#classes)
    - [Class Members](23-differences-from-php.md#class-members)
    - [Dynamic Members](23-differences-from-php.md#dynamic-members)
    - [Properties](23-differences-from-php.md#properties)
    - [Methods](23-differences-from-php.md#methods)
    - [Constructors](23-differences-from-php.md#constructors)
    - [Methods with Special Semantics](23-differences-from-php.md#methods-with-special-semantics)
      - [General](23-differences-from-php.md#general-3)
      - [Method `__call`](23-differences-from-php.md#method-__call)
      - [Method `__get`](23-differences-from-php.md#method-__get)
      - [Method `__invoke`](23-differences-from-php.md#method-__invoke)
      - [Method __isset](23-differences-from-php.md#method-__isset)
      - [Method __set](23-differences-from-php.md#method-__set)
      - [Method __set_state](23-differences-from-php.md#method-__set_state)
      - [Method __unset](23-differences-from-php.md#method-__unset)
    - [Predefined Classes](23-differences-from-php.md#predefined-classes)
      - [Class Closure](23-differences-from-php.md#class-closure)
  - [Interfaces](23-differences-from-php.md#interfaces)
    - [Interface Members](23-differences-from-php.md#interface-members)
    - [Methods](23-differences-from-php.md#methods-1)
    - [Predefined Interfaces](23-differences-from-php.md#predefined-interfaces)
  - [Traits](23-differences-from-php.md#traits)
    - [Trait Declarations](23-differences-from-php.md#trait-declarations)
  - [Namespaces](23-differences-from-php.md#namespaces)
    - [Namespace Use Declarations](23-differences-from-php.md#namespace-use-declarations)
- [Bibliography](24-bibliography.md#bibliography)
- [Introduction](header.html~#introduction)
