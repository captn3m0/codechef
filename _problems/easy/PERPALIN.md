---
category_name: easy
problem_code: PERPALIN
problem_name: 'Periodic Palindrome Construction'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 27-10-2017
tags:
    - admin2
    - nov17
    - simple
editorial_url: 'https://discuss.codechef.com/problems/PERPALIN'
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514816007
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/PERPALIN.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/PERPALIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/PERPALIN.pdf) as well.

Chef recently learned about concept of periodicity of strings. A string is said to have a period **P**, if **P** divides **N** and for each i, the i-th of character of the string is same as **i-P**th character (provided it exists), e.g. "abab" has a period **P = 2**, It also has a period of **P = 4**, but it doesn't have a period of 1 or 3.

Chef wants to construct a string of length **N** that is a palindrome and has a period **P**. It's guaranteed that **N** is divisible by **P**. This string can only contain character 'a' or 'b'. Chef doesn't like the strings that contain all a's or all b's.

Given the values of **N, P**, can you construct one such palindromic string that Chef likes? If it's impossible to do so, output "impossible" (without quotes)

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The only line of each test case contains two space separated integers **N, P**.

### Output

For each test case, output a single line containing the answer of the problem, i.e. the valid string if it exists otherwise "impossible" (without quotes). If there are more than possible answers, you can output any.

### Constraints

- **1 ≤ T ≤ 20**
- **1 ≤ P, N ≤ 105**

### Subtasks

- **Subtask #1** (25 points) : **P = N**
- **Subtask #2** (75 points) : No additional constraints

### Example

<pre>
<b>Input</b>
5
3 1
2 2
3 3
4 4
6 3

<b>Output</b>
impossible
impossible
aba
abba
abaaba

</pre>### Explanation
**Example 1**: The only strings possible are either aaa or bbb, which Chef doesn't like. So, the answer is impossible.

**Example 2**: There are four possible strings, aa, ab, ba, bb. Only aa and bb are palindromic, but Chef doesn't like these strings. Hence, the answer is impossible.

**Example 4**: The string abba is a palindrome and has a period of 4.

**Example 5**: The string abaaba is a palindrome and has a period of length 3.
