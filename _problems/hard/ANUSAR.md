---
category_name: hard
problem_code: ANUSAR
problem_name: 'Substrings and Repetitions'
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
problem_author: anudeep2011
problem_tester: gerald
date_added: 3-03-2014
tags:
    - anudeep2011
    - cook46
    - disjoint
    - medium
    - segment
    - stack
    - suffix
    - suffix
editorial_url: 'http://discuss.codechef.com/problems/ANUSAR'
time:
    view_start_date: 1400437800
    submit_start_date: 1400437800
    visible_start_date: 1400437800
    end_date: 1735669800
    current: 1493556613
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK46/mandarin/ANUSAR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK46/russian/ANUSAR.pdf) as well.

### Statement

Given a string **S** and several frequencies **Fi**. For each **Fi** output the number of substrings of **S** (the characters of substring should be contiguous) that occur at least **Fi** times in **S**. Note, that we consider two substrings distinct if they have distinct length, or they have distinct starting indices.

### Input

The first line of input contains integer **T**, the number of test cases.

The first line of each test case contains string **S** (it contains only lowercase Latin letters). The second line of each test case contains an integer **Q**, that is the number of queries to be answered. Then **Q** lines follows containing **Fi** each.

### Output

For each query, output the required answer.

### Constraints

- **1** ≤ **|S|** ≤ **200000**
- **1** ≤ **Q** ≤ **200000**
- **1** ≤ **Fi** ≤ **200000**
- **Sum of |S| over all test cases ≤ 200000**
- **Sum of Q over all test cases ≤ 200000**

### Example

<pre><b>Input:</b>
1
aaeddf
4
1
2
3
4

<b>Output:</b>
21
4
0
0

</pre>### Explanation
There are a total of 6\*(6+1)/2 substrings, all of them occur at least once. So for **F1=1** answer is equal to 21. Note that substring **"a"** is repeated 2 times in **S**, both the instances are added to the answer.

Look at **F2=2**. Substring **"a"** and substring **"d"** occurs 2 times each in **S**. The answer for **F2** is 4, that is all the occurrences of **"a"** and **"d"**.

There are no substrings which repeat more than twice. So rest answers are 0
