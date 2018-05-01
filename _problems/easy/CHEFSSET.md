---
category_name: easy
problem_code: CHEFSSET
problem_name: 'Chef and Square Set'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: animesh_f
date_added: 23-11-2016
tags:
    - admin2
    - ltime42
    - number
    - prime
time:
    view_start_date: 1480181400
    submit_start_date: 1480181400
    visible_start_date: 1480181400
    end_date: 1735669800
    current: 1493558212
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME42/mandarin/CHEFSSET.pdf), [Russian](http://www.codechef.com/download/translated/LTIME42/russian/CHEFSSET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME42/vietnamese/CHEFSSET.pdf) as well.

Chef is teaching his students about properties of integers. Today he is teaching them about numbers which are squares of some number, e.g. 1, 4, 9, 16, 25 etc. These numbers are said perfect squares.

He gave his students the following task as homework. He gives an array **a** consisting of **n** positive integers. He calls the array **_w0w_** if for every pair of indices **i, j**, the product **ai \* aj** is a perfect square.

Chef wants you to make this array _w0w_. For achieving this, you can pick any integer **ai** and can multiply it by any prime number. You can perform this operation several times, even multiple times on the same number. Find out the minimum number of operations that you will require.

### Input

The first line of the input contains an integer **T** denoting the number of the test cases.

The first line of each test case will contain an integer **n** denoting number of elements in array **a**.

The next line will contain **n** space separated integers denoting elements of array **a**.

### Output

For each test case, output a single integer corresponding to minimum number of operations required to make array _w0w_.

### Constraints

- **1** ≤ **T, n, ai** ≤ **106**
- **1** ≤ Sum of **n** over all test cases in a single test file ≤ **106**

### Subtasks

**Subtask #1: (10 points)**

- **1** ≤ **T, n, ai** ≤ **105**
- **ai** is prime.
- **1** ≤ Sum of **n** over all test cases in a single test file ≤ **105**

**Subtask #2: (20 points)**

- **1** ≤ **T, n, ai** ≤ **106**
- **ai** is prime.
- **1** ≤ Sum of **n** over all test cases in a single test file ≤ **106**

**Subtask #3: (30 points)**

- **1** ≤ **T, n, ai** ≤ **105**
- **1** ≤ Sum of **n** over all test cases in a single test file ≤ **105**

**Subtask #4: (40 points)**

- Original Constraints

### Example

<pre><b>Input:</b>
3
3
2 2 2
3
1 2 2
3
2 4 6

<b>Output:</b>
0
1
2
</pre>### Explanation

**Example case 1.** If you multiply any pair of integers in the array, the product is 4, which is square. So, the array is _w0w_ already.

**Example case 2.** You can multiply the first number by 2, then the array will become _w0w_. So the minimum number of operations required will be 1.
