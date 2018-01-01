---
category_name: hard
problem_code: COVERING
problem_name: 'Covering Sets'
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
problem_author: kostya_by
problem_tester: null
date_added: 24-10-2014
tags:
    - cook52
    - divide
    - inclusn
    - kostya_by
    - medium
    - sets
editorial_url: 'http://discuss.codechef.com/problems/COVERING'
time:
    view_start_date: 1416768153
    submit_start_date: 1416768153
    visible_start_date: 1416767794
    end_date: 1735669800
    current: 1493556669
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK52/mandarin/COVERING.pdf) and [Russian](http://www.codechef.com/download/translated/COOK52/russian/COVERING.pdf) as well.

 Let's consider a set **S** of **N** different elements numbered from  to **N - 1**. It's a well-known fact that there are exactly 2**N** subsets of **S** (including the empty subset). Each subset **S'** of **S** can be encoded as a bitmask **B(S')** containing **N** bits, where the **i**'th bit of **B(S')** is equal to 1 if the **i**'th element of **S** belongs to **S'**, and 0 otherwise. Each bitmask can also be considered as a non-negative integer represented in binary.

 For example, suppose **N** is equal to 5. Then **S** = {0, 1, 2, 3, 4}. Let's assume **S'** = {0, 3, 4}. Then **B(S')** = 1 × 20 + 0 × 21 + 0 × 22 + 1 × 23 + 1 × 24 = 110012 = 2510.

 Let's say that a triple (**A**, **B**, **C**) of subsets of **S** _covers_ a subset **D** of **S**, if **D** is a subset of the union of subsets **A**, **B** and **C**. In other words, every element of **D** is an element of at least one of **A**, **B**, or **C**.

 Let's consider four functions **F**, **G**, **H** and **R**. Each takes a subset of **S** as the only parameter and returns a non-negative integer. You are given the values of **F(i)**, **G(i)**, and **H(i)** for each 0 ≤ **i** < 2**N**.

 The value of the function **R** of a subset **X** of **S** is equal to the sum of **F(A)** × **G(B)** × **H(C)** for all triples (**A**, **B**, **C**) of subsets of **S** that cover **X**.

 Your task is to calculate **R(0)** + **R(1)** + ... + **R(2N - 1)** modulo 1000000007(109 + 7).

### Input

 The first line of the input contains one integer **N**.

 The second line of the input contains 2**N** integers, denoting the values of **F(0)**, **F(1)**, ..., **F(2N - 1)**. The third and the fourth lines of the input contains the values of **G** and **H** in the same format.

### Output

 The output should contain one integer: **R(0)** + **R(1)** + ... + **R(2N - 1)** modulo 1000000007(109 + 7).

### Constraints

1 ≤ **N** ≤ 20;

0 ≤ **Fi**, **Gi**, **Hi** < 1,000,000,007(109 + 7).

### Example

<pre><b>Input:</b>
2
1 3 9 12
0 5 1 2
2 3 4 1

<b>Output:</b>
7680


</pre>### Explanations
Here's the table of what sets are covered by all the possible triples for **N** = 1:

ABCD000{0}001{0, 1}010{0, 1}011{0, 1}100{0, 1}101{0, 1}110{0, 1}111{0, 1}
