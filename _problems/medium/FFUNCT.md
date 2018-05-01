---
category_name: medium
problem_code: FFUNCT
problem_name: 'Fun and Functions'
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
problem_tester: null
date_added: 7-03-2015
tags:
    - snck15el
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/FFUNCT'
time:
    view_start_date: 1434135600
    submit_start_date: 1434135600
    visible_start_date: 1434135600
    end_date: 1735669800
    current: 1493557656
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK15EL/mandarin/FFUNCT.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK15EL/russian/FFUNCT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK15EL/vietnamese/FFUNCT.pdf)

You are given **N** boolean functions. Formally, each boolean function is a mapping from **{0, 1}K** to **{0, 1}**, where **K** is a number of variables of the function. Different functions in this problem can have different parameters of **K**.

We describe a boolean function **F(x1, x2, ..., xK)** by a string of **2K** characters. Let's enumerate these characters from 0 to **2K-1**. Let's take the **i**-th character of this string. This character will correspond to the value of the boolean function **F** on the set of parameters, corresponding to the last **K** bits of **i** in binary representation. For better understanding, let us have boolean function of **K = 3** variables, described by a string **S = 10101010**. The value of **F(0, 0, 0)** is one, because in binary representation "000" is zero, and **S\[0\] = 1**. The value of F(0, 1, 1) is zero, because "011" in binary representation is three, and **S\[3\] = 0**.

Consider a set of boolean functions **{F1, F2, ..., FM}**. We can combine the functions of this set, thus, obtaining the new functions. One function can be used as much times as possible in a single combination. For example, if we have set of two functions: **{F1(x1, x2), F2(y1, y2, y3)}**, we can obtain the following functions:

- **G1(z1, z2, z3, z4) = F1(F2(z1, z2, z3), F2( z2, z3, z4))**
- **G2(z1, z2, z3, z4, z5) = F1(F2(z1, z2, z3), F2( z2, z3, z4))**
- **G3(z1, z2, z3, z4) = F1(F2(z1, z2, z3), F1( z2, z4))**
- **G4(z1) = F1(F2(z1, z1, z1), F1( z1, z1))**
- **G5(z1, z2, z3, z4) = F1(F1( F1(z1, z2), F1(z1, z2)), F1( F1(z3, z4), F1(z3, z4)))**
- These are just examples. In fact, you can obtain an infinite number of boolean functions by combination of boolean functions from any non-empty set of boolean functions.

We will call a set of boolean functions appropriate in case any boolean function of any number of variables can be obtained by combining boolean functions from this set.

There is an array of boolean functions. You are to maintain two types of queries:

- **u p S** - the **p**-th boolean function becomes equal to the one that is described by a string **S**. You can assume that **S** will always denote a boolean function, i.e. its' length will always be equal to a power of two.
- **q L R** - write out the boolean functions from the **L**-th to the **R-th** inclusively. Calculate the number of subsets of the obtained multiset of functions that are appropriate. This number can be huge, so please evaluate it modulo **109+7**.

### Input

The first line of input contains a single integer **N**, denoting the number of functions.

Each of the following **N** will contain **2Ki** characters, each of them will be either zero or one and will denote the value of the boolean function on the corresponding set of variables. Here, **Ki** is the number of variables in the **i**-th boolean function.

The next line contains a single integer **Q**, denoting the number of queries.

The following **Q** lines describe the queries in the format described above.

### Output

For each q-type query output a line, containing an answer to the problem (i.e. the required number of subsets), modulo **109+7**.

### Constraints

- **1 ≤ N, Q ≤ 105**
- **1 ≤ L ≤ R ≤ N**
- **1 ≤ p ≤ N**
- **2 ≤ |S| ≤ 16. |S|** will always be a power of two.
- **1 ≤ Ki ≤ 4**

### Example

<pre><b>Input:</b>
3
0001
0111
10
3
q 1 3
u 3 10101010
q 2 3

<b>Output:</b>
3
1
</pre>### Explanation

The first function of an initial array corresponds to conjunction (AND operation), the second one corresponds to disjunction (OR operation) and the third one corresponds to negation (NOT operation).

In the second query we replace the third function in the array (negation) to the function that does not have a common name.
