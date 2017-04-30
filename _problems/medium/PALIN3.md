---
category_name: medium
problem_code: PALIN3
problem_name: 3-Palindromes
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: gerald
date_added: 8-02-2014
tags:
    - cook44
    - kostya_by
    - manacher
    - medium
    - string
editorial_url: 'http://discuss.codechef.com/problems/PALIN3'
time:
    view_start_date: 1395599400
    submit_start_date: 1395599400
    visible_start_date: 1395599400
    end_date: 1735669800
    current: 1493557837
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/PALIN3/mandarin/MINXOR.pdf) and [Russian](http://www.codechef.com/download/translated/PALIN3/russian/MINXOR.pdf) as well.

Mike likes strings. He is also interested in algorithms. A few days ago he discovered for himself a very nice problem:

 _You are given a digit string **S**. You need to count the number of substrings of **S**, which are palindromes._

Do you know how to solve it? Good. Mike will make the problem a little bit more difficult for you.

 _You are given a digit string **S**. You need to count the number of substrings of **S**, which are palindromes without leading zeros and can be divided by 3 without a remainder._

A string is a palindrome if it reads the same backward as forward. A string is a palindrome without leading zeros if it reads the same backward as forward and doesn't start with symbol '0'. A string is a digit string, if it doesn't contain any symbols except '0', '1', '2', ..., '9'.

Please, note that you should consider string "0" as a palindrome without leading zeros.

### Input

The first line of the input contains a digit string **S**.

### Output

Your output should contain the only integer, denoting the number of substrings of **S**, which are palindromes without leading zeros and can be divided by 3 without a remainder.

### Constraints

1 ≤ **|S|** ≤ 1 000 000

### Example

```
<b>Input:</b>
1045003

<b>Output:</b>
4

```
### Explanation

In the example you should count **S**\[2..2\] = "0", **S**\[5..5\] = "0", **S**\[6..6\] = "0" and **S**\[7..7\] = "3".