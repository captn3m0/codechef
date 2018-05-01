---
category_name: school
problem_code: TRICOIN
problem_name: 'Coins And Triangle'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: xcwgf666
date_added: 19-04-2016
tags:
    - binary
    - cakewalk
    - implementation
    - ltime35
    - ma5termind
    - mathematics
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/TRICOIN'
time:
    view_start_date: 1462036200
    submit_start_date: 1462036200
    visible_start_date: 1462036200
    end_date: 1735669800
    current: 1492506773
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME35/mandarin/TRICOIN.pdf), [Russian](http://www.codechef.com/download/translated/LTIME35/russian/TRICOIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME35/vietnamese/TRICOIN.pdf) as well.

Chef belongs to a very rich family which owns many gold mines. Today, he brought **N** gold coins and decided to form a triangle using these coins. Isn't it strange?

Chef has a unusual way of forming a triangle using gold coins, which is described as follows:

- He puts **1** coin in the **1st** row.
- then puts **2** coins in the **2nd** row.
- then puts **3** coins in the **3rd** row.
- and so on as shown in the given figure.

![](https://s3.amazonaws.com/hr-challenge-images/15909/1461147954-8b9f4b7d27-A.png "A.png")Chef is interested in forming a triangle with maximum possible height using at most **N** coins. Can you tell him the maximum possible height of the triangle?

### Input

The first line of input contains a single integer **T** denoting the number of test cases.

The first and the only line of each test case contains an integer **N** denoting the number of gold coins Chef has.

### Output

For each test case, output a single line containing an integer corresponding to the maximum possible height of the triangle that Chef can get.

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ N ≤ 109**

### Subtasks

- Subtask 1 (48 points) : **1 ≤ N ≤ 105**
- Subtask 2 (52 points) : **1 ≤ N ≤ 109**

### Example

<pre>
<b>Input</b>
<tt>3
3
5
7</tt>

<b>Output</b>
<tt>2
2
3</tt>
</pre>### Explanation

- **Test 1:** Chef can't form a triangle with height > 2 as it requires atleast 6 gold coins.
- **Test 2:** Chef can't form a triangle with height > 2 as it requires atleast 6 gold coins.
- **Test 3:** Chef can't form a triangle with height > 3 as it requires atleast 10 gold coins.
