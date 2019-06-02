---
category_name: medium
problem_code: SEAGM2
problem_name: 'Sereja and Game 2'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: mugurelionut
date_added: 10-09-2014
tags:
    - easy
    - july15
    - maths
    - probability
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAGM2'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493557907
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese ](/download/translated/JULY15/mandarin/SEAGM2.pdf) and [Russian](/download/translated/JULY15/russian/SEAGM2.pdf).

Sereja is playing a game called *Winner Eats Sandwich* with his friends. There are **N** persons in total, including Sereja. Sereja is allotted the number 1, while his friends are allotted numbers from 2 to **N**. A set of this game consists of **M** parts. Probability that a player numbered **i** wins part **j** of any set is **p\[i\]\[j\]**. Sereja and his friends play all the **M** parts of the first set. If someone wins all the parts, he is declared the winner of the match. Otherwise, another set of the game is played. A match of the game continues until someone wins a set. The winner of the set is then declared the winner of the game, and gets to eat the sandwich.

Now Sereja is interested in the probability with which he can win the match in no more than 10^(10^(10^(10^(10^10)))) sets. This is because the sandwich gets cold by the end of these many sets, and Sereja hates cold sandwiches.

### Input

First line contains the number of test cases, **T**. The description of the **T** tests follows. First line of each test case contains two space separated integers **N, M**. Each of the next **N** lines contain **M** space-separated numbers, with the **j**th number of the **i**th line denoting **p\[i\]\[j\]**. All numbers will be given with not more than 4 digits after the decimal point.

### Output

For each test case, output the probability Sereja is interested in, with 6 digits after the decimal point.

### Constraints

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N** ≤ **13**
- **1** ≤ **M** ≤ **10000**
- it is guaranteed that for each **j**, the sum **p\[1\]\[j\] + p\[2\]\[j\] + ... + p\[N\]\[j\] is 1**
 
**Subtask 1 (10 points)**

- **1 ≤ N, M ≤ 4**
 
**Subtask 2 (90 points)**

- Original constrains
 
### Example

 ```
<b>Input:</b>
2
2 2
1.0000 1.0000
0.0000 0.0000
2 3
0.5000 0.5000 0.5000
0.5000 0.5000 0.5000 

<b>Output:</b>
1.000000
0.500000
<pre>