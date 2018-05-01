---
category_name: medium
problem_code: CHEFLKJ
problem_name: 'Chef and Array'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: karanaggarwal
date_added: 10-07-2016
tags:
    - cook72
    - medium
    - mgch
    - segment
editorial_url: 'http://discuss.codechef.com/problems/CHEFLKJ'
time:
    view_start_date: 1469385000
    submit_start_date: 1469385000
    visible_start_date: 1469385000
    end_date: 1735669800
    current: 1493557542
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK72/mandarin/CHEFLKJ.pdf), [Russian](http://www.codechef.com/download/translated/COOK72/russian/CHEFLKJ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFLKJ.pdf) as well.

Chef likes arrays and anything related to it. He call an array **V** dominating if there exists a number **x** (the dominator) whose number of occurrences in **V**  strictly greater than half the size of the array (that is, **floor(|V|/2)**).

His friend Dmytro wants to make Chef happy, so he presented this interesting problem for Chef.

Given an array **A**. You have to process **Q** queries on it. Queries can be one of two types:

- **1 x y**  - Assign value **y** to **x**-th element in array **A**, i.e. **Ax = y**.
- **2 l r**  - print "Yes" if subarray **A**\[**l**..**r**\] is dominating, "No" otherwise

### Input

The first line of input contains two integers **N** and **Q** denoting the number of elements in **A**, and the number of queries to be executed.

The second line of input contains **N** space separated integers denoting the array **A**.

Each of the next **Q** lines contains one query.

### Output

For each query of **type 2**, output the answer to the query in a single line.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **A**i, **y** ≤ **109**
- **1** ≤ **x**  ≤ **N**
- **1** ≤ **l**  ≤  **r**  ≤ **N**

### Example

<pre><b>Input:</b>
5 8
1 2 3 2 1
2 1 5
2 2 4
1 3 2
2 1 5
1 2 3
2 1 5
1 3 1
2 1 5

<b>Output:</b>
No
Yes
Yes
No
Yes
</pre>### Explanation

For first query, we have to tell whether the entire array **A** is dominating or not. It turns out that it is not dominating, because occurrences of 1 and 2 are equal to 2 (which is not more than half the size of array, i.e. 2) and that of 3 is 1.

For second query, the subarray **\[2, 3, 2\]** is dominating and 2 is the dominator of it. Number of occurrences of 2 is 2 which is strictly greater than half the size of subarray, i.e. **floor(3/2) = 1**.
