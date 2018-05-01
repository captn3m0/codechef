---
category_name: easy
problem_code: CHSTR
problem_name: 'Chef and String'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: null
date_added: 6-04-2015
tags:
    - antoniuk1
    - combinatorics
    - june15
    - medium
    - suffix
    - zfunction
editorial_url: 'http://discuss.codechef.com/problems/CHSTR'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/CHSTR.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/CHSTR.pdf).

Chef has a string **S** consisting of **N** lowercase English alphabets. He has prepared a list **L** consisting of all non empty [substrings](http://en.wikipedia.org/wiki/Substring) of the string **S**.

Now he asks you **Q** questions. To **ith** question, you need to count the number of ways to choose exactly **Ki** equal strings from the list **L**. As answer could be large you need to find it modulo **109+7**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. First line of each test case contains two space-separated integers **N** and **Q** denoting the length of the string **S** and amount of questions. The next line of each test case contains a single string **S**. Each of the next **Q** lines contains a single integer **Ki**.

### Output

For each test case, output **Q** lines, each line should contain one integer - amount of ways to choose exactly **Ki** equal strings from the list **L**.

### Constraints

**Subtask 1: (10 points)**

- **1 ≤ T ≤ 100**
- **1 ≤ N ≤ 5**
- **1 ≤ Q ≤ 5**
- **1 ≤ Ki ≤ 5**


**Subtask 2: (20 points)**

- **T = 1**
- **1 ≤ N ≤ 500**
- **1 ≤ Q ≤ 105**
- **1 ≤ Ki ≤ 109**


**Subtask 3: (70 points)**

- **T = 1**
- **1 ≤ N ≤ 5000**
- **1 ≤ Q ≤ 105**
- **1 ≤ Ki ≤ 109**

### Example

<pre><b>Input:</b>
1
5 4
ababa
2
1
3
4
<b>Output:</b>
7
15
1
0
</pre>### Explanation

**L** = {**"a", "b", "a", "b", "a", "ab", "ba", "ab", "ba", "aba", "bab", "aba", "abab", "baba", "ababa"**}.

- **k1 = 2**: There are seven ways to choose two equal strings ("a", "a"), ("a", "a"), ("a", "a"), ("b", "b"), ("ab", "ab"), ("ba", "ba"), ("aba", "aba").
- **k2 = 1**: We can choose any string from **L** (15 ways).
- **k3 = 3**: There is one way to choose three equal strings - ("a", "a", "a").
- **k4 = 4**: There are no four equal strings in **L** .
