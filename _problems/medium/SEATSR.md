---
category_name: medium
problem_code: SEATSR
problem_name: 'Sereja and two strings'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: shangjingbo
date_added: 5-06-2013
tags:
    - edit
    - medium
    - oct14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEATSR'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493557928
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT14/mandarin/SEATSR.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/SEATSR.pdf).

Sereja has two strings **s** and **w**. Sereja can do **3** types of operations:

- Remove any character from the first string, this operation takes **a** minutes of time
- Add any character in any position of the first string, this operation takes **a** minutes of time
- Replace some character form first string by some other character, this operation takes **b** minutes of time

Sereja has **k** minutes to do some operations. Find the minimum time that Sereja needs to transform the first string to the second.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line contains string **s**. The second line contains string **w**. Both strings contain only lowercase Latin letters. The third line contains integers **a**,**b** and **k**, separated by spaces.

### Output

For each test case on different lines print the answer to the problem - minimum time required to transform the first string to the second by the operations of the first, second and third types. If you can not transform the first string to the second for the specified time, print **-1**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **|s|, |w|** ≤ **100000**
- 0 ≤ **a, b, k** ≤ **100**

### Example

<pre><b>Input:</b>
4
aaa
bbbb
0 0 100
abab
acac
1 1 100
baaaaa
aaaaab
1 100 100
aaaaaa
bbbbbb
100 100 0

<b>Output:</b>
0
2
2
-1

</pre>