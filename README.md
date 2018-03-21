# php-cli Sample

一个完整的业务系统，恰当的命令行工具可以帮助我们减少很多重复性工作，从而提高我们的工作效率。
此工程即提供给我们一个使用 `PHP` 来开发命令行工具的指导。

## Usage

* git clone `https://github.com/erigo/php-cli-sample`
* `composer install`
* `./sample`

## 示例

在本示例中，仅实现了一个命令 `SampleCommand`，以下均为可用命令：
```
$ ./sample foo --help
$ ./sample foo
$ ./sample foo --bar="BAR"
$ ./sample foo -b "BAR"
```