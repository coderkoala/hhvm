<?hh
trait T {
  final static function f() {
    echo "Hello\n";
  }
}
class Foo {
  use T;
}
class Bar extends Foo {
  use T;
}
<<__EntryPoint>> function main(): void {
Bar::f();
}
