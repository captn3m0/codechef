---
category_name: medium
problem_code: STRAB
problem_name: 'How to Write a Message'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: witua
problem_tester: iscsi
date_added: 4-03-2015
tags:
    - cook56
    - dynamic
    - easy
    - recursion
    - witua
editorial_url: 'http://discuss.codechef.com/problems/STRAB'
time:
    view_start_date: 1427049000
    submit_start_date: 1427049000
    visible_start_date: 1427049000
    end_date: 1735669800
    current: 1493557934
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK56/mandarin/STRAB.pdf) and [Russian](http://www.codechef.com/download/translated/COOK56/russian/STRAB.pdf) as well.

One day, you decided to write a message to your girl friend consisting of **N** uppercase English letters.

Your girlfriend's alphabet is limited to only two letters: 'A' and 'B'. She recognizes only the words that are of length **M** containing letters from her alphabet.

There are some words that your girlfriend hates. You are given two strings **X** and **Y**, which represent some two words she recognizes. Your girlfriend hates words **X**, **Y** and also each word that she recognizes and is lexicographically greater than **X** and smaller than **Y** .

For example, if **M** = 3, **X** = "ABA" and **Y** = "BBA" then all words the girlfriend hates are: "ABA", "ABB", "BAA", "BAB" and "BBA". Note that she doesn't hate words "AAA", "BB", "AC" or "BCAD".

The message that you will send to the girlfriend should not contain any of words she hates as a substring. Note that the message **can** contain letters the girl doesn't recognize. The message will contain **N** uppercase English letters. Find the number of different messages you can send. Since the answer can be large, output it modulo **(109 + 7)**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **M**.

The second line contains the string **X** and the third line contains the string **Y**, both of length **M**.

### Output

For each test case, output a single line containing the answer to the corresponding test case, modulo **(109 + 7)**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N**, **M** ≤ **19**
- **X** and **Y** will consist only of letters 'A' and 'B'.
- **X** will not be lexicographically greater than **Y**.

### Example

<pre><b>Input:</b>
1
1 1
A
B

<b>Output:</b>
24

</pre>### Explanation
**Example case 1.** Out of all **26** possible messages in this case only two are invalid (i.e. "A" and "B"). Thus, the answer is **26 - 2 = 24**.
