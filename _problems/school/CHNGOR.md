---
category_name: school
problem_code: CHNGOR
problem_name: 'Chang and Bitwise OR'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: prateekg603
problem_tester: null
date_added: 25-06-2017
tags:
    - cook84
    - easy
    - prateekg603
editorial_url: 'https://discuss.codechef.com/problems/CHNGOR'
time:
    view_start_date: 1500834600
    submit_start_date: 1500834600
    visible_start_date: 1500834600
    end_date: 1735669800
    current: 1514816983
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK84/mandarin/CHNGOR.pdf), [russian](http://www.codechef.com/download/translated/COOK84/russian/CHNGOR.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK84/vietnamese/CHNGOR.pdf) as well.

Chang is a big fan of bitwise operations. As he was sitting in a boring lecture, he thought of a simple problem but had a tough time figuring out the solution. Help him to solve it. The problem is as follows. Given a list of **N** non-negative integers, you perform the following operation on this list.

- Select any subsequence of integers from the list and remove the elements of that subsequence. The cost incurred will be [Bitwise OR](https://en.wikipedia.org/wiki/Bitwise_operation#OR) of the elements.

Your task is to remove all the integers from the list by applying the above operation as many times as you want. You want to incur the minimum total cost at the end. Total cost is the sum of all the costs incurred while removing subsequences.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of the each test case contains a single integer **N** denoting the number of integers in the list.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the integers in the given list.

### Output

For each test case, output answer in a separate line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **105**
- **0 ≤ Ai ≤ 109**

### Example

<pre><b>Input:</b>
1
2
1 2

<b>Output:</b>
3
</pre>### Explanation

**Example case 1.**

We can first remove **1** from the list and then **2**. Thus, the total cost comes out to **3**.

 The other possible way is to choose the subsequence **1**, **2**, and remove it. The Bitwise OR of **1** and **2** is **3**. So the cost incurred will be **3** in this case too.
