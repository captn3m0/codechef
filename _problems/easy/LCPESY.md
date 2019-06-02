---
category_name: easy
problem_code: LCPESY
problem_name: 'Longest Common Pattern'
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
problem_author: shiplu
problem_tester: gerald
date_added: 19-12-2013
tags:
    - cakewalk
    - feb14
    - shiplu
editorial_url: 'http://discuss.codechef.com/problems/LCPESY'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493558159
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/FEB14/mandarin/LCPESY.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/LCPESY.pdf).

As we all know, Chef is cooking string for long days, his new discovery on string is the *longest common pattern length*. The *longest common pattern length* between two strings is the maximum number of characters that both strings have in common. Characters are case sensitive, that is, lower case and upper case characters are considered as different. Note that characters can repeat in a string and a character might have one or more occurrence in common between two strings. For example, if Chef has two strings **A = "Codechef"** and **B = "elfedcc"**, then the *longest common pattern length* of **A** and **B** is **5** (common characters are **c**, **d**, **e**, **e**, **f**).

Chef wants to test you with the problem described above. He will give you two strings of Latin alphabets and digits, return him the *longest common pattern length*.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. Then the description of **T** test cases follows.

The first line of each test case contains a string **A**. The next line contains another character string **B**.

### Output

For each test case, output a single line containing a single integer, the *longest common pattern length* between **A** and **B**.

### Constraints

- **1 ≤ T ≤ 100**
- **1 ≤ |A|, |B| ≤ 10000 (104)**, where **|S|** denotes the length of the string **S**
- Both of **A** and **B** can contain only alphabet characters (both lower and upper case) and digits

### Example

<pre><b>Input:</b>
4
abcd
xyz
abcd
bcda
aabc
acaa
Codechef
elfedcc

<b>Output:</b>
0
4
3
5
</pre>
### Explanation

**Example case 1.** There is no common character.

**Example case 2.** All the characters are same.

**Example case 3.** Three characters (**a**, **a** and **c**) are same.

**Example case 4.** This sample is mentioned by the statement.
