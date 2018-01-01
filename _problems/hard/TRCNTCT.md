---
category_name: hard
problem_code: TRCNTCT
problem_name: 'Tree Connectivity'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: melnik
problem_tester: kingofnumbers
date_added: 16-08-2017
tags:
    - cook85
    - dfs
    - divide
    - hard
    - melnik
    - segment
editorial_url: 'https://discuss.codechef.com/problems/TRCNTCT'
time:
    view_start_date: 1503253800
    submit_start_date: 1503253800
    visible_start_date: 1503253800
    end_date: 1735669800
    current: 1514816033
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK85/mandarin/TRCNTCT.pdf), [russian](http://www.codechef.com/download/translated/COOK85/russian/TRCNTCT.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK85/vietnamese/TRCNTCT.pdf) as well.

Chef recently got influenced by the Joker and loves to carve things up with his new collection of knives.

One afternoon Chef decides to cut off some vertices from a tree that has **N**  vertices. Chef creates the following plan for cutting the vertices :

- He chooses a pair of integers (**L, R**) such that (**1**≤**L**≤**R**≤**N**) and cuts off all vertices whose indices do not belong in the interval \[**L, R**\].
- He also cuts off all edges that don’t connect any two vertices belonging to the interval \[**L, R**\].

A pair of integers \[**L, R**\] is said to be valid if the remaining graph after cutting the vertices according to Chef's plan is still connected.

The Chef wants to know the number of such valid pairs (**L, R**) for his tree. However, duty calls for the Chef and he has to rush back to the kitchen to cook. Can you help him to calculate the number of such valid pairs?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The description of each test case starts with the number of vertices **N**. Each of the following **N - 1** lines contains two integers - indices of vertices connected by an edge. It is guaranteed that each test case defines a valid tree.

### Output

For each test case, output a single line containing the number Chef is interested in.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **106**
- The sum of **N** over all testcases does not exceed **106**

### Example

<pre><b>Input:</b>
2
2
2 1
4
3 4
1 4
4 2

<b>Output:</b>
3
7


</pre>### Explanation
**Example case 1.** Intervals \[**1**,**1**\], \[**1**,**2**\] and \[**2**,**2**\] are valid.

**Example case 2.** Intervals \[**1**,**1**\], \[**1**,**4**\], \[**2**,**2**\], \[**2**,**4**\], \[**3**,**3**\], \[**3**,**4**\] and \[**4**,**4**\] are valid.
