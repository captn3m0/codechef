---
category_name: hard
problem_code: MGCHPERM
problem_name: 'Misha and Permutation'
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
problem_author: mgch
problem_tester: xcwgf666
date_added: 3-10-2015
tags:
    - convex
    - dec15
    - hard
    - interpolation
    - mgch
    - polynomial
    - precomputation
    - recurrences
editorial_url: 'http://discuss.codechef.com/problems/MGCHPERM'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493556773
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/MGCHPERM.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/MGCHPERM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/MGCHPERM.pdf) as well.

Misha is an expert on combinatorics, so he knows a lot about permutations. Recently, he learned the definition of a convex polygon and invented too many new problems involving permutations. Please help him solve one of them.

Let's define a function on a set **a** with size **k**: **F**(**a1**, **a2**, ... , **ak**). Imagine that we have sticks of lengths **a1**, **a2**, ... , **ak**. **F**(**a1**, **a2**, ... , **ak**) = 1, if and only if a convex polygon can be created from these sticks. **F**(**a1**, **a2**, ... , **ak**) = 0, otherwise.

Misha has the identity permutation over **n** elements — **In** (**In = {1, 2, 3, .. n})**. He wants to know the sum of the function **F** over all possible distinct **k**-sized subsets of **In**.

Please help Misha find this sum. Since its value may be very large, you should output the sum modulo **109+7**.

### Input

The first line of input contains an integer **T** denoting the number of test cases. Each of the next **T** lines contains two space-separated integers — **n** and **k**. ### Output

For each test case, output a single line containing a single integer — the solution of Misha's problem modulo **109+7**. ### Constraints

- 1 ≤ **T** ≤ 500
- 3 ≤ **k** ≤ 7
- 1 ≤ **k** ≤ **n** ≤ 109

### Subtasks

- **Subtask 1: (10 pts)** Sum of **n** over all test cases not be greater than 15.
- **Subtask 2: (20 pts)** Sum of **n** over all test cases not be greater than 1000.
- **Subtask 3: (30 pts)** 1 ≤ **n** ≤ 106
- **Subtask 4: (40 pts)** 1 ≤ **n** ≤ 109

### Example

<pre>
<b>Input:</b>
<tt>5
3 3
6 4
777 5
777777 7
1000000000 6
</tt>
<b>Output:</b>
<tt>0
14
367816
989165211
930411765</tt>
</pre>### Explanation:

**Example case 1.** There is only one subset: {1, 2, 3}. Since, **F**(1, 2, 3) = 0, the answer is 0.

**Example case 2.** There are C(6, 4) = 15 possible subsets. **F**(1, 2, 3, 6) = 0, and the value of **F** on all other subsets equals 1. Therefore, the answer is 15 - 1 = 14.
