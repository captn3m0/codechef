---
category_name: hard
problem_code: PALPROB
problem_name: Palindromeness
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: karanaggarwal
date_added: 10-03-2015
tags:
    - dfs
    - ltime23
    - medium
    - palindrome
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/PALPROB'
time:
    view_start_date: 1430037000
    submit_start_date: 1430037000
    visible_start_date: 1430037000
    end_date: 1735669800
    current: 1493556787
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME23/mandarin/PALPROB.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME23/russian/PALPROB.pdf).

Let us define the palindromeness of a string in the following way:

- If the string is not a palindrome, its' palindromeness is zero.
- The palindromeness of an one-letter string is **1**.
- The palindromness of a string **S** of the length greater than one is **1** + "palindromeness of the string that is formed by the first \[|**S**|/2\] symbols of **S**".

Let us consider some examples for better understanding:

- The palindromeness of the string **zxqfd** is , since the string is not a palindrome.
- The palindromeness of the string **a** is **1**, by definition.
- The palindromeness of the string **aa** is **2**, beucase for "aa" we get **1** + palindromeness of "a", that is one, so we get **2**.
- The palindromeness of the string **abacaba** is **3**.

You are given a string **S**. Find the sum of the palindromenesses of all the non empty substrings of  **S** (i.e. **S\[i..j\]**, where **i** <= **j**). In other words, you have to calculate the sum of palindromenesses of **N \* (N + 1) / 2** substrings of **S**, where **N** is the length of **S**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first and only line of every test case contains a single string **S** for the corresponding test case.

### Output

For each test case, output a single line containing an integer corresponding to the answer to the problem.

### Constraints

- **1** ≤ **T** ≤ **3**
- **S** consists only of lower-case Latin letters.

Subtask 1 (15 points):

- **1** ≤ **|S|** ≤ **100**

Subtask 2 (23 points):

- **1** ≤ **|S|** ≤ **1000**

Subtask 3 (62 points):

- **1** ≤ **|S|** ≤ **105**

### Example

<pre><b>Input:</b>
2
zxqfd
aba

<b>Output:</b>
5
5

</pre>### Explanation
**Example case 1:** There is no palindrome that occurs as the substring of **zxqfd** and has the length more than **1**. The individual characters are palindromes of the palindromeness of **1**.

**Example case 2:** The palindromeness of **aba** is **2** and the sum of the palindromenesses of single characters is **3**.
