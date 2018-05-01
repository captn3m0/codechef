---
category_name: hard
problem_code: SEQTOWER
problem_name: 'Adding Up Sequences of Towers'
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
problem_author: devuy11
problem_tester: adurysk
date_added: 21-06-2015
tags:
    - cook60
    - devuy11
    - maths
    - medium
editorial_url: 'http://discuss.codechef.com/problems/SEQTOWER'
time:
    view_start_date: 1437330604
    submit_start_date: 1437330604
    visible_start_date: 1437330600
    end_date: 1735669800
    current: 1493556846
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK60/mandarin/SEQTOWER.pdf) and [Russian](http://www.codechef.com/download/translated/COOK60/russian/SEQTOWER.pdf) as well.

You are given an array **A** consisting of prime numbers greater than 4.

<pre>
Fun( Sequence S )
{

        if ( S has only 1 element )    return A[S[1]]

        X = S[2...last element]

        return power( A[S[1]] , Fun(X) )

}

</pre>where **power(A, B)** returns **AB**, and **A** is **1**-indexed.

Fun(S) :![](https://s3.amazonaws.com/codechef_shared/download/seq.png)

Now you need to find the **sum** of the values returned by **Fun(S)** for every _distinct sequence_ **S**.

Each element of **S** is an integer from **1** to **N**. Thus, there are **NN** possible sequences in all. As the values can be large, return it modulo **M**.

### Input

First line contains **T**, the number of test cases to follow.

First line of each test case contains two space separated integers **N** and **M**.

Second line of the test case contains **N** (space separated) integers of the array **A**.

### Output

For each test case, output the **sum** modulo **M** as explained above.

### Constraints

There are two types of test files:

**File Type 1**:

- 2 ≤ **N** ≤ 100
- 2 ≤ **M** ≤ 500
- 1 ≤ **T** ≤ 1000
- **Ai** is a **prime number** greater than **4** and less than **106**.

**File Type 2**:

- 2 ≤ **N** ≤ 105
- 2 ≤ **M** ≤ 5000
- **T** = 1
- **Ai** is a **prime number** greater than **4** and less than **106**.

### Example

<pre><b>Input:</b>
4
2 23
7 11
4 89
5 7 13 11
4 90
5 5 5 5
4 100
5 11 7 17

<b>Output:</b>
10
27
80
64

</pre>### Explanation:

 Test Case 1 : Answer will be (power(7,7)+power(7,11)+power(11,7)+power(11,11) )%23
