---
category_name: easy
problem_code: CHEFBR
problem_name: 'Chef and Bracket-Pairs'
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
problem_author: berezin
problem_tester: xiaodao
date_added: 20-03-2014
tags:
    - berezin
    - dec14
    - dynamic
    - easy
editorial_url: 'http://discuss.codechef.com/problems/CHEFBR'
time:
    view_start_date: 1418643288
    submit_start_date: 1418643288
    visible_start_date: 1418643000
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/DEC14/mandarin/CHEFBR.pdf) and [Russian](/download/translated/DEC14/russian/CHEFBR.pdf).

Chef loves brackets. So much so, that rather than just use plain brackets like (), {}, or \[\], he has invented his own notation that allows him to use many more types of brackets.

Each type of bracket is designated by an integer. A negative integer **-x** represents an opening bracket of type **x**; while a positive integer **x** represents a closing bracket of type **x**. Any sequence of such integers is then called a _bracket-pair sequence_.

A _balanced_ bracket-pair sequence can be defined recursively as follows:

- The empty sequence is a balanced bracket-pair sequence.
- If **S** is a balanced bracket-pair sequence, then **-x S x** is a balanced bracket-pair sequence for any positive integer **x**.
- If **S** and **T** are balanced bracket-pair sequences, then **S T** is a balanced bracket-pair sequence.
 
For example, "-1 -2 2 -3 -4 4 3 1" is a balanced bracket-pair sequence, but "-1 -2 1 2" is not.

Chef has a bracket-pair sequence (which may or may not be balanced) consisting of **N** integers. There are 2**N** ways to form a [subsequence](http://en.wikipedia.org/wiki/Subsequence) of his sequence. He wants to know how many of these subsequences are balanced.

Help him to calculate this number, modulo **109+7**.

### Input

The first line contains a single integer **N** denoting the number of brackets in his sequence.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the types of brackets. A negative number means an opening bracket; a positive number means a closing bracket.

### Output

In a single line print the required answer.

### Constraints

- **1** ≤ **N** ≤ **100**
- **-109** ≤ **Ai** ≤ **109**
- **Ai** ≠ 0
- It is **not** guaranteed that each opening bracket has a closing bracket of same type and vice-versa.
 
### Subtasks

- Subtask **N** ≤ **10** Points: 10
- Subtask **N** ≤ **20** Points: 15
- Subtask **N** ≤ **100** Points: 75
 
### Example

 ```
<b>Input:</b>
11
-1 -2 9 2 -3 -4 3 4 8 8 1 

<b>Output:</b>
12

<pre>