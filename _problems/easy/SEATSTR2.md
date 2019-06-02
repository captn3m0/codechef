---
category_name: easy
problem_code: SEATSTR2
problem_name: 'Sereja and Two Strings 2'
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
problem_author: sereja
problem_tester: furko
date_added: 11-10-2014
tags:
    - combinatorics
    - march16
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEATSTR2'
time:
    view_start_date: 1458034200
    submit_start_date: 1458034200
    visible_start_date: 1458034200
    end_date: 1735669800
    current: 1493558187
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH16/mandarin/SEATSTR2.pdf), [Russian](http://www.codechef.com/download/translated/MARCH16/russian/SEATSTR2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MARCH16/vietnamese/SEATSTR2.pdf) as well.

Sereja has a string **A** consisting of **n** lower case English letters.

Sereja calls two strings **X** and **Y** each of length **n** *similar* if they can be made equal by applying the following operation at most once in **each** of them.

- Chose any two position **i, j** in the string (**i** can be equal to **j** too). Swap the characters at position **i** with character at position **j**.

For example strings *"abcd"* and *"acbd"* are similar, strings *"ab"* and *"ab"* are similar, but strings *"abcde"* and *"bcdea"* are not similar. Note that strings *"abc"* and *"cab"* are also similar, as you can swap 'a' and 'c' in the first string to get *"cba"* and 'a' and 'b' in the second string to get *"cba"*.

Now Sereja is interested in finding number of **ordered** pairs of non *similar* strings **X** and **Y** such that they can be constructed from a given string **A** by permutation of its characters. As answer could be large, please output your answer modulo (109 + 7).

**Note** 
A string **s** (of size **n**) is said to be constructed from string **t** (also of size **n**) by permutation of its characters if there exists a permutation **P** (of length **n**), such that **s\[i\] = t\[P\[i\]\]** for each **i** from 1 to **n**.

### Input

- First line contain integer **T** - number of test cases.
- For each of the next **T** lines: 
  - Each line contains a string **A** as defined in the problem.

### Output

For each test case, output answer modulo 1000000007 (109 + 7) in separate line.

### Constraints

- **1** ≤ **T** ≤  **10**
- **1** ≤ **n** ≤  **10^5**

### Constraints

- **Subtask #1:** **1** ≤ **n** ≤  **10**  (**25** points)
- **Subtask #2:** **1** ≤ **n** ≤  **100**  (**25** points)
- **Subtask #3:** **1** ≤ **n** ≤  **1000**  (**25** points)
- **Subtask #4:** **original constraints** (**25** points)

### Example

<pre><b>Input:</b>
2
z
abcd

<b>Output:</b>
0
144
</pre>