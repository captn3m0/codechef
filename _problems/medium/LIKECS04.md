---
category_name: medium
problem_code: LIKECS04
problem_name: 'Numbers Game'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: likecs
problem_tester: kingofnumbers
date_added: 8-09-2017
tags:
    - cook86
    - dynamic
    - invariants
    - likecs
    - likecs
    - medium
editorial_url: 'https://discuss.codechef.com/problems/LIKECS04'
time:
    view_start_date: 1505673000
    submit_start_date: 1505673000
    visible_start_date: 1505673000
    end_date: 1735669800
    current: 1514816017
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS04.pdf), [Russian](http://www.codechef.com/download/translated/COOK86/russian/LIKECS04.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS04.pdf) as well.

Chef Dobby loves playing games, especially games related to numbers. So, today Bhuvan gave him a new game. The description of the game goes as follows :

Consider an array **A** of **N** non-negative integers. You can do the following move any number of times, pick two numbers from the array **(x, y)**, such that **x ≥ y** and convert them into **(x - y, 2 \* y)**. The aim of the game is to make the array contains exactly **(N - 1)** zeros. If Dobby achieves this, after any number of steps, he wins the game.

Bhuvan wants to know the odds to choose an initial array satisfying for every index **i**, the condition **0 ≤ A\[i\] ≤ B\[i\]** where B is given in input and Dobby wins the game with such an array. So please help him counting the number of such arrays, since the answer can be very large, output the answer modulo **109 + 7**.

### Input section

The first line contains **N**, denoting the number of elements in the array.

Next line contains **N** space separated integers, denoting the elements of the array.

### Output section

Output the number of possible winning arrays modulo **109 + 7**.

### Input constraints

<pre>
2 ≤ N ≤ 50
0 ≤ B[i] ≤ 50, where B[i] denotes the i<sup>th</sup> element of the array.
</pre>### Sample Input

<pre>
3
2 0 1
</pre>### Sample Output

<pre>
4
</pre>### Explanation

The possible winning arrays are **(1, 0, 0)**, **(0, 0, 1)**, **(2, 0, 0)** and **(1, 0, 1)**.

Let us consider why array **(2, 0, 1)** is losing. The only move is 2 pick the pair **(2, 1)**. After applying the operation, we get the pair **(1, 2)**. Thus, only the order of elements in the array change and we are in a situation of deadlock. Thus, Chef Dobby can't convert the array to contain **2** zeros.
