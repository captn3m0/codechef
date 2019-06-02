---
category_name: medium
problem_code: FRBSUM
problem_name: ForbiddenSum
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
problem_tester: white_king
date_added: 18-10-2013
tags:
    - binary
    - jan14
    - kostya_by
    - medium
    - persistence
    - segment
editorial_url: 'http://discuss.codechef.com/problems/FRBSUM'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493557919
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JAN14/mandarin/FRBSUM.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/FRBSUM.pdf).

Mike likes to invent new functions. The latest one he has invented is called *ForbiddenSum*. Let's consider how it can be calculated:

You are given a set **S** of positive integers. The integers are not necessary distinct. *ForbiddenSum* of **S** equals to the minimal **non-negative** integer, that can't be returned by the algorithm described below:

- Choose a *random* subset **S'** of **S**(it can be empty as well);
- Calculate the sum of all the numbers of **S'** and assign it to the variable **T**;
- Return the value of the variable **T**.

I.e. if **S** = {1, 1, 3, 7}, the algorithm can return 0(**S'** = {}), 1(**S'** = {1}), 2(**S'** = {1, 1}), 3(**S'** = {3}), 4(**S'** = {1, 3}), 5(**S'** = {1, 1, 3}), but it can't return 6. So, *ForbiddenSum* of **S** equals to 6.

Inventing of new function is not the only Mike's hobby. Also, he likes to collect rare and unusual arrays. He is going to share with you one of them.

Formally, Mike gives you one array **A**, consisting of **N** positive integers. After that, he asks you **M** questions, two integers **Li** and **Ri** describe **i**'th question: What does *ForbiddenSum* of **S**={**ALi**, **ALi+1**, ..., **ARi-1**, **ARi**} equal to?

### Input

The first line contains the only integer **N**. The second line contains **N** integers - the array **A**. **A** is 1-indexed.

The third line contains the only integer **M**. The following **M** lines contain two integer numbers 1 ≤ **Li** ≤ **Ri** ≤ **N** each.

### Output

Output should consists of **M** lines. The **i**'th line should contains the answer to the **i**'th question.

### Constraints

1 ≤ **N**, **M** ≤ 100,000

1 ≤ **Ai** ≤ 109

1 ≤ **A1** + **A2** + ... + **AN** ≤ 109

### Example

<pre><b>Input:</b>
5
1 2 4 9 10
5
1 1
1 2
1 3
1 4
1 5

<b>Output:</b>
2
4
8
8
8
</pre>
### Explanation

In the example test there are **M**=5 questions. We won't describe all of them, only two ones.

**The first question**

In the first test case **S** equals to {1}. The answer is **2**, because we can recieve 1 in case the algorithm chooses **S'** = {1}. But there are no chances to receive 2.

**The second question**

In the first test case **S** equals to {1, 2}. The answer is **4**, because we can recieve 1 in case the algorithm chooses **S'** = {1}, 2 in case the algorithm chooses **S'** = {2} and 3 in case the algorithm chooses **S'** = {1, 2}. But there are no chances to receive 4.
