---
category_name: medium
problem_code: CHEFINV
problem_name: 'Chef and Swaps'
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
problem_author: berezin
problem_tester: xcwgf666
date_added: 24-03-2014
tags:
    - berezin
    - fenwick
    - inversions
    - medium
    - sept14
editorial_url: 'http://discuss.codechef.com/problems/CHEFINV'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1493557535
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT14/mandarin/CHEFINV.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/CHEFINV.pdf).

This time, Chef has given you an array **A** containing **N** elements.

He had also asked you to answer **M** of his questions. Each question sounds like: "How many inversions will the array **A** contain, if we swap the elements at the **i**-th and the **j**-th positions?".

The inversion is such a pair of integers (**i**, **j**) that **i < j** and **Ai > Aj**.

### Input

The first line contains two integers **N** and **M** - the number of integers in the array **A** and the number of questions respectively.

The second line contains **N** space-separated integers - **A1**, **A2**, ..., **AN**, respectively.

Each of next **M** lines describes a question by two integers **i** and **j** - the 1-based indices of the numbers we'd like to swap in this question.

### Output

Output **M** lines. Output the answer to the **i**-th question of the **i**-th line.

### Constraints

- **1** ≤ **N, M** ≤ **2 \* 105**
- **1** ≤ **i, j** ≤ **N**
- **1** ≤ **Ai** ≤ **109**
- Mind that we don't actually swap the elements, we only answer "what if" questions, so the array doesn't change after the question.

### Example

<pre><b>Input:</b>
6 3
1 4 3 3 2 5
1 1
1 3
2 5

<b>Output:</b>
5
6
0

</pre>### Explanation

Inversions for the first case: **(2, 3), (2, 4), (2, 5), (3, 5), (4, 5)**.

Inversions for the second case: **(1, 3), (1, 5), (2, 3), (2, 4), (2,5), (4, 5)**.

In the third case the array looks like **1 2 3 3 4 5** and there are no inversions.
