---
category_name: easy
problem_code: EXTRAN
problem_name: 'Bear and Extra Number'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: xcwgf666
date_added: 22-02-2017
tags:
    - errichto
    - march17
    - simple
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/EXTRAN'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493558143
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/EXTRAN.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/EXTRAN.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/EXTRAN.pdf?v=1) as well.

A sequence is called nice if its elements are distinct consecutive numbers, possibly in changed order. For example, both (6, 7, 8) and (15, 13, 16, 14) are nice, while (4, 6), (4, 5, 5, 6) and (15, 16, 15) are not.

Limak has a nice sequence. While he was in school today, someone inserted one extra number in the sequence. Limak has just returned and realized that the sequence isn't nice anymore! He wants to remove the inserted number and make his sequence nice again. Can you help him to find the number that he should remove?

Formally, in each test case you are given a sequence of **N** numbers **A**1, **A**2, ..., **AN**. Your task is to find the value **X**, such that removing one occurrence of **X** would make the sequence nice. It's guaranteed that exactly one solution exists.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N** denoting the size of the new sequence.

The second line of a test case contains **N** integers **A**1, **A**2, ..., **AN** denoting the new sequence.

### Output

For each test case, output a single line containing one integer — a number that should be removed from the given sequence.

### Constraints

- **1** ≤ **T** ≤ **10**
- **3** ≤ **N** ≤ **105**
- **1** ≤ **A**i ≤ **109**
- The given sequence isn't nice.
- There is exactly one solution.

### Subtasks

- Subtask #1 (40 points) **3** ≤ **N** ≤ **1000**
- Subtask #2 (60 points) Original constraints

### Example

<pre><b>Input:</b>
<tt>4
5
45 42 46 48 47
3
7 7 8
8
12 156 157 158 159 160 161 162
4
8 7 10 6</tt>

<b>Output:</b>
<tt>42
7
12
10</tt>
</pre>
### Explanation

**Test case 1.** The sequence **A** is (45, 42, 46, 48, 47). We should remove the number 42, and the remaining numbers will form a nice sequence (45, 46, 48, 47).

**Test case 2.** We should remove one of two 7's to get the sequence (7, 8), which is nice.
