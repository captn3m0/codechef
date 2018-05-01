---
category_name: medium
problem_code: CHGLSTGT
problem_name: 'Girl Friend and String Gift'
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
problem_author: vineetpaliwal
problem_tester: null
date_added: 6-10-2013
tags:
    - dynamic
    - ltime05
    - palindromes
    - programming
    - simple
    - strings
    - vineetpaliwal
editorial_url: 'http://discuss.codechef.com/problems/CHGLSTGT'
time:
    view_start_date: 1382862600
    submit_start_date: 1382862600
    visible_start_date: 1382862600
    end_date: 1735669800
    current: 1493557558
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME05/russian/CHGLSTGT.pdf)

Chef's Girl Friend has given him a unique gift. She has given him a string **S**. Chef being a gentleman wants to return her gift in a unique way. He wants to break the string he has received into some number of substrings so that each substring is a palindrome. However he does not want break the string into too many substrings, otherwise the average size of his strings will become small. What is the minimum number of substrings in which the given string can be broken so that each substring is a palindrome.

### Tips: 

Refer <http://en.wikipedia.org/wiki/Palindrome> for the definition of a "palindrome"

### Input

Input description.

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows:
- The first line of each test case contains a single integer **N** denoting the number of alphabets in the given string. The second line contains the given string.

### Output

For each test case output a single integer the answer to the given test case. Print answer for each test case on a separate line.

### Constraints

All characters in the given string are upper case English alphabets.

- **1** ≤ **T** ≤ **10**
- **1** ≤ **|S|** ≤ **5000**

### Example

<pre><b>Input:</b>
<p>1 
7
ABCCBDA <br></br>
<b>Output:</b>
4</p>
</pre>### Explanation

**Example case 1.** The given string can be broken into **"A" , "BCCB" , "D" , "A"**. It can be verified that you can't break the given string into less than 4 substrings such that each substring in a palindrome.

###  Scoring 

  **Subtask 1: (15 points):**

- **1** ≤ **|S|** ≤ **20**

  **Subtask 2: (25 points):**

- **1** ≤ **|S|** ≤ **250**

  **Subtask 1: (60 points):**

- **1** ≤ **|S|** ≤ **5000**
