---
category_name: medium
problem_code: XYHUMOQ
problem_name: 'A humongous Query'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: include_sajal
problem_tester: null
date_added: 17-11-2017
tags:
    - euclidean
    - include_sajal
    - jan18
    - medium
editorial_url: 'https://discuss.codechef.com/problems/XYHUMOQ'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525198960
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/XYHUMOQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/XYHUMOQ.pdf) as well.

Let's define a _10-string_ as a string that contains only characters '1' and '0', starts with '1' and ends with '0'. For example, **"10101010"**, **"100"** or **"1010"** are 10-strings, while **"011"**, **"11120"** or **"10101"** are not.

A subsequence of any 10-string is called _humongous_ if it is of the form "1010...10" ("10" concatenated an arbitrary number of times).

For example, the 10-string **"110"** contains exactly 2 humongous subsequences and **"1010"** contains exactly 4 humongous subsequences (formed using indices **{1, 2}**, **{3, 4}**, **{1, 4}**, **{1, 2, 3, 4}**).

You should process some really humongous queries. Each query is as follows:

- You're given a 10-string **S** and an integer **X**.
- You should convert **S** into another 10-string **U** by flipping a number of characters (possibly zero; a flip means changing a '1' to '0' or '0' to '1') of **S**.
- The string **U** should contain exactly **X** humongous subsequences.
- The answer to the query is the **minimum** number of flips that need to be performed. If it's impossible to convert **S** into a valid string **U**, the answer doesn't exist.

Note that **U** has to be a 10-string.

For each query, compute the minimum possible number of flips or determine that there is no answer.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single string **S**.
- The second line contains a single integer **X**.

### Output

For each test case:

- If there is no answer, print a single line containing one string "NO" (without quotes).
- If an answer exists, print two lines.
- The first line should contains a single string "YES" (without quotes).
- The second line should contain a single integer denoting the minimum necessary number of flips.

### Constraints

- 1 ≤ **T** ≤ 10
- 2 ≤ **|S|** ≤ 32
- 1 ≤ **X** ≤ 106
- **S** will be a 10-string

### Subtasks

**Subtask #1 (15 points):**

- **|S|** ≤ 20
- **X** ≤ 103

**Subtask #2 (85 points):** original constraints

### Example

<pre><b>Input:</b>

2
1110
4
110
1

<b>Output:</b>

YES
1
NO
</pre>### Explanation

**Example case 1:** We can convert the given 10-string into **U** = "1010" using only one flip; this string has exactly 4 humongous subsequences. This is the minimum possible number of flips.

**Example case 2:** The only 10-strings we can obtain after any number of flips are "100" and "110". Each of them contains exactly 2 humongous subsequences, so there is no answer.
