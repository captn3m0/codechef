---
category_name: medium
problem_code: LUCKY4
problem_name: 'Lucky Array'
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
problem_author: witua
problem_tester: laycurse
date_added: 22-11-2011
tags:
    - april12
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKY4'
time:
    view_start_date: 1334137578
    submit_start_date: 1334137578
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493557762
layout: problem
---
All submissions for this problem are available. Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits **4** and **7**. For example, numbers **47**, **744**, **4** are lucky and **5**, **17**, **467** are not.

 Chef likes sequences of **n** positive integers, each of which does not exceed **m**. The total number of such sequences is equal to **m^n**.

 Chef has an array **C** of **n-1** integers. Let **F(x)** be equal to the number of lucky digits in decimal representation of integer **x**. Let there be a sequence **A** of **n** integers (1-based numeration). Chef calls it lucky when the following hold: if for each **i (1 <= i < n)** if **C\[i\]** equals to **1**, then **F(A\[i\])** must be equal to **F(A\[i+1\])** and if **C\[i\]** equals to 0, then **F(A\[i\])** must not be equal to **F(A\[i+1\])**.

 Chef has integers **n, m, k** and an array **C**. He wants to find out the **k-th** lucky sequence for a given array **C**. Help him. If the **k-th** lucky sequence does not exist, print the only integer **-1**.

 The **k-th** lucky sequence is the **k-th** (1-based numeration) sequence in lexicographically sorted list of all lucky sequences for given integers **n, m** and an array **C**. The sequence **A** is lexicographic less than the sequence **B** if there exits integer **x (1 <= x <= n)** that **A\[x\] < B\[x\]** and **A\[y\] = B\[y\]** for all **y (1 <= y < x)**.

### Input

First line contains one number **T** - the number of test cases. Each test is formed as following: first line contains **3** integers **n, m,** and **k**. Next line contains **n-1** integers - array **C** for corresponding test.

### Output

For each **T** test cases print sequence of integers - answer for corresponding test.

### Constraints

2 <= **T** <= 10

2 <= **n** <= 50

1 <= **m, k** <= 10^9

0 <= **C\[i\]** <= 1

### Example

<pre><b>Input:</b>
2
2 4 7
0
3 7 4
0 1

<b>Output:</b>
-1
1 7 7
</pre>