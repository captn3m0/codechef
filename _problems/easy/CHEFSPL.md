---
category_name: easy
problem_code: CHEFSPL
problem_name: 'Chef And Special Dishes'
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
problem_author: prateekg603
problem_tester: furko
date_added: 10-02-2016
tags:
    - march16
    - prateekg603
    - simple
    - string
editorial_url: 'http://discuss.codechef.com/problems/CHEFSPL'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493558212
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/CHEFSPL.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/CHEFSPL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/CHEFSPL.pdf) as well.

One day, Chef prepared **D** brand new dishes. He named the i-th dish by a string **Si**. After the cooking, he decided to categorize each of these **D** dishes as _special_ or not.

A dish **Si** is called _special_ if it's name (i.e. the string **Si**) can be represented in the form of a _double_ string by removing at most one (possibly zero) character from it's name from any position.

A string is called a _double_ string if it can be represented as a concatenation of two identical, non-empty strings.
e.g. "abab" is a double string as it can be represented as "ab" + "ab" where + operation denotes concatenation.
Similarly, "aa", "abcabc" are double strings whereas "a", "abba", "abc" are not.

### Input

- First line of the input contains an integer **D** denoting the number of dishes prepared by Chef on that day.
- Each of the next **D** lines will contain description of a dish. 
  - The i-th line contains the name of i-th dish **Si**.

### Output

For each of the **D** dishes, print a single line containing "**YES**" or "**NO**" (without quotes) denoting whether the dish can be called as a _special_ or not.

### Constraints

- **1** ≤ **D** ≤ **106**
- **1** ≤ **|Si|** ≤ **106**.
- Each character of string **Si** will be lower case English alphabet (i.e. from 'a' to 'z').

### Subtasks

**Subtask #1 : (20 points)**

- Sum of **|Si|** in an input file doesn't exceed **2 \* 103**

**Subtask 2 : (80 points)**

- Sum of **|Si|** in an input file doesn't exceed **2 \* 106**

### Example

<pre><b>Input:</b>
3
aba
abac
abcd

<b>Output:</b>
YES
NO
NO


</pre>### Explanation
**Example case 1.**
We can remove the character at position 1 (0-based index) to get "aa" which is a _double_ string. Hence, it is a _special_ dish.

**Example case 2.**
It is not possible to remove the character at any of the position to get the double string. Hence, it is not a _special_ dish.
