---
category_name: school
problem_code: LUCKFOUR
problem_name: 'Lucky Four'
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
problem_author: xcwgf666
problem_tester: furko
date_added: 23-01-2015
tags:
    - cakewalk
    - ltime21
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/LUCKFOUR'
time:
    view_start_date: 1424593800
    submit_start_date: 1424593800
    visible_start_date: 1424593800
    end_date: 1735669800
    current: 1492507629
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME21/mandarin/LUCKFOUR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME21/russian/LUCKFOUR.pdf).

Kostya likes the number **4** much. Of course! This number has such a lot of properties, like:

- Four is the smallest composite number;
- It is also the smallest Smith number;
- The smallest non-cyclic group has four elements;
- Four is the maximal degree of the equation that can be solved in radicals;
- There is four-color theorem that states that any map can be colored in no more than four colors in such a way that no two adjacent regions are colored in the same color;
- Lagrange's four-square theorem states that every positive integer can be written as the sum of at most four square numbers;
- Four is the maximum number of dimensions of a real division algebra;
- In bases 6 and 12, 4 is a 1-automorphic number;
- And there are a lot more cool stuff about this number!

Impressed by the power of this number, Kostya has begun to look for occurrences of four anywhere. He has a list of **T** integers, for each of them he wants to calculate the number of occurrences of the digit **4** in the decimal representation. He is too busy now, so please help him.

### Input

The first line of input consists of a single integer **T**, denoting the number of integers in Kostya's list.

Then, there are **T** lines, each of them contain a single integer from the list.

### Output

Output **T** lines. Each of these lines should contain the number of occurences of the digit **4** in the respective integer from Kostya's list.

### Constraints

- **1** ≤ **T** ≤ **105**
- (Subtask 1):  ≤ Numbers from the list ≤ **9** - 33 points.
- (Subtask 2):  ≤ Numbers from the list ≤ **109** - 67 points.

### Example

<pre><b>Input:</b>
5
447474
228
6664
40
81

<b>Output:</b>
4
0
1
1
0

</pre>