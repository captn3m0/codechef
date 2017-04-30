---
category_name: medium
problem_code: LSTGRPH
problem_name: 'Lost Graph'
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
problem_author: kostya_by
problem_tester: null
date_added: 24-10-2014
tags:
    - bfs
    - bipartite
    - cook52
    - easy
    - graphs
    - kostya_by
editorial_url: 'http://discuss.codechef.com/problems/LSTGRPH'
time:
    view_start_date: 1416767978
    submit_start_date: 1416767978
    visible_start_date: 1416767794
    end_date: 1735669800
    current: 1493557755
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK52/mandarin/LSTGRPH.pdf) and [Russian](http://www.codechef.com/download/translated/COOK52/russian/LSTGRPH.pdf) as well.

 Mike is given an undirected graph **G** of **N** vertices and **M** edges. A non-negative integer **Xi** is assigned to the **i**'th vertex of **G**, for 1 ≤ **i** ≤ **N**.

 Mike was asked to assign labels to each edge of the graph so that the following condition is satisfied:

 Let's suppose that the **j**'th edge of **G** connects vertices **Uj** and **Vj**. Then, a non-negative integer **Yj** equals to **XUj xor XVj**.

 This challenge was too easy for Mike and he solved it quickly.

 The next day, Mike started to worry that he had solved the problem too quickly and had made a lot of mistakes, so he decided to double-check his answers. To his horror, Mike discovered that all the values of **Xi** had been lost!

 Mike is a very meticulous person and he doesn't like making mistakes, so he decided to create his own values of **Xi** that still produce the same values of **Yj**.

 Your task is to determine whether it is possible to do so. If it is, you should output the **K**'th lexicographically valid sequence (**X1**, **X2**, ..., **XN**) that satisfies the above conditions, knowing the structure of **G** and all the values **Yj**.

### Note

 Maybe some of you aren't familiar with some terms in the statement. Here are some articles that could help you understand the problem correctly:

- XOR operation: [http://en.wikipedia.org/wiki/Exclusive\_or](http://en.wikipedia.org/wiki/Exclusive_or)

 Also, the stack memory size is quite limited on CodeChef, so a deep recursion may lead to the Runtime Error verdict.

### Input

 The first line of the input contains the integers **N**, **M** and **K**.

 The next **M** lines describe the edges of **G**; the **j**'th line contains three integers **Uj**, **Vj** and **Yj**.

 It's guaranteed that **G** doesn't contain multiple edges and loops.

### Output

 If there is no valid labelling, or less than **K** valid labellings, the only line of the output should contain **-1**. Otherwise, the only line of the output should contain **N** non-negative integers, denoting the **K**'th lexicographically valid sequence (**X1**, **X2**, ..., **XN**).

 It's guaranteed that in the correct sequence all of the values of **Xi** won't exceed the 32-bit signed integer limit.

### Constraints

1 ≤ **N** ≤ 200,000(2 × 105);

0 ≤ **M** ≤ 300,000(3 × 105);

1 ≤ **K** ≤ 1,000,000,000(109);

1 ≤ **Uj** ≠ **Vj** ≤ **N**;

0 ≤ **Yj** < 231.

### Example

```
<b>Input:</b>
5 4 2
1 2 5
1 3 9
2 4 0
2 5 1

<b>Output:</b>
1 4 8 4 5 


```
### Explanation

 The first lexicographically valid sequence is equal to (0, 5, 9, 5, 4);

 The second lexicographically valid sequence is equal to (1, 4, 8, 4, 5) - that's the one that should be printed out as the answer.