---
category_name: medium
problem_code: WORKCHEF
problem_name: 'Chef and special numbers'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: omelyanenko
problem_tester: mugurelionut
date_added: 9-05-2016
tags:
    - digit
    - july16
    - maths
    - medium
    - omelyanenko
editorial_url: 'http://discuss.codechef.com/problems/WORKCHEF'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/WORKCHEF.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/WORKCHEF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/WORKCHEF.pdf) as well.

Chef's team is going to participate in the legendary math battles. This time the main task of the competition is to calculate number of **K**-special numbers in the range **\[L, R\]** (i.e. **L**, **L + 1**, **L + 2**, ..., **R**).

A number **X** is said to be **K**-special if there exist **K** or more different digits, such that **X** is divisible by those digits and those digits are present in the decimal representation of the number. For example, number 48 is both **1** and **2** special, as it is divisible by digits 4 and 8. Note that no positive integer is divisible by number 0.

Chef asked you to help him with this task. There will be **Q** questions of forms **L, R, K**. For each of these questions, you have to tell How many **K**-special numbers are the range **\[L, R\]** ?".

### Input

First line of the input contains an integer **Q** that denotes number of questions Chef was asked.

In the next **Q** lines follow the questions, i-th of the line will denote the i-th question represented by three space separated integer **L, R, K** respectively.

### Output

For each question, output an integer in a separate line containing the answer of the question.

### Constraints and Subtasks

**Subtask 1 : \[10 points\]** - **1** ≤ **Q** ≤ **3**
- **1** ≤  **L**  ≤  **R**  ≤ **106**
- 0 ≤  **K**  ≤  **9**

**Subtask 2 : \[20 points\]**

- **1** ≤ **Q** ≤ **3**
- **1** ≤  **L**  ≤  **R**  ≤ **109**
- 0 ≤  **K**  ≤  **9**

**Subtask 3 : \[70 points\]**

- **1** ≤ **Q** ≤ **3**
- **1** ≤  **L**  ≤  **R**  ≤ **1018**
- 0 ≤  **K**  ≤  **9**

### Example

<pre>
<b>Input:</b>
3
48 48 1
48 48 2
5 15 1

<b>Output:</b>
1
1
11
</pre>
### Explanation

**Example case 1 and 2**. 48 is both **1** and **2** special as explained in the problem statement. Hence answer is 1.
