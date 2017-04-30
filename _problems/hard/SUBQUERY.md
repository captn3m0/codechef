---
category_name: hard
problem_code: SUBQUERY
problem_name: 'Substring Query'
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
problem_author: xcwgf666
problem_tester: furko
date_added: 5-06-2014
tags:
    - ltime13
    - medium
    - suffix_automata
    - trie
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SUBQUERY'
time:
    view_start_date: 1404030600
    submit_start_date: 1404030600
    visible_start_date: 1404030600
    end_date: 1735669800
    current: 1493556860
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME13/mandarin/SUBQUERY.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME13/russian/SUBQUERY.pdf).

You are given a string **S** and **N** queries. Each query is defined by two integers - **Li** and **Pi**. Count the number of strings of the length **Li** that occur **exactly Pi** times (as the consecutive substrings) in the string **S**.

### Input

The first line of input contains the string **S**.

The second line of input contains the integer **N** - the number of queries.

Then there are **N** lines, the **i**-th one contains numbers **Li** and **Pi** for the **i**-th query.

### Output

For each query output the answer at the corresponding line of the output.

### Constraints

- **1** ≤ **|S|** ≤ **50**, **1** ≤ **N** ≤ **100** : 13 points.
- **1** ≤ **|S|** ≤ **1000**, **1** ≤ **N** ≤ **10000** : 27 points.
- **1** ≤ **|S|** ≤ **200000**, **1** ≤ **N** ≤ **500000** : 60 points.
- **1** ≤ **Li**, **Pi** ≤ **N**

### Example

```
<b>Input:</b>
abacaba
1
3 2

<b>Output:</b>
1

```
### Explanation

The only such string is **aba**.