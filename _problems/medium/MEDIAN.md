---
category_name: medium
problem_code: MEDIAN
problem_name: 'Little Elephant and Median'
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
problem_author: witua
problem_tester: subra
date_added: 5-12-2011
tags:
    - may12
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/MEDIAN'
time:
    view_start_date: 1336723117
    submit_start_date: 1336723117
    visible_start_date: 1336728600
    end_date: 1735669800
    current: 1493557792
layout: problem
---
All submissions for this problem are available.Little Elephant from Zoo of Lviv likes medians so much. Let us define **median** term for some array **A**. Let **B** be the same array **A**, but sorted in non-decreasing order. Median of **A** is **Bm** (1-based indexing), where **m** equals to **(n div 2)+1**. Here **'div'** is an integer division operation. So, for a sorted array with 5 elements, median is the 3rd element and for a sorted array with 6 elements, it is the 4th element.

Little Elephant has an array **A** with **n** integers. In one turn he can apply the following operation to any consecutive subarray **A\[l..r\]**: assign to all **Ai (l &lt;= i &lt;= r)** median of subarray **A\[l..r\]**.

Let **max** be the maximum integer of **A**. Little Elephant wants to know the minimum number of operations needed to change **A** to an array of **n** integers each with value **max**.

For example, let **A = \[1, 2, 3\]**. Little Elephant wants to change it to **\[3, 3, 3\]**. He can do this in two operations, first for subarray **A\[2..3\]** (after that **A** equals to **\[1, 3, 3\]**), then operation to **A\[1..3\]**.

### Input

First line of the input contains single integer **T** - the number of test cases. Then **T** test cases follow, each of such format: first line - integer **n**, second line - array **A** consisted of **n** integers.

### Output

In **T** lines print the results for each test case, one per line.

### Constraints

1 &lt;= **T** &lt;= 100

1 &lt;= **n** &lt;= 30

1 &lt;= **A\[i\]** &lt;= 10^9

### Example

<pre>
<b>Input:</b>
2
3
1 2 3
4
2 1 1 2

<b>Output:</b>
2
1
</pre>