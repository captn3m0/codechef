---
category_name: hard
problem_code: CHMAGIC
problem_name: 'Chef and Magic Numbers '
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
problem_author: furko
problem_tester: balajiganapath
date_added: 5-08-2013
tags:
    - ad
    - furko
    - ltime04
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CHMAGIC'
time:
    view_start_date: 1380445200
    submit_start_date: 1380445200
    visible_start_date: 1380445200
    end_date: 1735669800
    current: 1493556647
layout: problem
---
All submissions for this problem are available. Chef is the cleverest man in the whole world. However he is not interested in science, give him the magic. His first magic lesson consists of converting a number **k** to **F(k)** where **F(k)** - is the **k-th** magic integer. An integer is magic if **S(n)** is smaller than or equal to **q**. **S(n)** is the sum of squares of the digits in n. For example, **S(13) = 1^2 + 3^2 = 10**.

 Now Chef want to test his magical abilities. He knows how to solve this task, but who will check it? That is where you come in.

 The problem is as follows: there is an array of **N** numbers. Let **A** be the given array. Then **Bi** = **F(Ai)** for all **i** **(1 <= i <= N)**. This is followed by **M** queries of the form **(l, r)**. For each such query you need to find the sum of the elements of the array **B** that are in the interval **(l, r)** modulo 1000000007.

### Input

The first line of the input contains an integer **q**. The next line contains an integer **N**. The third line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the given array. Next line contains **M** denoting the number of queries. The next **M** lines contains two integers denoting left and right ends of queries.

### Output

 For each query, output a single line containing sum of the elements of the array **B** in the given interval.

### Constraints

- **1** ≤ **q** ≤ **10^9**
- **1** ≤ **N** ≤ **3\*10^5**
- **1** ≤ **Ai** ≤ **3\*10^5**
- **1** ≤ **M** ≤ **10^5**
- **1** ≤ **l** ≤ **r** ≤ **N**

### Example

<pre><b>Input:</b>
201
5
1 2 10 5 10000
5
1 1
2 2
3 3
5 5
1 5  
<b>Output:</b>
1
2
10
10636
10654 
</pre>### Scoring

Subtask 1 (30 points): **200 ≤ q ≤ 109**. 

Subtask 2 (70 points): Look at constraints
